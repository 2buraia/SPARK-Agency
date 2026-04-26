# Spark Agency Website - No Database Version

This version uses PHP + JSON files. No MySQL database is required.

## Admin Login
URL: `/admin/login.php`

Username: `admin`
Password: `Spark@2026`

You can change the credentials in `includes/config.php`.

## Content Storage
Editable content is saved in:

- `data/services.json`
- `data/portfolio.json`
- `data/packages.json`
- `data/settings.json`
- `data/messages.json`

Uploaded images are saved in `assets/uploads`.

## Hosting Notes
Make sure these folders are writable by PHP:

- `data/`
- `assets/uploads/`

No database import is needed.
