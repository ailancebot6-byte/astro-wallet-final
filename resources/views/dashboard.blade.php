<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - {{ config('app.name', 'Astro') }}</title>
    <link rel="stylesheet" href="{{ asset('css/astro.css') }}">
</head>
<body class="astro">
    <div class="astro-shell">
        <aside class="astro-sidebar">
            <div class="astro-brand">
                <div class="astro-brand-mark">A</div>
                <div class="astro-brand-name">{{ config('app.name', 'Astro') }}</div>
            </div>

            <nav class="astro-nav">
                <a href="{{ route('dashboard') }}" class="active">Overview</a>
                <a href="#">Send</a>
                <a href="#">Receive</a>
                <a href="#">Transactions</a>
                <a href="#">Settings</a>
            </nav>
        </aside>

        <main class="astro-main">
            <div class="astro-topbar">
                <h2>Welcome, {{ auth()->user()->name }}</h2>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="astro-logout-btn">Log out</button>
                </form>
            </div>

            <div class="astro-cards">
                <div class="astro-card">
                    <div class="label">Wallet balance</div>
                    <div class="value">0.00 ASTRO</div>
                </div>
                <div class="astro-card">
                    <div class="label">USD value</div>
                    <div class="value accent">$0.00</div>
                </div>
                <div class="astro-card">
                    <div class="label">Wallet address</div>
                    <div class="value" style="font-size:14px; font-weight:500; color: var(--astro-text-dim);">
                        Not yet generated
                    </div>
                </div>
            </div>

            <div class="astro-panel-block">
                <h3>Recent transactions</h3>
                <div class="astro-empty">No transactions yet.</div>
            </div>
        </main>
    </div>
</body>
</html>
