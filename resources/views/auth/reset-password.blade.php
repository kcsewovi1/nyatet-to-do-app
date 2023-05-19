@extends('layouts.guest')
@section('content')
<div class="w-full max-w-md overflow-hidden">
    <div class="mb-5">
        <x-logo class="h-auto mx-auto pointer-events-none select-none w-36" />
    </div>

    <div class="text-center">
        <x-error name="email" />
    </div>

    <form method="POST" action="{{ route('password.store') }}" autocomplete="off">
        @csrf

        {{-- Password Reset Token --}}
        <x-hidden name="token" value="{{ $request->route('token') }}" />
        
        {{-- Email Address --}}
        <x-hidden name="email" value="{{ old('email', $request->email) }}" />

        {{-- Password --}}
        <x-form-auth type="password" name="password" ph="Masukkan Password Baru" required autofocus>{{ __('Password Baru') }}</x-form-auth>

        {{-- Confirm Password --}}
        <x-form-auth type="password" name="password_confirmation" ph="Konfirmasi Password Baru" required>{{ __('Konfirmasi Password Baru') }}</x-form-auth>

        <x-auth-button class="mt-3">{{ __('Reset Password') }}</x-auth-button>
    </form>
</div>
@endsection
