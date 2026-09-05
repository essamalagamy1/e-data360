<?php

use App\Http\Controllers\AgentDiscoveryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DesignRequestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\TestimonialController;
use App\Services\GoogleReviewsService;
use Illuminate\Support\Facades\Route;

// Public Website Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/portfolio', [ProjectController::class, 'index'])->name('portfolio');
Route::get('/careers', [JobApplicationController::class, 'create'])->name('careers.create');
Route::post('/careers', [JobApplicationController::class, 'store'])->name('careers.store');
Route::get('/projects/{project:slug}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/request-a-design', [DesignRequestController::class, 'create'])->name('request-design.create');
Route::post('/request-a-design', [DesignRequestController::class, 'store'])->name('request-design.store');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');
Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.store');
Route::get('/privacy-policy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms-conditions', [PageController::class, 'terms'])->name('terms');
Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');
Route::get('/add-testimonial', [TestimonialController::class, 'create'])->name('testimonial.create');
Route::post('/add-testimonial', [TestimonialController::class, 'store'])->name('testimonial.store');

// Articles/Blog Routes
Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
Route::get('/articles/{article:slug}', [ArticleController::class, 'show'])->name('articles.show');

// Google Reviews Sync Route
Route::get('/sync-google-reviews', function (GoogleReviewsService $service) {
    $result = $service->syncReviews();
    return response()->json($result);
})->name('reviews.sync');

// AI Agent Discovery & Protocol Endpoints (Agent-Ready Level 5)
Route::get('/.well-known/api-catalog', [AgentDiscoveryController::class, 'apiCatalog'])->name('wellknown.api-catalog');
Route::get('/.well-known/ai-catalog.json', [AgentDiscoveryController::class, 'aiCatalog'])->name('wellknown.ai-catalog');
Route::get('/.well-known/mcp/server-card.json', [AgentDiscoveryController::class, 'mcpServerCard'])->name('wellknown.mcp.card');
Route::get('/.well-known/mcp.json', [AgentDiscoveryController::class, 'mcpServerCard'])->name('wellknown.mcp.json');
Route::get('/.well-known/agent-skills/index.json', [AgentDiscoveryController::class, 'agentSkillsIndex'])->name('wellknown.agent-skills.index');
Route::get('/.well-known/agent-skills/{skill}/SKILL.md', [AgentDiscoveryController::class, 'agentSkillFile'])->name('wellknown.agent-skills.file');
Route::get('/.well-known/oauth-protected-resource', [AgentDiscoveryController::class, 'oauthProtectedResource'])->name('wellknown.oauth-protected-resource');
Route::get('/.well-known/oauth-authorization-server', [AgentDiscoveryController::class, 'oauthAuthorizationServer'])->name('wellknown.oauth-authorization-server');
Route::get('/.well-known/openid-configuration', [AgentDiscoveryController::class, 'oauthAuthorizationServer'])->name('wellknown.openid-configuration');
Route::get('/.well-known/jwks.json', [AgentDiscoveryController::class, 'jwks'])->name('wellknown.jwks');
Route::get('/.well-known/agent-card.json', [AgentDiscoveryController::class, 'agentCard'])->name('wellknown.agent-card');
Route::get('/.well-known/agent-readiness.json', [AgentDiscoveryController::class, 'agentReadiness'])->name('wellknown.agent-readiness');

// Machine-readable documentation and specifications
Route::get('/auth.md', [AgentDiscoveryController::class, 'authMd'])->name('agent.auth-md');
Route::get('/llms.txt', [AgentDiscoveryController::class, 'llmsTxt'])->name('agent.llms-txt');
Route::get('/llms-full.txt', [AgentDiscoveryController::class, 'llmsFullTxt'])->name('agent.llms-full');
Route::get('/openapi.json', [AgentDiscoveryController::class, 'openApi'])->name('api.openapi');
Route::get('/docs/api', [AgentDiscoveryController::class, 'apiDocs'])->name('api.docs');
Route::get('/api/health', [AgentDiscoveryController::class, 'health'])->name('api.health');

// SEO Sitemaps
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap.index');
Route::get('/sitemap-pages.xml', [SitemapController::class, 'pages'])->name('sitemap.pages');
Route::get('/sitemap-services.xml', [SitemapController::class, 'services'])->name('sitemap.services');
Route::get('/sitemap-projects.xml', [SitemapController::class, 'projects'])->name('sitemap.projects');
Route::get('/sitemap-articles.xml', [SitemapController::class, 'articles'])->name('sitemap.articles');

// Dynamic robots.txt with Content Signals
Route::get('/robots.txt', function () {
    $siteUrl = rtrim(config('app.url', url('/')), '/');
    
    $content = "# robots.txt for E-DATA360 Analytics\n";
    $content .= "User-agent: *\n";
    $content .= "Allow: /\n";
    $content .= "Disallow: /admin\n";
    $content .= "Disallow: /filament\n\n";

    $content .= "# AI Agents & Web Crawlers Directives\n";
    $content .= "User-agent: GPTBot\nAllow: /\n\n";
    $content .= "User-agent: ClaudeBot\nAllow: /\n\n";
    $content .= "User-agent: PerplexityBot\nAllow: /\n\n";
    $content .= "User-agent: Applebot-Extended\nAllow: /\n\n";

    $content .= "# Content Signals (AI usage preferences)\n";
    $content .= "Content-Signal: ai-train=no, search=yes, ai-input=yes\n\n";

    $content .= "# Sitemaps & LLM Discovery\n";
    $content .= "Sitemap: {$siteUrl}/sitemap.xml\n";
    $content .= "Sitemap: {$siteUrl}/sitemap-services.xml\n";
    $content .= "Sitemap: {$siteUrl}/sitemap-projects.xml\n";
    $content .= "Sitemap: {$siteUrl}/sitemap-articles.xml\n";
    $content .= "Link: <{$siteUrl}/llms.txt>; rel=\"index\"\n";
    $content .= "Link: <{$siteUrl}/.well-known/api-catalog>; rel=\"api-catalog\"\n";

    return response($content)->header('Content-Type', 'text/plain; charset=utf-8');
})->name('robots');
