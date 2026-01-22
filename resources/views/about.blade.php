@extends('layouts.main')

@section('content')
<style>
    .about-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 3rem 2rem;
        border-radius: 15px;
        margin-bottom: 2rem;
        text-align: center;
    }

    .about-header h1 {
        font-size: 2.5rem;
        margin-bottom: 0.5rem;
    }

    .about-section {
        background: white;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        margin-bottom: 2rem;
    }

    .about-section h2 {
        color: #667eea;
        margin-bottom: 1.5rem;
        font-size: 1.8rem;
        border-bottom: 3px solid #667eea;
        padding-bottom: 0.5rem;
    }

    .about-text {
        color: #666;
        line-height: 1.8;
        font-size: 1.05rem;
    }

    .values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1.5rem;
        margin-top: 1.5rem;
    }

    .value-card {
        background: linear-gradient(135deg, #f0f4ff 0%, #f8f0ff 100%);
        padding: 1.5rem;
        border-radius: 10px;
        text-align: center;
        border-left: 4px solid #667eea;
    }

    .value-icon {
        font-size: 2.5rem;
        color: #667eea;
        margin-bottom: 1rem;
    }

    .value-title {
        color: #2c3e50;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .value-description {
        color: #666;
        font-size: 0.9rem;
    }

    .timeline {
        position: relative;
        padding: 2rem 0;
    }

    .timeline::before {
        content: '';
        position: absolute;
        left: 50%;
        top: 0;
        bottom: 0;
        width: 2px;
        background: #667eea;
    }

    .timeline-item {
        margin-bottom: 2rem;
        position: relative;
    }

    .timeline-item:nth-child(odd) {
        text-align: right;
        padding-right: 52%;
    }

    .timeline-item:nth-child(even) {
        padding-left: 52%;
    }

    .timeline-dot {
        position: absolute;
        left: 50%;
        top: 0;
        width: 16px;
        height: 16px;
        background: white;
        border: 4px solid #667eea;
        border-radius: 50%;
        transform: translateX(-50%);
    }

    .timeline-content {
        background: white;
        padding: 1.5rem;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    }

    .timeline-year {
        color: #667eea;
        font-weight: 700;
        font-size: 1.2rem;
    }

    .timeline-text {
        color: #666;
        margin-top: 0.5rem;
    }

    @media (max-width: 768px) {
        .about-header h1 {
            font-size: 1.8rem;
        }

        .timeline::before {
            left: 30px;
        }

        .timeline-item:nth-child(odd),
        .timeline-item:nth-child(even) {
            padding-left: 80px;
            text-align: left;
        }

        .timeline-dot {
            left: 30px;
        }
    }
</style>

<!-- Header Section -->
<div class="about-header">
    <h1><i class="fas fa-info-circle me-3"></i>Tentang Kami</h1>
    <p>Mengenal lebih jauh tentang visi, misi, dan perjalanan kami</p>
</div>

<!-- About Content -->
<div class="row">
    <div class="col-lg-8">
        <!-- Tentang Section -->
        <div class="about-section">
            <h2><i class="fas fa-book me-2"></i>Tentang Portofolio Ini</h2>
            <p class="about-text">
                Portofolio ini adalah representasi digital dari perjalanan profesional saya. Dirancang dengan teknologi terkini dan prinsip user experience terbaik, platform ini menampilkan karya-karya terpilih serta pencapaian yang telah diraih.
            </p>
            <p class="about-text">
                Setiap proyek yang ditampilkan telah melalui proses riset mendalam, perencanaan matang, dan eksekusi yang detail untuk memberikan nilai maksimal kepada setiap klien.
            </p>
        </div>

        <!-- Timeline Section -->
        <div class="about-section">
            <h2><i class="fas fa-history me-2"></i>Perjalanan Karir</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">2016</div>
                        <div class="timeline-text">Memulai perjalanan sebagai Developer Junior</div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">2018</div>
                        <div class="timeline-text">Naik menjadi Full Stack Developer</div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">2021</div>
                        <div class="timeline-text">Menjadi Senior Developer dan Tech Lead</div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">2024</div>
                        <div class="timeline-text">Memulai venture independen dan consulting</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="col-lg-4">
        <!-- Values Section -->
        <div class="about-section">
            <h2><i class="fas fa-heart me-2"></i>Nilai Kami</h2>
            <div class="values-grid" style="display: grid; grid-template-columns: 1fr; gap: 1rem;">
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-lightbulb"></i></div>
                    <div class="value-title">Inovasi</div>
                    <div class="value-description">Selalu mencari cara baru dan lebih baik</div>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-handshake"></i></div>
                    <div class="value-title">Integritas</div>
                    <div class="value-description">Transparansi dalam setiap interaksi</div>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-rocket"></i></div>
                    <div class="value-title">Keunggulan</div>
                    <div class="value-description">Standar kualitas tertinggi selalu</div>
                </div>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="about-section">
            <h2><i class="fas fa-award me-2"></i>Statistik</h2>
            <div style="text-align: center;">
                <div style="margin-bottom: 1.5rem;">
                    <div style="font-size: 2.5rem; color: #667eea; font-weight: 700;">5+</div>
                    <div style="color: #666;">Tahun Pengalaman</div>
                </div>
                <div style="margin-bottom: 1.5rem;">
                    <div style="font-size: 2.5rem; color: #667eea; font-weight: 700;">50+</div>
                    <div style="color: #666;">Proyek Selesai</div>
                </div>
                <div>
                    <div style="font-size: 2.5rem; color: #667eea; font-weight: 700;">100%</div>
                    <div style="color: #666;">Klien Puas</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 3rem; border-radius: 15px; text-align: center; margin-top: 3rem;">
    <h2 style="margin-bottom: 1rem;">Mari Berkolaborasi</h2>
    <p style="margin-bottom: 1.5rem; font-size: 1.1rem;">Jika Anda tertarik dengan perjalanan kami, hubungi kami untuk diskusi lebih lanjut.</p>
    <a href="/contact" class="btn btn-light btn-lg">
        <i class="fas fa-envelope me-2"></i>Hubungi Kami
    </a>
</div>

@endsection