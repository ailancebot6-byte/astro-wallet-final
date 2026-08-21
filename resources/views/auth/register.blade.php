@extends('layouts.auth')

@section('title', 'Create account')

@section('content')
    <h1>Create your account</h1>
    <p class="astro-sub">Set up your Astro wallet in a few seconds.</p>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="astro-field">
            <label for="name">Full name</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
            @error('name') <div class="astro-error">{{ $message }}</div> @enderror
        </div>

        <div class="astro-field">
            <label for="email">Email address</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required>
            @error('email') <div class="astro-error">{{ $message }}</div> @enderror
        </div>

        <div class="astro-field">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
            @error('password') <div class="astro-error">{{ $message }}</div> @enderror
        </div>

        <div class="astro-field">
            <label for="password_confirmation">Confirm password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required>
        </div>

        <button type="submit" class="astro-btn">Create account</button>
    </form>

    <div class="astro-alt">
        Already have an account? <a href="{{ route('login') }}">Sign in</a>
    </div>
@endsection
