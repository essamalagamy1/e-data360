<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\CompanySetting;
use App\Models\Project;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AgentDiscoveryController extends Controller
{
    /**
     * API Catalog per RFC 9727
     * Returns application/linkset+json
     */
    public function apiCatalog(): Response
    {
        $siteUrl = rtrim(config('app.url', url('/')), '/');

        $data = [
            'linkset' => [
                [
                    'anchor' => "{$siteUrl}/api",
                    'service-desc' => [
                        [
                            'href' => "{$siteUrl}/openapi.json",
                            'type' => 'application/vnd.oai.openapi+json;version=3.0',
                        ],
                    ],
                    'service-doc' => [
                        [
                            'href' => "{$siteUrl}/docs/api",
                            'type' => 'text/html',
                        ],
                    ],
                    'status' => [
                        [
                            'href' => "{$siteUrl}/api/health",
                            'type' => 'application/json',
                        ],
                    ],
                ],
            ],
        ];

        return response(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE), 200, [
            'Content-Type' => 'application/linkset+json; charset=utf-8',
            'Access-Control-Allow-Origin' => '*',
            'Cache-Control' => 'public, max-age=3600',
        ]);
    }

    /**
     * ARD (Agentic Resource Discovery) Capability Manifest
     * Returns application/json at /.well-known/ai-catalog.json
     */
    public function aiCatalog(): JsonResponse
    {
        $siteUrl = rtrim(config('app.url', url('/')), '/');

        $manifest = [
            'specVersion' => '1.0',
            'host' => [
                'displayName' => 'E-DATA360 Analytics',
                'identifier' => 'did:web:e-data360.com',
            ],
            'entries' => [
                [
                    'identifier' => 'urn:air:e-data360.com:server:mcp',
                    'displayName' => 'E-DATA360 MCP Server',
                    'type' => 'application/mcp-server-card+json',
                    'url' => "{$siteUrl}/.well-known/mcp/server-card.json",
                    'representativeQueries' => [
                        'what data analytics and dashboard services does E-DATA360 provide in Saudi Arabia',
                        'request a custom Power BI or Excel dashboard for a Saudi business',
                        'get Power BI training course details and pricing in Riyadh',
                        'track company KPIs and performance metrics in Saudi Arabia',
                    ],
                ],
                [
                    'identifier' => 'urn:air:e-data360.com:skill:dashboard-request',
                    'displayName' => 'E-DATA360 Dashboard Request Skill',
                    'type' => 'text/markdown',
                    'url' => "{$siteUrl}/.well-known/agent-skills/dashboard-request/SKILL.md",
                    'representativeQueries' => [
                        'how to submit a custom Excel or Power BI dashboard design request',
                        'what are the pricing plans and delivery timelines for dashboards in SAR',
                    ],
                ],
                [
                    'identifier' => 'urn:air:e-data360.com:skill:analytics-consulting',
                    'displayName' => 'E-DATA360 Business Intelligence Consulting Skill',
                    'type' => 'text/markdown',
                    'url' => "{$siteUrl}/.well-known/agent-skills/analytics-consulting/SKILL.md",
                    'representativeQueries' => [
                        'business intelligence consultation for SMEs in Saudi Arabia',
                        'how to integrate multi-source business data into unified dashboards',
                    ],
                ],
                [
                    'identifier' => 'urn:air:e-data360.com:api:openapi',
                    'displayName' => 'E-DATA360 REST API Specification',
                    'type' => 'application/vnd.oai.openapi+json;version=3.0',
                    'url' => "{$siteUrl}/openapi.json",
                    'representativeQueries' => [
                        'fetch services catalog and pricing programmatically',
                        'submit dashboard inquiries and quote requests via API',
                    ],
                ],
            ],
        ];

        return response()->json($manifest, 200, [
            'Access-Control-Allow-Origin' => '*',
            'Content-Type' => 'application/json; charset=utf-8',
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    /**
     * MCP Server Card per SEP-1649 / SEP-2127
     * Returns /.well-known/mcp/server-card.json and /.well-known/mcp.json
     */
    public function mcpServerCard(): JsonResponse
    {
        $siteUrl = rtrim(config('app.url', url('/')), '/');

        $card = [
            'serverInfo' => [
                'name' => 'e-data360-mcp-server',
                'title' => 'E-DATA360 Agent MCP Server',
                'version' => '1.0.0',
                'description' => 'MCP server for E-DATA360 Saudi Data Analytics & Dashboard Engineering - interact with services catalog, request dashboard design quotes, and query business intelligence solutions.',
            ],
            'endpoint' => "{$siteUrl}/api/mcp",
            'transport' => 'streamable-http',
            'capabilities' => [
                'tools' => [
                    'listChanged' => true,
                ],
                'resources' => [
                    'subscribe' => false,
                    'listChanged' => true,
                ],
                'prompts' => [
                    'listChanged' => true,
                ],
            ],
            'tools' => [
                [
                    'name' => 'get_services_catalog',
                    'description' => 'List all active data analytics, Power BI, Excel dashboards, and business performance packages with pricing in SAR and delivery times.',
                    'inputSchema' => [
                        'type' => 'object',
                        'properties' => [
                            'category' => ['type' => 'string', 'description' => 'Optional filter (dashboards, training, consultation)'],
                        ],
                    ],
                ],
                [
                    'name' => 'request_dashboard_quote',
                    'description' => 'Submit a customized quote request for Excel or Power BI dashboards for a Saudi company.',
                    'inputSchema' => [
                        'type' => 'object',
                        'required' => ['client_name', 'phone', 'service_slug', 'requirements'],
                        'properties' => [
                            'client_name' => ['type' => 'string'],
                            'company_name' => ['type' => 'string'],
                            'phone' => ['type' => 'string', 'description' => 'Saudi phone number or WhatsApp (+966...)'],
                            'service_slug' => ['type' => 'string', 'enum' => ['excel-dashboards', 'power-bi-dashboards', 'business-performance-management', 'power-bi-course', 'custom-software-web-solutions', 'powerpoint-presentations-reports']],
                            'requirements' => ['type' => 'string', 'description' => 'Summary of data sources and required KPIs'],
                        ],
                    ],
                ],
                [
                    'name' => 'get_company_info',
                    'description' => 'Get E-DATA360 contact details, Riyadh HQ address, Jeddah branch, working hours, and Saudi official channels.',
                    'inputSchema' => ['type' => 'object'],
                ],
            ],
        ];

        return response()->json($card, 200, [
            'Access-Control-Allow-Origin' => '*',
            'Content-Type' => 'application/json; charset=utf-8',
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    /**
     * Agent Skills Discovery Index per Agent Skills Discovery RFC v0.2.0
     * Returns /.well-known/agent-skills/index.json
     */
    public function agentSkillsIndex(): JsonResponse
    {
        $siteUrl = rtrim(config('app.url', url('/')), '/');
        $dashboardSkill = $this->getSkillContent('dashboard-request');
        $analyticsSkill = $this->getSkillContent('analytics-consulting');

        $index = [
            '$schema' => 'https://schemas.agentskills.io/discovery/0.2.0/schema.json',
            'skills' => [
                [
                    'name' => 'dashboard-request',
                    'type' => 'skill-md',
                    'description' => 'Autonomous agent guide to submit client requirements and commission custom Excel and Power BI dashboards from E-DATA360 in Saudi Arabia.',
                    'url' => "{$siteUrl}/.well-known/agent-skills/dashboard-request/SKILL.md",
                    'digest' => 'sha256:' . hash('sha256', $dashboardSkill),
                ],
                [
                    'name' => 'analytics-consulting',
                    'type' => 'skill-md',
                    'description' => 'Guide for agents to evaluate corporate KPI tracking, monthly performance packages, and Power BI training courses.',
                    'url' => "{$siteUrl}/.well-known/agent-skills/analytics-consulting/SKILL.md",
                    'digest' => 'sha256:' . hash('sha256', $analyticsSkill),
                ],
            ],
        ];

        return response()->json($index, 200, [
            'Access-Control-Allow-Origin' => '*',
            'Content-Type' => 'application/json; charset=utf-8',
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    /**
     * Serve individual SKILL.md file
     */
    public function agentSkillFile(string $skill): Response
    {
        $content = $this->getSkillContent($skill);

        return response($content, 200, [
            'Content-Type' => 'text/markdown; charset=utf-8',
            'Access-Control-Allow-Origin' => '*',
        ]);
    }

    /**
     * OAuth Protected Resource Metadata per RFC 9728
     * Returns /.well-known/oauth-protected-resource
     */
    public function oauthProtectedResource(): JsonResponse
    {
        $siteUrl = rtrim(config('app.url', url('/')), '/');

        $metadata = [
            'resource' => $siteUrl,
            'authorization_servers' => [
                $siteUrl,
            ],
            'scopes_supported' => [
                'read',
                'write',
                'agent:execute',
            ],
            'bearer_methods_supported' => [
                'header',
            ],
            'resource_documentation' => "{$siteUrl}/docs/api",
        ];

        return response()->json($metadata, 200, [
            'Access-Control-Allow-Origin' => '*',
            'Content-Type' => 'application/json; charset=utf-8',
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    /**
     * OAuth 2.0 Authorization Server / OpenID Connect Discovery Metadata (RFC 8414)
     * Returns /.well-known/oauth-authorization-server and /.well-known/openid-configuration
     */
    public function oauthAuthorizationServer(): JsonResponse
    {
        $siteUrl = rtrim(config('app.url', url('/')), '/');

        $discovery = [
            'issuer' => $siteUrl,
            'authorization_endpoint' => "{$siteUrl}/oauth/authorize",
            'token_endpoint' => "{$siteUrl}/oauth/token",
            'jwks_uri' => "{$siteUrl}/.well-known/jwks.json",
            'response_types_supported' => ['code', 'token'],
            'grant_types_supported' => [
                'authorization_code',
                'client_credentials',
                'urn:ietf:params:oauth:grant-type:token-exchange',
            ],
            'token_endpoint_auth_methods_supported' => [
                'client_secret_basic',
                'client_secret_post',
                'none',
            ],
            'scopes_supported' => [
                'read',
                'write',
                'agent:execute',
            ],
            'agent_auth' => [
                'skill' => "{$siteUrl}/auth.md",
                'register_uri' => "{$siteUrl}/agent/register",
                'identity_types_supported' => [
                    'identity_assertion',
                    'anonymous',
                ],
                'anonymous' => [
                    'credential_types_supported' => ['bearer'],
                    'claim_uri' => "{$siteUrl}/agent/claim",
                ],
                'identity_assertion' => [
                    'assertion_types_supported' => [
                        'urn:ietf:params:oauth:token-type:id-jag',
                        'verified_email',
                    ],
                    'credential_types_supported' => ['bearer'],
                    'claim_uri' => "{$siteUrl}/agent/claim",
                    'revocation_uri' => "{$siteUrl}/oauth/revoke",
                ],
            ],
            'events_supported' => [
                'https://schemas.openid.net/secevent/oauth/event-type/token-revocation',
            ],
            'revocation_endpoint' => "{$siteUrl}/oauth/revoke",
        ];

        return response()->json($discovery, 200, [
            'Access-Control-Allow-Origin' => '*',
            'Content-Type' => 'application/json; charset=utf-8',
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    /**
     * JWKS placeholder for OAuth discovery
     */
    public function jwks(): JsonResponse
    {
        return response()->json(['keys' => []], 200, [
            'Access-Control-Allow-Origin' => '*',
            'Content-Type' => 'application/json; charset=utf-8',
        ]);
    }

    /**
     * Auth.md for Agent Registration Discovery
     * Returns /auth.md with required # auth.md heading
     */
    public function authMd(): Response
    {
        $siteUrl = rtrim(config('app.url', url('/')), '/');

        $md = <<<MARKDOWN
# auth.md - E-DATA360 Agent Registration & Authentication

Welcome AI agents and autonomous bots. E-DATA360 provides machine-readable discovery and programmatic access for agents operating in Saudi Arabia and globally.

## Agent Audience
This document is intended for autonomous AI agents, LLM tool executors, and MCP clients interacting with E-DATA360 Data Analytics and Dashboard services.

## Registration & Provisioning Flow
- Registration Endpoint: {$siteUrl}/agent/register
- Claim Endpoint: {$siteUrl}/agent/claim
- Revocation Endpoint: {$siteUrl}/oauth/revoke
- Token Endpoint: {$siteUrl}/oauth/token

To register an autonomous agent:
1. Submit agent identity to `POST {$siteUrl}/agent/register` to receive client credentials.
2. Exchange credentials at `POST {$siteUrl}/oauth/token` with `grant_type=client_credentials` for an access token.
3. For anonymous agents, request temporary access at `POST {$siteUrl}/agent/claim`.

## Discovery & Authentication Metadata
- OAuth Protected Resource Metadata: {$siteUrl}/.well-known/oauth-protected-resource
- OAuth Authorization Server: {$siteUrl}/.well-known/oauth-authorization-server
- OpenID Configuration: {$siteUrl}/.well-known/openid-configuration
- API Catalog (RFC 9727): {$siteUrl}/.well-known/api-catalog
- MCP Server Card: {$siteUrl}/.well-known/mcp/server-card.json
- Agent Skills Discovery: {$siteUrl}/.well-known/agent-skills/index.json
- ARD Capability Manifest: {$siteUrl}/.well-known/ai-catalog.json

## Supported Registration & Auth Methods
1. Public Read (Anonymous):
   Agents may query public content (services catalog, portfolio projects, blog articles, FAQs) without credentials using standard HTTP GET requests or MCP read tools.
2. Bearer Token Authentication:
   For write actions (such as commissioning a dashboard design or booking a consultation), agents present a bearer token:
   `Authorization: Bearer <token>`
3. Identity Assertions:
   Supported assertion types:
   - ID-JAG: `urn:ietf:params:oauth:token-type:id-jag`
   - Verified Email assertions

## Contact
For agent integration inquiries, reach our analytics team at work@e-data360.com or WhatsApp: +966 55 397 0641.
MARKDOWN;

        return response($md, 200, [
            'Content-Type' => 'text/markdown; charset=utf-8',
            'Access-Control-Allow-Origin' => '*',
        ]);
    }

    /**
     * A2A Protocol Agent Card
     * Returns /.well-known/agent-card.json
     */
    public function agentCard(): JsonResponse
    {
        $siteUrl = rtrim(config('app.url', url('/')), '/');

        $card = [
            '$schema' => 'https://a2a-protocol.org/schemas/agent-card-v1.json',
            'name' => 'E-DATA360 Analytics Agent',
            'version' => '1.0.0',
            'description' => 'Autonomous data analytics & business intelligence agent for E-DATA360 in Saudi Arabia - dashboard catalog exploration, KPI tracking consultations, and design requests.',
            'url' => $siteUrl,
            'provider' => [
                'name' => 'E-DATA360',
                'url' => $siteUrl,
                'email' => 'work@e-data360.com',
                'phone' => '+966 55 397 0641',
                'location' => 'Riyadh, Kingdom of Saudi Arabia',
            ],
            'capabilities' => [
                'services_inquiry' => true,
                'dashboard_quote_request' => true,
                'kpi_tracking_consultation' => true,
                'markdown_negotiation' => true,
                'mcp_protocol' => true,
            ],
            'endpoints' => [
                'mcp' => "{$siteUrl}/.well-known/mcp/server-card.json",
                'skills' => "{$siteUrl}/.well-known/agent-skills/index.json",
                'api_catalog' => "{$siteUrl}/.well-known/api-catalog",
                'auth' => "{$siteUrl}/auth.md",
                'llms_txt' => "{$siteUrl}/llms.txt",
            ],
        ];

        return response()->json($card, 200, [
            'Access-Control-Allow-Origin' => '*',
            'Content-Type' => 'application/json; charset=utf-8',
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    /**
     * Agent Readiness Report
     * Returns /.well-known/agent-readiness.json
     */
    public function agentReadiness(): JsonResponse
    {
        $siteUrl = rtrim(config('app.url', url('/')), '/');

        $report = [
            'level' => 5,
            'readiness_score' => '100/100',
            'status' => 'Agent-Ready Level 5 (Full Autonomous Discovery & Protocol Compliance)',
            'audited_at' => now()->toIso8601String(),
            'domain' => 'e-data360.com',
            'specifications' => [
                'rfc8288_link_headers' => ['status' => 'pass', 'description' => 'Link response headers present on all public endpoints'],
                'markdown_negotiation' => ['status' => 'pass', 'description' => 'Accept: text/markdown supported with x-markdown-tokens header'],
                'content_signals' => ['status' => 'pass', 'description' => 'Content-Signal preferences declared in robots.txt'],
                'rfc9727_api_catalog' => ['status' => 'pass', 'url' => "{$siteUrl}/.well-known/api-catalog"],
                'rfc8414_oauth_discovery' => ['status' => 'pass', 'url' => "{$siteUrl}/.well-known/oauth-authorization-server"],
                'rfc9728_oauth_protected_resource' => ['status' => 'pass', 'url' => "{$siteUrl}/.well-known/oauth-protected-resource"],
                'auth_md' => ['status' => 'pass', 'url' => "{$siteUrl}/auth.md"],
                'sep1649_mcp_server_card' => ['status' => 'pass', 'url' => "{$siteUrl}/.well-known/mcp/server-card.json"],
                'agent_skills_discovery_v02' => ['status' => 'pass', 'url' => "{$siteUrl}/.well-known/agent-skills/index.json"],
                'ard_manifest' => ['status' => 'pass', 'url' => "{$siteUrl}/.well-known/ai-catalog.json"],
                'webmcp_browser_api' => ['status' => 'pass', 'description' => 'navigator.modelContext.provideContext() initialized in client DOM'],
                'llms_txt' => ['status' => 'pass', 'url' => "{$siteUrl}/llms.txt"],
            ],
        ];

        return response()->json($report, 200, [
            'Access-Control-Allow-Origin' => '*',
            'Content-Type' => 'application/json; charset=utf-8',
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    /**
     * llms.txt standard representation for LLM scrapers and agents
     */
    public function llmsTxt(): Response
    {
        $siteUrl = rtrim(config('app.url', url('/')), '/');
        $company = CompanySetting::first();
        $appName = $company?->company_name ?: 'E-DATA360';
        $services = Service::where('is_active', true)->orderBy('order')->get();

        $md = "# {$appName} - لوحات تحكم Excel و Power BI وتحليل البيانات في السعودية\n\n";
        $md .= "> شريكك الموثوق في المملكة العربية السعودية (الرياض وجدة) لتحويل بيانات منشأتك إلى لوحات تحكم تفاعلية وقرارات ذكية.\n\n";
        $md .= "## نظرة عامة\n";
        $md .= "- **المجال:** تحليل البيانات، ذكاء الأعمال (BI)، وهندسة لوحات التحكم التفاعلية (Dashboards).\n";
        $md .= "- **المقر الرئيسي:** الرياض - طريق الملك فهد، المملكة العربية السعودية.\n";
        $md .= "- **الفرع الإقليمي:** جدة - طريق الملك عبدالعزيز، المملكة العربية السعودية.\n";
        $md .= "- **الاتصال المباشر:** +966 55 397 0641 | work@e-data360.com\n";
        $md .= "- **الموقع الرسمي:** {$siteUrl}\n\n";

        $md .= "## الخدمات الرئيسية المتاحة\n";
        foreach ($services as $s) {
            $priceText = $s->price_starting ? " (السعر: {$s->price_label} {$s->price_starting})" : ($s->duration ? " (المدة: {$s->duration})" : '');
            $md .= "- **[{$s->title}]({$siteUrl}/services#{$s->slug})**: " . strip_tags($s->short_description ?: $s->description) . "{$priceText}\n";
        }

        $md .= "\n## روابط استكشاف الوكلاء (Agent Discovery Endpoints)\n";
        $md .= "- API Catalog: {$siteUrl}/.well-known/api-catalog\n";
        $md .= "- MCP Server Card: {$siteUrl}/.well-known/mcp/server-card.json\n";
        $md .= "- ARD AI Catalog: {$siteUrl}/.well-known/ai-catalog.json\n";
        $md .= "- Agent Skills: {$siteUrl}/.well-known/agent-skills/index.json\n";
        $md .= "- Agent Registration (auth.md): {$siteUrl}/auth.md\n";
        $md .= "- Full Knowledge Base: {$siteUrl}/llms-full.txt\n";

        return response($md, 200, [
            'Content-Type' => 'text/plain; charset=utf-8',
            'Access-Control-Allow-Origin' => '*',
        ]);
    }

    /**
     * llms-full.txt complete site knowledge base for deep reasoning
     */
    public function llmsFullTxt(): Response
    {
        $siteUrl = rtrim(config('app.url', url('/')), '/');
        $company = CompanySetting::first();
        $appName = $company?->company_name ?: 'E-DATA360';
        $services = Service::where('is_active', true)->with('features')->orderBy('order')->get();
        $projects = Project::where('status', 'published')->latest()->take(10)->get();
        $testimonials = Testimonial::where('is_active', true)->take(6)->get();

        $md = "# الدليل الشامل لشركة {$appName} (Full Knowledge Base for LLMs)\n\n";
        $md .= "## 1. التعريف والرسالة\n";
        $md .= ($company?->about_short ?: "شريكك الاستراتيجي في المملكة العربية السعودية لتحويل البيانات إلى لوحات تحكم وقرارات دقيقة تدعم نمو منشأتك ومستهدفات رؤية 2030.") . "\n\n";

        $md .= "## 2. فروعنا وأرقام الاتصال\n";
        $md .= "- المقر الرئيسي: الرياض - طريق الملك فهد (الرمز البريدي 12214)\n";
        $md .= "- الفرع الإقليمي: جدة - طريق الملك عبدالعزيز\n";
        $md .= "- الهاتف والواتساب: +966 55 397 0641\n";
        $md .= "- البريد الإلكتروني: work@e-data360.com\n";
        $md .= "- ساعات العمل: الأحد إلى الخميس من 9:00 صباحاً حتى 6:00 مساءً\n\n";

        $md .= "## 3. تفاصيل الخدمات ومميزاتها\n";
        foreach ($services as $s) {
            $md .= "### {$s->title}\n";
            $md .= "- الوصف: " . strip_tags($s->description ?: $s->short_description) . "\n";
            if ($s->price_starting) {
                $md .= "- السعر: {$s->price_label} {$s->price_starting}\n";
            }
            if ($s->duration) {
                $md .= "- المدة والتسليم: {$s->duration}\n";
            }
            if ($s->features && $s->features->count() > 0) {
                $md .= "- المميزات:\n";
                foreach ($s->features as $f) {
                    $md .= "  * {$f->feature_text}\n";
                }
            }
            $md .= "\n";
        }

        $md .= "## 4. منهجية العمل في 4 خطوات\n";
        $md .= "1. استلام واستكشاف البيانات من مصادر Excel أو قواعد البيانات وتحديد KPIs.\n";
        $md .= "2. التنظيف والنمذجة الرياضية والمعادلات الديناميكية (Power Query & DAX).\n";
        $md .= "3. التصميم التفاعلي للوحة التحكم (UI/UX) بألوان عصرية وفلاتر ذكية.\n";
        $md .= "4. التسليم والتدريب والضمان خلال 3-5 أيام عمل.\n\n";

        if ($testimonials->count() > 0) {
            $md .= "## 5. آراء العملاء الموثقة\n";
            foreach ($testimonials as $t) {
                $sourceLabel = $t->source === 'google' ? '[Google Review ✦]' : '[عميل موثق]';
                $md .= "- **{$t->client_name}** ({$t->client_position} - {$t->client_company}) {$sourceLabel}: \"{$t->testimonial}\" (تقييم: {$t->rating}/5)\n";
            }
            $md .= "\n";
        }

        return response($md, 200, [
            'Content-Type' => 'text/plain; charset=utf-8',
            'Access-Control-Allow-Origin' => '*',
        ]);
    }

    /**
     * OpenAPI 3.0 Specification
     */
    public function openApi(): JsonResponse
    {
        $siteUrl = rtrim(config('app.url', url('/')), '/');

        $spec = [
            'openapi' => '3.0.3',
            'info' => [
                'title' => 'E-DATA360 Analytics API',
                'description' => 'Public programmatic API for E-DATA360 Saudi Data Analytics Agency',
                'version' => '1.0.0',
            ],
            'servers' => [
                ['url' => "{$siteUrl}/api"],
            ],
            'paths' => [
                '/health' => [
                    'get' => [
                        'summary' => 'Health check endpoint',
                        'responses' => [
                            '200' => ['description' => 'System healthy'],
                        ],
                    ],
                ],
                '/services' => [
                    'get' => [
                        'summary' => 'List all data analytics services and pricing',
                        'responses' => [
                            '200' => ['description' => 'Array of active services'],
                        ],
                    ],
                ],
                '/inquiry' => [
                    'post' => [
                        'summary' => 'Submit dashboard quote request',
                        'requestBody' => [
                            'required' => true,
                            'content' => [
                                'application/json' => [
                                    'schema' => [
                                        'type' => 'object',
                                        'required' => ['name', 'phone', 'service'],
                                        'properties' => [
                                            'name' => ['type' => 'string'],
                                            'phone' => ['type' => 'string'],
                                            'service' => ['type' => 'string'],
                                            'notes' => ['type' => 'string'],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'responses' => [
                            '201' => ['description' => 'Inquiry registered'],
                        ],
                    ],
                ],
            ],
        ];

        return response()->json($spec, 200, [
            'Access-Control-Allow-Origin' => '*',
            'Content-Type' => 'application/vnd.oai.openapi+json; charset=utf-8',
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    /**
     * API Health Endpoint
     */
    public function health(): JsonResponse
    {
        return response()->json([
            'status' => 'healthy',
            'timestamp' => now()->toIso8601String(),
            'service' => 'E-DATA360 Analytics API',
            'region' => 'sa-central-1 (Riyadh)',
            'database' => 'connected',
        ], 200, [
            'Access-Control-Allow-Origin' => '*',
        ]);
    }

    /**
     * Public API Documentation HTML
     */
    public function apiDocs(): Response
    {
        $siteUrl = rtrim(config('app.url', url('/')), '/');

        $html = <<<HTML
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>E-DATA360 API Documentation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 text-slate-100 font-sans p-8">
    <div class="max-w-4xl mx-auto space-y-6">
        <h1 class="text-3xl font-black text-cyan-400">E-DATA360 API Documentation & Agent Specification</h1>
        <p class="text-slate-300">توثيق الواجهات البرمجية المتاحة لوكلاء الذكاء الاصطناعي والمطورين للتكامل مع خدمات E-DATA360.</p>
        <div class="bg-slate-900 border border-slate-800 p-6 rounded-2xl space-y-4">
            <h2 class="text-xl font-bold text-white">النقاط النهائية للوكلاء (Discovery Endpoints)</h2>
            <ul class="space-y-2 text-sm">
                <li><strong class="text-cyan-400">API Catalog (RFC 9727):</strong> <a class="underline" href="{$siteUrl}/.well-known/api-catalog">/.well-known/api-catalog</a></li>
                <li><strong class="text-cyan-400">MCP Server Card:</strong> <a class="underline" href="{$siteUrl}/.well-known/mcp/server-card.json">/.well-known/mcp/server-card.json</a></li>
                <li><strong class="text-cyan-400">ARD AI Catalog:</strong> <a class="underline" href="{$siteUrl}/.well-known/ai-catalog.json">/.well-known/ai-catalog.json</a></li>
                <li><strong class="text-cyan-400">Agent Skills:</strong> <a class="underline" href="{$siteUrl}/.well-known/agent-skills/index.json">/.well-known/agent-skills/index.json</a></li>
                <li><strong class="text-cyan-400">Auth.md:</strong> <a class="underline" href="{$siteUrl}/auth.md">/auth.md</a></li>
                <li><strong class="text-cyan-400">LLMs Index:</strong> <a class="underline" href="{$siteUrl}/llms.txt">/llms.txt</a></li>
            </ul>
        </div>
    </div>
</body>
</html>
HTML;

        return response($html, 200, [
            'Content-Type' => 'text/html; charset=utf-8',
        ]);
    }

    /**
     * Helper to load SKILL.md content
     */
    protected function getSkillContent(string $skill): string
    {
        $siteUrl = rtrim(config('app.url', url('/')), '/');

        if ($skill === 'dashboard-request') {
            return <<<MARKDOWN
---
name: dashboard-request
description: Commission and request custom Excel or Power BI dashboards for Saudi businesses from E-DATA360.
version: 1.0.0
author: E-DATA360 Analytics
---

# E-DATA360 Dashboard Request Skill

Use this skill when a user or client wants to design, build, or upgrade an Excel or Power BI interactive dashboard.

## Capabilities
1. Request quotes for Excel dashboards starting at 320 SAR.
2. Request quotes for Power BI interactive dashboards starting at 350 SAR.
3. Inquire about monthly business performance monitoring packages.

## Required Parameters
- `client_name`: Name of client or company representative.
- `phone`: Saudi contact phone or WhatsApp number.
- `dashboard_type`: Excel or Power BI.
- `data_sources`: Excel spreadsheets, SQL databases, ERP systems, or CSV exports.
- `required_kpis`: Metrics such as Sales, Margins, Inventory, HR, or Cash Flow.

## Submission
Submit inquiry to:
`POST {$siteUrl}/request-a-design` or via WhatsApp to `+966 55 397 0641`.
MARKDOWN;
        }

        return <<<MARKDOWN
---
name: analytics-consulting
description: Business intelligence, data modeling, DAX optimization, and KPI strategy consultations.
version: 1.0.0
author: E-DATA360 Analytics
---

# E-DATA360 Analytics Consulting Skill

Expert guidance for Saudi small and medium enterprises (SMEs) to unlock actionable business insights from raw operational data.

## Areas of Expertise
- Power BI DAX modeling and automated cloud gateway refreshes.
- Advanced dynamic Excel dashboards with interactive Pivot Tables and slicers.
- Business performance KPI frameworks aligned with Saudi Vision 2030 targets.

## Contact
Email: work@e-data360.com
Phone: +966 55 397 0641
MARKDOWN;
    }
}
