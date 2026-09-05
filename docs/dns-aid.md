# إعداد سجلات DNS للذكاء الاصطناعي (DNS-AID) لنطاق E-DATA360

وفقاً لمسودة معيار IETF: `draft-mozleywilliams-dnsop-dnsaid` و `RFC 9460` (ServiceMode SVCB/HTTPS)، يتيح نظام **DNS for AI Discovery (DNS-AID)** لوكلاء الذكاء الاصطناعي والشبكات الذاتية العثور فورياً على نقاط الدخول البرمجية للموقع عبر الـ DNS قبل إجراء أي اتصالات HTTP.

---

## 1. السجلات المطلوبة إضافتها في لوحة إدارة الـ DNS (Cloudflare / مزود النطاق):

### أ) سجل فهرس الوكلاء (`_index._agents`)
- **النوع (Type):** `HTTPS` أو `SVCB` (أو `TXT` كبديل إذا كان المزود لا يدعم SVCB)
- **الاسم (Name):** `_index._agents`
- **القيمة (Value):**
  ```text
  1 . alpn="h2,h3" port=443 endpoint="/.well-known/ai-catalog.json"
  ```
- **سجل TXT بديل (Fallback TXT Record):**
  - **الاسم:** `_index._agents.e-data360.com`
  - **القيمة:** `v=dnsaid1; endpoint=https://e-data360.com/.well-known/ai-catalog.json; mcp=https://e-data360.com/.well-known/mcp/server-card.json; llms=https://e-data360.com/llms.txt`

### ب) سجل بروتوكول A2A (`_a2a._agents`)
- **النوع (Type):** `HTTPS` أو `SVCB`
- **الاسم (Name):** `_a2a._agents`
- **القيمة (Value):**
  ```text
  1 . alpn="h2,h3" port=443 endpoint="/.well-known/agent-card.json"
  ```
- **سجل TXT بديل (Fallback TXT Record):**
  - **الاسم:** `_a2a._agents.e-data360.com`
  - **القيمة:** `v=a2a1; endpoint=https://e-data360.com/.well-known/agent-card.json`

---

## 2. تفعيل توثيق DNSSEC:
- يوصى بتفعيل **DNSSEC** في Cloudflare أو مزود الـ DNS بنقرة واحدة لضمان مصداقية السجلات وشهادات التشفير ومنع التلاعب من قبل أطراف وسيطة.
