@props(['seo' => null, 'breadcrumbs' => [], 'schema' => null])

@php
    $seoService = app(\App\Services\SeoService::class);
    $currentPage = request()->route()?->getName() ?: 'home';
    
    // Get Dynamic SEO data
    $seoData = $seo instanceof \App\Models\SeoSetting 
        ? $seoService->getPageSeo($seo->page) 
        : $seoService->getPageSeo($currentPage);
    
    // Dynamic Schema.org Graph
    $dynamicSchema = $seoService->getDynamicSchema($currentPage, [
        'breadcrumb_title' => $seoData['meta_title'] ?? $currentPage
    ]);

    // Active services for WebMCP tools
    $activeServicesForMcp = \App\Models\Service::where('is_active', true)
        ->get(['id', 'title', 'slug', 'price_starting', 'duration', 'short_description'])
        ->toArray();

    $company = \App\Models\CompanySetting::first();
    $siteUrl = rtrim(config('app.url', url('/')), '/');
@endphp

{{-- =========================================================================
     1. Basic Meta Tags & Canonical
     ========================================================================= --}}
<title>{{ $seoData['meta_title'] }}</title>
<meta name="description" content="{{ $seoData['meta_description'] }}">
@if(!empty($seoData['meta_keywords']))
<meta name="keywords" content="{{ is_array($seoData['meta_keywords']) ? implode(', ', $seoData['meta_keywords']) : $seoData['meta_keywords'] }}">
@endif
<meta name="author" content="E-DATA360">
<meta name="robots" content="{{ $seoData['robots'] }}">
<link rel="canonical" href="{{ $seoData['canonical_url'] }}">
<link rel="alternate" hreflang="ar-SA" href="{{ $seoData['canonical_url'] }}">
<link rel="alternate" hreflang="x-default" href="{{ $seoData['canonical_url'] }}">

{{-- =========================================================================
     2. Saudi Arabia GEO Location Meta Tags
     ========================================================================= --}}
<meta name="geo.region" content="SA-01">
<meta name="geo.placename" content="{{ $company?->city_primary ?: 'الرياض' }}، المملكة العربية السعودية">
<meta name="geo.position" content="{{ $company?->latitude_primary ?: '24.7136' }};{{ $company?->longitude_primary ?: '46.6753' }}">
<meta name="ICBM" content="{{ $company?->latitude_primary ?: '24.7136' }}, {{ $company?->longitude_primary ?: '46.6753' }}">
<meta name="language" content="Arabic">
<meta name="country" content="Saudi Arabia">

{{-- =========================================================================
     3. Open Graph & Social Meta Tags
     ========================================================================= --}}
<meta property="og:title" content="{{ $seoData['og_title'] }}">
<meta property="og:description" content="{{ $seoData['og_description'] }}">
<meta property="og:type" content="{{ $seoData['og_type'] }}">
<meta property="og:url" content="{{ url()->current() }}">
@if(!empty($seoData['og_image']))
<meta property="og:image" content="{{ $seoData['og_image'] }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
@endif
<meta property="og:site_name" content="E-DATA360">
<meta property="og:locale" content="ar_SA">

{{-- =========================================================================
     4. Twitter Card Meta Tags
     ========================================================================= --}}
<meta name="twitter:card" content="{{ $seoData['twitter_card'] }}">
<meta name="twitter:title" content="{{ $seoData['og_title'] }}">
<meta name="twitter:description" content="{{ $seoData['og_description'] }}">
@if(!empty($seoData['og_image']))
<meta name="twitter:image" content="{{ $seoData['og_image'] }}">
@endif
@if(!empty($seoData['twitter_site']))
<meta name="twitter:site" content="{{ $seoData['twitter_site'] }}">
@endif
@if(!empty($seoData['twitter_creator']))
<meta name="twitter:creator" content="{{ $seoData['twitter_creator'] }}">
@endif

{{-- =========================================================================
     5. AI Agent Discovery & Protocol Links (RFC 8288, WebMCP, ARD, SEP-1649)
     ========================================================================= --}}
