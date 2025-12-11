# How to Get Your Google Analytics Property ID

## The Issue
You have two different IDs in Google Analytics:
1. **Measurement ID** (G-9YQKJP5371) - For tracking code ✅ **Already configured!**
2. **Property ID** (numeric) - For reporting API ❌ **Need to add this**

## Where to Find Your Property ID

### Step 1: Go to Google Analytics
Visit: https://analytics.google.com/

### Step 2: Navigate to Admin
1. Click the ⚙️ (gear icon) at the bottom left
2. This opens the **Admin** section

### Step 3: Select Your Property
Make sure you're viewing the correct property (the one with Measurement ID: G-9YQKJP5371)

### Step 4: Find Property Settings
1. In the **Property** column (middle column)
2. Click on **Property Settings**

### Step 5: Copy the Property ID
Look for a field labeled **Property ID**
- It will be a **numeric value** (e.g., 123456789 or 987654321)
- **NOT** the Measurement ID (G-9YQKJP5371)

Example:
```
Property name: EDATA 360
Property ID: 123456789    ← This is what you need!
Measurement ID: G-9YQKJP5371  ← Already have this
```

## How to Add It to Your Website

### Option 1: Via .env File (Recommended)
Edit your `.env` file and add:
```env
ANALYTICS_PROPERTY_ID=123456789
```
(Replace `123456789` with your actual Property ID)

Then run:
```bash
php artisan config:clear
php artisan cache:clear
```

### Option 2: Via Filament Admin Panel
1. Go to: `/admin/analytics-settings`
2. Edit the analytics settings
3. Fill in the **Property ID** field with your numeric ID
4. Save

## What Each ID Does

| ID Type | Example | Purpose |
|---------|---------|---------|
| **Measurement ID** | G-9YQKJP5371 | For tracking visitors (gtag.js) - **Working!** ✅ |
| **Property ID** | 123456789 | For fetching reports/data in admin widgets - **Needs setup** ❌ |

## After Adding Property ID

Your admin dashboard widgets will work:
- ✅ Visitors chart (last 7 days)
- ✅ Analytics overview stats
- ✅ Page views tracking
- ✅ Real-time data display

## Troubleshooting

### If you can't find Property ID:
1. Make sure you have **Editor** or **Administrator** access to the property
2. Try refreshing the Google Analytics page
3. Make sure you're in **GA4** (not Universal Analytics)

### If you still get errors:
1. Verify you added the **numeric** ID (not G-XXXXXXXXX)
2. Clear config cache: `php artisan config:clear`
3. Check the service account credentials are properly configured

## Visual Guide

```
Google Analytics Interface:
┌─────────────────────────────────┐
│ Admin (⚙️)                      │
├─────────────────────────────────┤
│ Account    │ Property │ View   │
│            │          │        │
│            │ Property │        │
│            │ Settings │        │
│            │    ↓     │        │
│            │ Property │        │
│            │ ID:      │        │
│            │ 123456789│  ← HERE│
└─────────────────────────────────┘
```

## Current Status

✅ Google Analytics tracking is **LIVE** on your website
✅ Measurement ID configured: G-9YQKJP5371
❌ Property ID needed for admin widgets
❌ Service account credentials may also be needed

## Next Steps

1. Get your Property ID from Google Analytics
2. Add it to `.env` or via Filament admin
3. Optionally: Set up service account for API access
4. Your widgets will start showing real data!

---

**Need Help?** 
The error message you received means the system is trying to use "G-9YQKJP5371" where it expects a numeric ID like "123456789". Simply replace it with your actual numeric Property ID from the steps above.

