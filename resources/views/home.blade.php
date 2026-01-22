@extends('layouts.main')

@section('content')
<style>
    .feature-box {
        text-align: center;
        padding: 30px;
        background: white;
    }

    .feature-icon {
        font-size: 3rem;
        margin-bottom: 1rem;
        color: #667eea;
    }

    .cta-section {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 60px 0;
        border-radius: 15px;
        text-align: center;
    }

    .hero-title {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .hero-subtitle {
        font-size: 1.3rem;
        opacity: 0.95;
        margin-bottom: 2rem;
    }
</style>

<!-- Hero Section -->
<div class="hero-section text-center">
    <h1 class="hero-title">Selamat Datang</h1>
    <p class="hero-subtitle">Jelajahi portofolio dan pencapaian profesional saya</p>
    @guest
        <div>
            <a href="{{ route('login') }}" class="btn btn-light btn-lg me-2">
                <i class="fas fa-sign-in-alt me-2"></i>Masuk
            </a>
            <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg">
                <i class="fas fa-user-plus me-2"></i>Daftar
            </a>
        </div>
    @endguest
</div>

<!-- Features Section -->
<section class="py-5">
    <h2 class="section-title text-center">Fitur Unggulan</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card feature-box">
                <div class="feature-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h4 class="mb-3">Data Mahasiswa</h4>
                <p class="text-muted">Kelola data mahasiswa dengan mudah — tambah, edit, dan hapus data dengan cepat dan efisien.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card feature-box">
                <div class="feature-icon">
                    <i class="fas fa-newspaper"></i>
                </div>
                <h4 class="mb-3">Berita & Update</h4>
                <p class="text-muted">Dapatkan informasi terbaru tentang pengembangan profesional dan pencapaian terkini.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card feature-box">
                <div class="feature-icon">
                    <i class="fas fa-user-tie"></i>
                </div>
                <h4 class="mb-3">Profil Profesional</h4>
                <p class="text-muted">Lihat profil lengkap dengan pengalaman, keahlian, dan pencapaian profesional saya.</p>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-5">
    <div class="row text-center">
        <div class="col-md-3 mb-4">
            <div class="p-4">
                <h3 class="display-4" style="color: #667eea;">50+</h3>
                <p class="text-muted">Proyek Selesai</p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="p-4">
                <h3 class="display-4" style="color: #667eea;">100+</h3>
                <p class="text-muted">Klien Puas</p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="p-4">
                <h3 class="display-4" style="color: #667eea;">5+</h3>
                <p class="text-muted">Tahun Pengalaman</p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="p-4">
                <h3 class="display-4" style="color: #667eea;">10+</h3>
                <p class="text-muted">Penghargaan</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<div class="cta-section">
    <h2 class="mb-3">Tertarik Berkolaborasi?</h2>
    <p class="mb-4" style="font-size: 1.1rem;">Mari berdiskusi tentang proyek atau peluang kerjasama berikutnya.</p>
    <a href="/contact" class="btn btn-light btn-lg">
        <i class="fas fa-envelope me-2"></i>Hubungi Saya
    </a>
</div>
@endsection