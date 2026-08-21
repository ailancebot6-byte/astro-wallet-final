<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{ config('app.name', 'Astro') }}</title>
    <link rel="stylesheet" href="{{ asset('css/astro.css') }}">
</head>
<body class="astro">
    <div class="astro-auth-wrap">
        <div class="astro-auth-card">
            <div class="astro-brand">
                <div class="astro-brand-mark">A</div>
                <div class="astro-brand-name">{{ config('app.name', 'Astro') }}</div>
            </div>

            @if (session('status'))
                <div class="astro-flash">{{ session('status') }}</div>
            @endif

            @yield('content')
        </div>
    </div>
</body>
</html>
