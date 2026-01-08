@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-6 col-lg-6">
    <div class="card shadow-sm">
      <div class="card-body p-4">
        <div class="text-center mb-3">
          <a href="/" class="h4 text-decoration-none text-dark fw-bold">MyApp</a>
          <p class="text-muted small mb-0">Daftar untuk mulai menggunakan aplikasi</p>
        </div>

        @if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('register.perform') }}">
          @csrf

          <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autofocus>
            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" required>
            @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
          </div>

          <div class="mb-3">
            <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
            <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" required>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <a href="{{ route('login') }}" class="btn btn-outline-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Daftar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
