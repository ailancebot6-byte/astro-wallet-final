@extends('layouts.auth')

@section('title', 'Sign in')

@section('content')
    <h1>Welcome back</h1>
    <p class="astro-sub">Sign in to access your Astro wallet.</p>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="astro-field">
            <label for="email">Email address</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email') <div class="astro-error">{{ $message }}</div> @enderror
        </div>

        <div class="astro-field">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
            @error('password') <div class="astro-error">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="astro-btn">Sign in</button>
    </form>

    <div class="astro-alt">
        Don't have an account? <a href="{{ route('register') }}">Create one</a>
    </div>
@endsection
