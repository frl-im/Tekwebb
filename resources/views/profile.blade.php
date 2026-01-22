@extends('layouts.main')

@section('content')
<style>
    .profile-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 3rem;
        border-radius: 15px;
        text-align: center;
        margin-bottom: 3rem;
    }

    .profile-photo {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        border: 5px solid white;
        margin: 0 auto 1.5rem;
        object-fit: cover;
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }

    .profile-name {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .profile-contact {
        display: flex;
        justify-content: center;
        gap: 2rem;
        margin-top: 1.5rem;
        flex-wrap: wrap;
    }

    .profile-contact-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.95rem;
    }

    .profile-content {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
    }

    .profile-card {
        background: white;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    }

    .profile-card h3 {
        color: #667eea;
        margin-bottom: 1.5rem;
        font-size: 1.4rem;
        border-bottom: 3px solid #667eea;
        padding-bottom: 0.5rem;
    }

    .skill-tag {
        display: inline-block;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        margin: 0.3rem;
        font-size: 0.85rem;
        font-weight: 500;
    }

    .experience-item {
        padding: 1.5rem 0;
        border-bottom: 1px solid #e9ecef;
    }

    .experience-item:last-child {
        border-bottom: none;
    }

    .experience-title {
        color: #667eea;
        font-weight: 600;
        font-size: 1.1rem;
    }

    .experience-date {
        color: #999;
        font-size: 0.9rem;
        margin-top: 0.3rem;
    }

    .experience-description {
        margin-top: 0.5rem;
        color: #666;
    }

    .social-links {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin-top: 2rem;
    }

    .social-links a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #f0f0f0;
        color: #667eea;
        font-size: 1.2rem;
        transition: all 0.3s ease;
    }

    .social-links a:hover {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        transform: translateY(-3px);
    }

    @media (max-width: 768px) {
        .profile-name {
            font-size: 1.8rem;
        }

        .profile-contact {
            flex-direction: column;
            gap: 1rem;
        }

        .profile-photo {
            width: 120px;
            height: 120px;
        }
    }
</style>

<!-- Profile Header -->
<div class="profile-header">
    @if($foto)
        <img src="{{ $foto }}" alt="{{ $nama }}" class="profile-photo">
    @else
        <div class="profile-photo" style="background: rgba(255,255,255,0.3); display: flex; align-items: center; justify-content: center;">
            <i class="fas fa-user" style="font-size: 3rem;"></i>
        </div>
    @endif
    <h1 class="profile-name">{{ $nama }}</h1>
    <p style="font-size: 1.1rem; opacity: 0.95; margin: 0;">Profesional | Developer | Entrepreneur</p>
    
    <div class="profile-contact">
        <div class="profile-contact-item">
            <i class="fas fa-phone"></i>
            <span>{{ $nohp }}</span>
        </div>
        <div class="profile-contact-item">
            <i class="fas fa-envelope"></i>
            <span>contact@example.com</span>
        </div>
        <div class="profile-contact-item">
            <i class="fas fa-map-marker-alt"></i>
            <span>Indonesia</span>
        </div>
    </div>

    <div class="social-links">
        <a href="#" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
        <a href="#" title="GitHub"><i class="fab fa-github"></i></a>
        <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
        <a href="#" title="Email"><i class="fas fa-envelope"></i></a>
    </div>
</div>

