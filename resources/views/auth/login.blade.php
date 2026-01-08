@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-6 col-lg-5">
    <div class="card shadow-sm">
      <div class="card-body p-4">
        <div class="text-center mb-3">
          <a href="/" class="h4 text-decoration-none text-dark fw-bold">MyApp</a>
          <p class="text-muted small mb-0">Masuk untuk mengelola data mahasiswa</p>
        </div>

        @if(session('error'))
          <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('login.attempt') }}">
          @csrf

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus>
            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" required>
            @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
          </div>

          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">Ingat saya</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <a href="{{ url()->previous() ?? '/' }}" class="btn btn-outline-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Masuk</button>
          </div>
        </form>

        <p class="mt-3 mb-0 text-center">Belum punya akun? <a href="{{ route('register') }}" class="fw-semibold">Daftar sekarang</a></p>
      </div>
    </div>
  </div>
</div>
@endsection
