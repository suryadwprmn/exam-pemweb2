@extends('layout.main')

<div class="content-wrapper p-2">

    <div class="container">
        <h2>Change Password</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('customer.updatePassword') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" value="{{ Auth::user()->email }}" readonly>
            </div>

            <div class="form-group">
                <label for="current_password">Password Lama</label>
                <input type="password" class="form-control" id="current_password" name="current_password" required>
                @error('current_password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password Baru</label>
                <input type="password" class="form-control" id="password" name="password" required>
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password Baru</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                    required>
            </div>

            <button type="submit" class="btn btn-primary">Update Password</button>
        </form>
    </div>
</div>
