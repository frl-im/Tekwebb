@extends('layouts.main')

@section('content')
<style>
    .contact-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 3rem 2rem;
        border-radius: 15px;
        margin-bottom: 2rem;
        text-align: center;
    }

    .contact-header h1 {
        font-size: 2.5rem;
        margin-bottom: 0.5rem;
    }

    .contact-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2rem;
        margin-bottom: 2rem;
    }

    .contact-info {
        background: white;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    }

    .contact-info h2 {
        color: #667eea;
        margin-bottom: 1.5rem;
        font-size: 1.5rem;
    }

    .contact-item {
        display: flex;
        gap: 1rem;
        margin-bottom: 1.5rem;
        padding-bottom: 1.5rem;
        border-bottom: 1px solid #e9ecef;
    }

    .contact-item:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
    }

    .contact-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
        flex-shrink: 0;
    }

    .contact-detail h4 {
        color: #2c3e50;
        margin-bottom: 0.3rem;
        font-weight: 600;
    }

    .contact-detail p {
        color: #666;
        margin: 0;
        font-size: 0.95rem;
    }

    .contact-detail a {
        color: #667eea;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .contact-detail a:hover {
        color: #764ba2;
    }

    .form-section {
        background: white;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    }

    .form-section h2 {
        color: #667eea;
        margin-bottom: 1.5rem;
        font-size: 1.5rem;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-label {
        color: #2c3e50;
        font-weight: 600;
        margin-bottom: 0.5rem;
        display: block;
    }

    .form-control {
        border: 2px solid #e9ecef;
        border-radius: 8px;
        padding: 0.75rem;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        outline: none;
    }

    .form-control::placeholder {
        color: #bbb;
    }

    textarea.form-control {
        resize: vertical;
        min-height: 150px;
        font-family: 'Inter', sans-serif;
    }

    .btn-submit {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 8px;
        font-weight: 600;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        width: 100%;
    }

    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
    }

    .btn-submit:active {
        transform: translateY(0);
    }

    .social-links {
        display: flex;
        justify-content: center;
        gap: 1.5rem;
        margin-top: 2rem;
        padding-top: 2rem;
        border-top: 1px solid #e9ecef;
    }

    .social-link {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.3rem;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .social-link:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    }

    .map-container {
        margin-top: 2rem;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        height: 300px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
    }

    @media (max-width: 768px) {
        .contact-header h1 {
            font-size: 1.8rem;
        }

        .contact-container {
            grid-template-columns: 1fr;
        }

        .social-links {
            flex-wrap: wrap;
        }
    }
</style>

<!-- Header Section -->
<div class="contact-header">
    <h1><i class="fas fa-envelope me-3"></i>Hubungi Kami</h1>
    <p>Kami siap mendengarkan dan membantu mewujudkan ide Anda</p>
</div>

<!-- Contact Container -->
<div class="contact-container">
    <!-- Contact Information -->
    <div class="contact-info">
        <h2><i class="fas fa-address-card me-2"></i>Informasi Kontak</h2>
        
        <div class="contact-item">
            <div class="contact-icon">
                <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="contact-detail">
                <h4>Alamat</h4>
                <p>Jl. Contoh No. 123<br>Jakarta, Indonesia 12345</p>
            </div>
        </div>

        <div class="contact-item">
            <div class="contact-icon">
                <i class="fas fa-phone"></i>
            </div>
            <div class="contact-detail">
                <h4>Telepon</h4>
                <p><a href="tel:+6281234567890">+62 812 3456 7890</a></p>
            </div>
        </div>

        <div class="contact-item">
            <div class="contact-icon">
                <i class="fas fa-envelope"></i>
            </div>
            <div class="contact-detail">
                <h4>Email</h4>
                <p><a href="mailto:hello@example.com">hello@example.com</a></p>
            </div>
        </div>

        <div class="contact-item">
            <div class="contact-icon">
                <i class="fas fa-clock"></i>
            </div>
            <div class="contact-detail">
                <h4>Jam Operasional</h4>
                <p>Senin - Jumat: 09:00 - 18:00<br>Sabtu - Minggu: Tutup</p>
            </div>
        </div>

        <!-- Social Links -->
        <div class="social-links">
            <a href="#" class="social-link" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
            <a href="#" class="social-link" title="GitHub"><i class="fab fa-github"></i></a>
            <a href="#" class="social-link" title="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-link" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
        </div>
    </div>

    <!-- Contact Form -->
    <div class="form-section">
        <h2><i class="fas fa-paper-plane me-2"></i>Kirim Pesan</h2>
        <form>
            <div class="form-group">
                <label for="name" class="form-label">Nama Lengkap <span style="color: #dc3545;">*</span></label>
                <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda" required>
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email <span style="color: #dc3545;">*</span></label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda" required>
            </div>

            <div class="form-group">
                <label for="subject" class="form-label">Subjek <span style="color: #dc3545;">*</span></label>
                <input type="text" class="form-control" id="subject" placeholder="Apa yang ingin Anda bicarakan?" required>
            </div>

            <div class="form-group">
                <label for="message" class="form-label">Pesan <span style="color: #dc3545;">*</span></label>
                <textarea class="form-control" id="message" placeholder="Tuliskan pesan Anda di sini..." required></textarea>
            </div>

            <button type="submit" class="btn-submit">
                <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
            </button>
        </form>
    </div>
</div>

<!-- Map Container -->
<div class="map-container">
    <div style="text-align: center;">
        <i class="fas fa-map" style="font-size: 3rem; margin-bottom: 1rem;"></i>
        <p>Peta lokasi akan ditampilkan di sini</p>
    </div>
</div>

<!-- CTA Section -->
<div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 3rem; border-radius: 15px; text-align: center; margin-top: 3rem;">
    <h2 style="margin-bottom: 1rem;">Response Cepat Dijamin</h2>
    <p style="margin-bottom: 0; font-size: 1.05rem;">Kami akan merespon pertanyaan Anda dalam waktu 24 jam kerja</p>
</div>

<script>
    // Form submission handler
    document.querySelector('form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        Swal.fire({
            title: "Pesan Terkirim",
            text: "Terima kasih telah menghubungi kami. Kami akan segera merespon pesan Anda!",
            icon: "success",
            confirmButtonColor: "#667eea"
        }).then((result) => {
            if (result.isConfirmed) {
                this.reset();
            }
        });
    });
</script>

@endsection