<!-- Profile Content -->
<div class="profile-content">
    <!-- About Section -->
    <div class="profile-card">
        <h3><i class="fas fa-user-circle me-2"></i>Tentang Saya</h3>
        <p>Saya adalah seorang profesional berpengalaman dalam industri teknologi dan pengembangan bisnis. Dengan fokus pada inovasi dan kepuasan klien, saya berkomitmen untuk memberikan solusi terbaik.</p>
        <p>Memiliki track record yang terbukti dalam mengelola proyek kompleks dan membangun tim yang kuat.</p>
    </div>

    <!-- Skills Section -->
    <div class="profile-card">
        <h3><i class="fas fa-star me-2"></i>Keahlian</h3>
        <div>
            <span class="skill-tag">PHP</span>
            <span class="skill-tag">Laravel</span>
            <span class="skill-tag">JavaScript</span>
            <span class="skill-tag">React</span>
            <span class="skill-tag">MySQL</span>
            <span class="skill-tag">Bootstrap</span>
            <span class="skill-tag">REST API</span>
            <span class="skill-tag">Git</span>
        </div>
    </div>

    <!-- Experience Section -->
    <div class="profile-card">
        <h3><i class="fas fa-briefcase me-2"></i>Pengalaman Kerja</h3>
        
        <div class="experience-item">
            <div class="experience-title">Senior Developer</div>
            <div class="experience-date">2021 - Sekarang</div>
            <div class="experience-description">Memimpin tim pengembangan dan mengelola proyek-proyek skala besar.</div>
        </div>

        <div class="experience-item">
            <div class="experience-title">Full Stack Developer</div>
            <div class="experience-date">2018 - 2021</div>
            <div class="experience-description">Mengembangkan aplikasi web dan mobile untuk berbagai klien.</div>
        </div>

        <div class="experience-item">
            <div class="experience-title">Junior Developer</div>
            <div class="experience-date">2016 - 2018</div>
            <div class="experience-description">Memulai karir sebagai developer junior dan mempelajari teknologi baru.</div>
        </div>
    </div>

    <!-- Education Section -->
    <div class="profile-card">
        <h3><i class="fas fa-graduation-cap me-2"></i>Pendidikan</h3>
        
        <div class="experience-item">
            <div class="experience-title">Sarjana Teknik Informatika</div>
            <div class="experience-date">2012 - 2016</div>
            <div class="experience-description">Universitas Terkemuka - IPK 3.7</div>
        </div>

        <div class="experience-item">
            <div class="experience-title">Sertifikasi Web Development</div>
            <div class="experience-date">2016</div>
            <div class="experience-description">Bootcamp Coding Intensif - 3 bulan</div>
        </div>
    </div>

    <!-- Achievements Section -->
    <div class="profile-card">
        <h3><i class="fas fa-trophy me-2"></i>Penghargaan & Sertifikasi</h3>
        <ul style="list-style: none; padding: 0;">
            <li style="padding: 0.5rem 0; color: #666;">
                <i class="fas fa-award me-2" style="color: #667eea;"></i>Developer of the Year 2023
            </li>
            <li style="padding: 0.5rem 0; color: #666;">
                <i class="fas fa-award me-2" style="color: #667eea;"></i>Best Project Award 2022
            </li>
            <li style="padding: 0.5rem 0; color: #666;">
                <i class="fas fa-award me-2" style="color: #667eea;"></i>Google Certified Associate Cloud Engineer
            </li>
        </ul>
    </div>

    <!-- Achievements Stats -->
    <div class="profile-card">
        <h3><i class="fas fa-chart-bar me-2"></i>Pencapaian</h3>
        <div style="text-align: center;">
            <div style="margin-bottom: 1.5rem;">
                <div style="font-size: 2rem; color: #667eea; font-weight: 700;">50+</div>
                <div style="color: #666;">Proyek Selesai</div>
            </div>
            <div style="margin-bottom: 1.5rem;">
                <div style="font-size: 2rem; color: #667eea; font-weight: 700;">100+</div>
                <div style="color: #666;">Klien Puas</div>
            </div>
            <div>
                <div style="font-size: 2rem; color: #667eea; font-weight: 700;">5+</div>
                <div style="color: #666;">Tahun Pengalaman</div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 3rem; border-radius: 15px; text-align: center; margin-top: 3rem;">
    <h2 style="margin-bottom: 1rem;">Tertarik Berkolaborasi?</h2>
    <p style="margin-bottom: 1.5rem; font-size: 1.1rem;">Mari diskusikan bagaimana saya dapat membantu proyek Anda selanjutnya.</p>
    <a href="/contact" class="btn btn-light btn-lg">
        <i class="fas fa-envelope me-2"></i>Hubungi Saya
    </a>
</div>

@endsection