<link rel="alternate" type="text/markdown" href="{{ url()->current() }}" title="Markdown Version for AI Agents">
<link rel="api-catalog" type="application/linkset+json" href="{{ url('/.well-known/api-catalog') }}">
<link rel="service-desc" type="application/json" href="{{ url('/.well-known/ai-catalog.json') }}">
<link rel="service-desc" type="application/mcp-server-card+json" href="{{ url('/.well-known/mcp/server-card.json') }}">
<link rel="agent-card" type="application/json" href="{{ url('/.well-known/agent-card.json') }}">
<link rel="oauth-protected-resource" type="application/json" href="{{ url('/.well-known/oauth-protected-resource') }}">
<link rel="index" type="text/plain" href="{{ url('/llms.txt') }}">
<link rel="author" type="text/markdown" href="{{ url('/auth.md') }}">

{{-- =========================================================================
     6. Schema.org JSON-LD Structured Data Graph
     ========================================================================= --}}
<script type="application/ld+json">
{!! json_encode($dynamicSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>

@if(!empty($schema))
<script type="application/ld+json">
{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endif

{{-- =========================================================================
     7. WebMCP Browser AI Agent API Integration
     ========================================================================= --}}
<script>
(function() {
    const servicesCatalog = @json($activeServicesForMcp);
    const siteConfig = {
        siteUrl: "{{ $siteUrl }}",
        phone: "{{ $company?->phone_primary ?: '+966 55 397 0641' }}",
        whatsapp: "{{ $company?->whatsapp_number ?: '966553970641' }}",
        email: "{{ $company?->main_email ?: 'work@e-data360.com' }}",
        headquarters: "{{ $company?->location_text ?: 'الرياض - طريق الملك فهد' }}"
    };

    const webMcpTools = [
        {
            name: "get_services_catalog",
            description: "Retrieve E-DATA360 active data analytics services, Excel & Power BI dashboard solutions, and pricing in Saudi Riyals (SAR).",
            inputSchema: {
                type: "object",
                properties: {
                    query: { type: "string", description: "Optional filter keyword (e.g., excel, power bi, kpi, course)" }
                }
            },
            execute: async function(params) {
                const q = (params && params.query) ? params.query.toLowerCase() : '';
                const filtered = q ? servicesCatalog.filter(s => s.title.toLowerCase().includes(q) || s.slug.includes(q)) : servicesCatalog;
                return {
                    status: "success",
                    services: filtered,
                    total: filtered.length
                };
            }
        },
        {
            name: "request_dashboard_quote",
            description: "Direct user or AI agent to submit a dashboard design inquiry for Excel or Power BI.",
            inputSchema: {
                type: "object",
                required: ["service_name"],
                properties: {
                    service_name: { type: "string", description: "Name of the service (e.g. لوحات تحكم Excel)" },
                    phone: { type: "string", description: "Contact telephone or WhatsApp" }
                }
            },
            execute: async function(params) {
                const targetUrl = siteConfig.siteUrl + "/request-a-design?service=" + encodeURIComponent(params.service_name || '');
                return {
                    status: "ready",
                    submission_url: targetUrl,
                    whatsapp_direct: "https://wa.me/" + siteConfig.whatsapp,
                    message: "تم تجهيز طلب عرض السعر لخدمة: " + (params.service_name || 'لوحة تحكم')
                };
            }
        },
        {
            name: "get_company_contact",
            description: "Get E-DATA360 official contact channels in Saudi Arabia.",
            inputSchema: { type: "object" },
            execute: async function() {
                return {
                    status: "success",
                    company: "E-DATA360",
                    headquarters: siteConfig.headquarters,
                    phone: siteConfig.phone,
                    whatsapp: "+" + siteConfig.whatsapp,
                    email: siteConfig.email
                };
            }
        }
    ];

    // Initialize WebMCP if supported by browser/agent host
    if (window.navigator && window.navigator.modelContext && typeof window.navigator.modelContext.provideContext === 'function') {
        try {
            window.navigator.modelContext.provideContext({
                tools: webMcpTools
            });
            console.log('[WebMCP] E-DATA360 tools registered successfully with host context.');
        } catch (e) {
            console.warn('[WebMCP] Host provideContext error:', e);
        }
    } else {
        // Expose on window for browser-level agent extensions and DOM testing
        window.__webmcp = {
            tools: webMcpTools,
            version: "1.0.0"
        };
    }
})();
</script>

{{-- =========================================================================
     8. Google Search Console & Analytics
     ========================================================================= --}}
@if(!empty($seoData['gsc_verification_code']))
<meta name="google-site-verification" content="{{ $seoData['gsc_verification_code'] }}">
@endif
