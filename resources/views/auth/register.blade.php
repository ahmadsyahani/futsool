@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">Register</div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                    </div>

                    <div class="mb-3">
                        <label for="password-confirm" class="form-label">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>

                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select id="role" class="form-control" name="role" required>
                            <option value="user" selected>User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>

                    <div class="d-flex justify-content-between mt-3">
                        <a class="btn btn-link" href="{{ route('login') }}">
                            Already have an account? Login
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection