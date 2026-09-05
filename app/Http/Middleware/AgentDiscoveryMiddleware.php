<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\CompanySetting;
use App\Models\Service;
use App\Models\Project;
use App\Models\Article;
use App\Models\Testimonial;

class AgentDiscoveryMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // 1. Add RFC 8288 Link headers for agent discovery on all public pages
        if (! $request->is('admin*') && ! $request->is('filament*')) {
            $linkHeaders = [
                '</.well-known/api-catalog>; rel="api-catalog"',
                '</docs/api>; rel="service-doc"',
                '</.well-known/ai-catalog.json>; rel="ai-catalog"',
                '</.well-known/agent-skills/index.json>; rel="agent-skills"',
                '</.well-known/mcp/server-card.json>; rel="mcp-server-card"',
                '</.well-known/oauth-protected-resource>; rel="oauth-protected-resource"',
                '</llms.txt>; rel="index"',
                '</auth.md>; rel="author"',
            ];

            $response->headers->set('Link', implode(', ', $linkHeaders));
            $response->headers->set('Content-Signal', 'ai-train=no, search=yes, ai-input=no');
        }

        // 2. Markdown content negotiation (Markdown for Agents)
        // Do NOT override if the endpoint already returned markdown, JSON, XML, or is a well-known / file route
        $contentType = $response->headers->get('Content-Type', '');
        if (str_contains($contentType, 'text/markdown') || 
            str_contains($contentType, 'application/json') || 
            str_contains($contentType, 'text/plain') || 
            str_contains($contentType, 'text/xml') || 
            $request->is('.well-known*') || 
            $request->is('auth.md') || 
            $request->is('*.md') || 
            $request->is('*.txt') || 
            $request->is('*.json') || 
            $request->is('*.xml')) {
            return $response;
        }

        $acceptHeader = $request->header('Accept', '');
        $userAgent = $request->header('User-Agent', '');
        $isAgentRequester = str_contains($acceptHeader, 'text/markdown') || 
            preg_match('/(ChatGPT|PerplexityBot|ClaudeBot|GPTBot|Applebot-Extended)/i', $userAgent);

        if ($isAgentRequester && $request->isMethod('GET') && ! $request->is('admin*') && ! $request->is('filament*')) {
            $markdown = $this->generateMarkdown($request, $response);
            $tokenCount = (int) ceil(mb_strlen($markdown) / 4);

            return response($markdown, 200, [
                'Content-Type' => 'text/markdown; charset=utf-8',
                'x-markdown-tokens' => (string) $tokenCount,
                'Vary' => 'Accept, User-Agent',
                'Link' => $response->headers->get('Link', ''),
                'Content-Signal' => 'ai-train=no, search=yes, ai-input=no',
            ]);
        }

        return $response;
    }

    /**
     * Generate markdown representation for the requested page
     */
    protected function generateMarkdown(Request $request, Response $response): string
    {
        $path = trim($request->path(), '/');

        if ($path === '' || $path === '/') {
            return $this->generateHomeMarkdown();
        }

        if ($path === 'services') {
            return $this->generateServicesMarkdown();
        }

        if ($path === 'about-us') {
            return $this->generateAboutMarkdown();
        }

        if ($path === 'portfolio') {
            return $this->generatePortfolioMarkdown();
        }

        if (str_starts_with($path, 'projects/')) {
            $slug = substr($path, strlen('projects/'));
            return $this->generateProjectMarkdown($slug);
        }

        if ($path === 'articles') {
            return $this->generateArticlesMarkdown();
        }

        if (str_starts_with($path, 'articles/')) {
            $slug = substr($path, strlen('articles/'));
            return $this->generateArticleMarkdown($slug);
        }

        if ($path === 'contact-us') {
            return $this->generateContactMarkdown();
        }

        if ($path === 'testimonials') {
            return $this->generateTestimonialsMarkdown();
        }

        // Fallback: extract clean text/markdown from HTML response content
        $content = $response->getContent();
        if ($content && is_string($content) && str_contains($content, '<html')) {
            return $this->htmlToMarkdownFallback($content);
        }

        return "# E-DATA360 Analytics\n\nVisit " . config('app.url') . " for more information.";
    }

    protected function generateHomeMarkdown(): string
    {
        $company = CompanySetting::first();
        $name = $company?->company_name ?: 'E-DATA360';
        $about = $company?->about_short ?: 'شريكك الموثوق لإدارة كل بياناتك وتحويلها لرؤية واضحة في المملكة العربية السعودية.';

        $services = Service::where('is_active', true)->orderBy('order')->take(6)->get();
        $projects = Project::where('status', 'published')->latest()->take(4)->get();
        $articles = Article::published()->latest()->take(3)->get();

        $md = "# {$name} - تحليل البيانات ولوحات تحكم Excel و Power BI في السعودية\n\n";
        $md .= "{$about}\n\n";

        $md .= "## معلومات الاتصال والمقرات بالسعودية:\n";
        $md .= "- المقر الرئيسي: " . ($company?->location_text ?: 'الرياض - طريق الملك فهد، المملكة العربية السعودية') . "\n";
        if ($company?->location_secondary) {
            $md .= "- الفرع الإقليمي: {$company->location_secondary}\n";
        }
        $md .= "- الهاتف والواتساب: " . ($company?->phone_primary ?: '+966 55 397 0641') . "\n";
        $md .= "- البريد الإلكتروني: " . ($company?->main_email ?: 'work@e-data360.com') . "\n";
        $md .= "- رابط الموقع: " . config('app.url') . "\n\n";

        $md .= "## الخدمات المتوفرة (Services):\n";
        foreach ($services as $service) {
            $pricing = $service->price_starting ? " [السعر: {$service->price_label} {$service->price_starting}]" : ($service->duration ? " [المدة: {$service->duration}]" : '');
            $md .= "### {$service->title}{$pricing}\n";
            $md .= strip_tags($service->short_description ?: $service->description) . "\n\n";
        }

        if ($projects->count() > 0) {
            $md .= "## نماذج من أعمالنا (Portfolio Projects):\n";
            foreach ($projects as $proj) {
                $md .= "- **{$proj->title}**: " . strip_tags($proj->short_description ?: $proj->description) . "\n";
            }
            $md .= "\n";
        }

        if ($articles->count() > 0) {
            $md .= "## أحدث المقالات المعرفية:\n";
            foreach ($articles as $art) {
                $md .= "- **{$art->title}**: " . strip_tags($art->excerpt ?: '') . "\n";
            }
            $md .= "\n";
        }

        return $md;
    }

    protected function generateServicesMarkdown(): string
    {
        $services = Service::where('is_active', true)->with('features')->orderBy('order')->get();

        $md = "# خدمات E-DATA360 الذكية في تحليل البيانات وتصميم الداشبوردات بالسعودية\n\n";
        $md .= "نقدم باقة متكاملة من الخدمات التقنية والتحليلية المصممة خصيصاً للمنشآت والشركات في المملكة:\n\n";

        foreach ($services as $s) {
            $md .= "## {$s->title}\n";
            if ($s->price_starting) {
                $md .= "**السعر:** {$s->price_label} {$s->price_starting}\n";
            }
            if ($s->duration) {
                $md .= "**المدة والتسليم:** {$s->duration}\n";
            }
            $md .= "**الوصف:** " . strip_tags($s->description ?: $s->short_description) . "\n\n";

            if ($s->features && $s->features->count() > 0) {
                $md .= "**المميزات الرئيسية:**\n";
                foreach ($s->features as $feat) {
                    $md .= "- {$feat->feature_text}\n";
                }
                $md .= "\n";
            }
        }

        return $md;
    }

    protected function generateAboutMarkdown(): string
    {
        $company = CompanySetting::first();
        $name = $company?->company_name ?: 'E-DATA360';

        $md = "# من نحن - {$name}\n\n";
        $md .= ($company?->about_short ?: "شريكك الاستراتيجي في المملكة العربية السعودية لتحويل البيانات إلى لوحات تحكم وقرارات دقيقة تدعم نمو منشأتك ومستهدفات رؤية 2030.") . "\n\n";
        $md .= "## رؤيتنا\n";
        $md .= "تمكين الشركات السعودية من فهم مؤشراتها المالية والتشغيلية والتسويقية لحظياً من خلال لوحات تحكم عصرية وذكية بأعلى معايير الدقة والأمان.\n\n";
        $md .= "## مواقعنا بالسعودية\n";
        $md .= "- الرياض: طريق الملك فهد\n";
        $md .= "- جدة: طريق الملك عبدالعزيز\n";

        return $md;
    }

    protected function generatePortfolioMarkdown(): string
    {
        $projects = Project::where('status', 'published')->with('types')->latest()->get();

        $md = "# معرض النماذج والمشاريع - E-DATA360\n\n";
        $md .= "استعرض نماذج من لوحات التحكم التفاعلية والتقارير المنجزة للشركات:\n\n";

        foreach ($projects as $proj) {
            $md .= "## {$proj->title}\n";
            $md .= strip_tags($proj->description ?: $proj->short_description) . "\n\n";
        }

        return $md;
    }

    protected function generateProjectMarkdown(string $slug): string
    {
        $project = Project::where('slug', $slug)->first();
        if (! $project) {
            return "# المشروع غير موجود\n\nعذراً، هذا المشروع غير متوفر.";
        }

        $md = "# {$project->title}\n\n";
        $md .= strip_tags($project->description ?: $project->short_description) . "\n\n";
        if ($project->client) {
            $md .= "**العميل:** {$project->client}\n";
        }
        if ($project->url) {
            $md .= "**رابط المعاينة المباشرة:** {$project->url}\n";
        }

        return $md;
    }

    protected function generateArticlesMarkdown(): string
    {
        $articles = Article::published()->latest()->get();

        $md = "# المدونة المعرفية لتحليل البيانات - E-DATA360\n\n";
        foreach ($articles as $art) {
            $md .= "## {$art->title}\n";
            $md .= strip_tags($art->excerpt ?: '') . "\n";
            $md .= "[قراءة المقال الكامل](" . route('articles.show', $art->slug) . ")\n\n";
        }

        return $md;
    }

    protected function generateArticleMarkdown(string $slug): string
    {
        $article = Article::where('slug', $slug)->first();
        if (! $article) {
            return "# المقال غير موجود\n\nعذراً، هذا المقال غير متاح.";
        }

        $md = "# {$article->title}\n\n";
        $md .= "**تاريخ النشر:** " . ($article->published_at?->format('Y-m-d') ?: '') . "\n\n";
        $md .= strip_tags($article->content) . "\n";

        return $md;
    }

    protected function generateContactMarkdown(): string
    {
        $company = CompanySetting::first();
        $md = "# تواصل معنا - E-DATA360\n\n";
        $md .= "نحن متواجدون لمساعدتك في تحليل بياناتك وبناء لوحات التحكم الخاصة بمنشأتك.\n\n";
        $md .= "- **المقر الرئيسي:** " . ($company?->location_text ?: 'الرياض - طريق الملك فهد') . "\n";
        $md .= "- **الهاتف والواتساب:** " . ($company?->phone_primary ?: '+966 55 397 0641') . "\n";
        $md .= "- **البريد الإلكتروني:** " . ($company?->main_email ?: 'work@e-data360.com') . "\n";
        $md .= "- **ساعات العمل:** من الأحد إلى الخميس، 9:00 ص - 6:00 م\n";

        return $md;
    }

    protected function generateTestimonialsMarkdown(): string
    {
        $testimonials = Testimonial::where('is_active', true)->get();
        $md = "# آراء وتقييمات العملاء - E-DATA360\n\n";

        foreach ($testimonials as $t) {
            $source = $t->source === 'google' ? '[Google Review ✦]' : '';
            $md .= "### {$t->client_name} ({$t->client_position} - {$t->client_company}) {$source}\n";
            $md .= "التقييم: {$t->rating}/5 نجوم\n";
            $md .= "الشهادة: \"{$t->testimonial}\"\n\n";
        }

        return $md;
    }

    protected function htmlToMarkdownFallback(string $html): string
    {
        // Strip scripts and styles
        $text = preg_replace('/<(script|style)\b[^>]*>(.*?)<\/\1>/is', '', $html);
        // Replace headings
        $text = preg_replace('/<h1[^>]*>(.*?)<\/h1>/i', "\n# $1\n", $text);
        $text = preg_replace('/<h2[^>]*>(.*?)<\/h2>/i', "\n## $1\n", $text);
        $text = preg_replace('/<h3[^>]*>(.*?)<\/h3>/i', "\n### $1\n", $text);
        // Replace paragraph and break tags
        $text = preg_replace('/<p[^>]*>(.*?)<\/p>/i', "\n$1\n", $text);
        $text = preg_replace('/<br\s*\/?>/i', "\n", $text);
        // Strip other tags
        $text = strip_tags($text);
        // Clean multiple newlines
        return trim(preg_replace("/[\r\n]+/", "\n\n", html_entity_decode($text)));
    }
}
