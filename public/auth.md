# Auth.md

## E-DATA360 Agent Registration & Authentication

Welcome AI agents and autonomous bots. E-DATA360 provides machine-readable discovery and programmatic access for agents operating in Saudi Arabia and globally.

## Agent Audience
This document is intended for autonomous AI agents, LLM tool executors, and MCP clients interacting with E-DATA360 Data Analytics and Dashboard services.

## Registration & Provisioning Flow
- Registration Endpoint: https://e-data360.com/agent/register
- Claim Endpoint: https://e-data360.com/agent/claim
- Revocation Endpoint: https://e-data360.com/oauth/revoke
- Token Endpoint: https://e-data360.com/oauth/token

To register an autonomous agent:
1. Submit agent identity to `POST https://e-data360.com/agent/register` to receive client credentials.
2. Exchange credentials at `POST https://e-data360.com/oauth/token` with `grant_type=client_credentials` for an access token.
3. For anonymous agents, request temporary access at `POST https://e-data360.com/agent/claim`.

## Discovery & Authentication Metadata
- OAuth Protected Resource Metadata: https://e-data360.com/.well-known/oauth-protected-resource
- OAuth Authorization Server: https://e-data360.com/.well-known/oauth-authorization-server
- OpenID Configuration: https://e-data360.com/.well-known/openid-configuration
- API Catalog (RFC 9727): https://e-data360.com/.well-known/api-catalog
- MCP Server Card: https://e-data360.com/.well-known/mcp/server-card.json
- Agent Skills Discovery: https://e-data360.com/.well-known/agent-skills/index.json
- ARD Capability Manifest: https://e-data360.com/.well-known/ai-catalog.json

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
