# Astro Wallet — Auth + Dashboard

Drop these files into your existing Laravel app at the matching paths:

```
app/Http/Controllers/Auth/AuthController.php
resources/views/layouts/auth.blade.php
resources/views/auth/register.blade.php
resources/views/auth/login.blade.php
resources/views/dashboard.blade.php
public/css/astro.css
database/migrations/2026_08_21_000000_add_wallet_fields_to_users_table.php
```

Then merge `routes/web.php` into your app's own `routes/web.php` (don't overwrite it if you already have routes defined).

## Setup

1. Set your app name in `.env`:
   ```
   APP_NAME=Astro
   ```
2. Run the migration to add the wallet fields:
   ```
   php artisan migrate
   ```
3. Make sure the standard Laravel `auth` and `guest` middleware are registered (they are by default in Laravel 11/12 via `bootstrap/app.php` or `app/Http/Kernel.php` depending on your version).
4. Visit `/register` to create an account, `/login` to sign in, `/dashboard` to see the wallet overview.

## What's included

- **Registration** — name, email, password (with confirmation), creates a `User` and logs them in.
- **Login** — email/password auth via Laravel's built-in `Auth::attempt`, with session regeneration.
- **Logout** — POST route, invalidates session + regenerates CSRF token.
- **Dashboard** — protected by `auth` middleware, shows wallet balance, USD value, and wallet address as placeholders (all zero/mock data — no real balances, no blockchain calls), plus an empty transactions panel.
- **Styling** — original dark fintech theme (`public/css/astro.css`), not copied from any external site. Sidebar nav items beyond "Overview" (Send/Receive/Transactions/Settings) are placeholder links — wire these up as you build out real functionality.

## Not included (by design, for now)

- No real wallet/blockchain integration — balances are hardcoded to 0.
- No deposit/withdraw logic.
- No email verification — add `MustVerifyEmail` to your `User` model if you want it later.

## Next steps you might want

- Add email verification.
- Add password reset flow (Laravel's `Password` facade handles most of this).
- Replace the placeholder balance with real data once you've decided how wallets/balances are generated and stored.
