@extends ('layouts/main')
@section('content')
<style>
    .form-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 2rem;
        border-radius: 15px;
        margin-bottom: 2rem;
    }

    .form-header h1 {
        font-size: 2rem;
        margin-bottom: 0.5rem;
    }

    .form-card {
        background: white;
        padding: 2.5rem;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        max-width: 600px;
        margin: 0 auto;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-label {
        color: #2c3e50;
        font-weight: 600;
        margin-bottom: 0.5rem;
        display: block;
        font-size: 0.95rem;
    }

    .form-label .required {
        color: #dc3545;
    }

    .form-control {
        border: 2px solid #e9ecef;
        border-radius: 8px;
        padding: 0.75rem;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        width: 100%;
        box-sizing: border-box;
    }

    .form-control:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        outline: none;
    }

    .form-control::placeholder {
        color: #bbb;
    }

    .form-control:valid {
        border-color: #10b981;
    }

    .input-group-info {
        font-size: 0.85rem;
        color: #999;
        margin-top: 0.3rem;
    }

    .form-buttons {
        display: flex;
        gap: 1rem;
        margin-top: 2.5rem;
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
        flex: 1;
    }

    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
    }

    .btn-cancel {
        background: #e9ecef;
        color: #2c3e50;
        border: none;
        padding: 12px 30px;
        border-radius: 8px;
        font-weight: 600;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        flex: 1;
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .btn-cancel:hover {
        background: #dee2e6;
        color: #2c3e50;
        text-decoration: none;
    }

    .form-info-box {
        background: #f0f4ff;
        border-left: 4px solid #667eea;
        padding: 1rem;
        border-radius: 8px;
        margin-bottom: 1.5rem;
        color: #667eea;
    }

    .form-info-box i {
        margin-right: 0.5rem;
    }

    @media (max-width: 768px) {
        .form-card {
            padding: 1.5rem;
        }

        .form-buttons {
            flex-direction: column;
        }
    }
</style>

<!-- Header Section -->
<div class="form-header">
    <h1><i class="fas fa-user-plus me-3"></i>Tambah Data Mahasiswa</h1>
    <p>Masukkan data mahasiswa baru ke dalam sistem</p>
</div>

<!-- Form Card -->
<div class="form-card">
    <div class="form-info-box">
        <i class="fas fa-info-circle"></i>
        Lengkapi semua field dengan data yang valid dan akurat
    </div>

    <form action="/insertdata" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Nama -->
        <div class="form-group">
            <label for="nama" class="form-label">
                <i class="fas fa-user me-2" style="color: #667eea;"></i>
                Nama Lengkap <span class="required">*</span>
            </label>
            <input type="text" name="name" id="nama" placeholder="Masukkan nama lengkap" class="form-control" required>
            <div class="input-group-info">Nama harus terdiri dari minimal 3 karakter</div>
        </div>

        <!-- NIM -->
        <div class="form-group">
            <label for="nim" class="form-label">
                <i class="fas fa-id-card me-2" style="color: #667eea;"></i>
                Nomor Induk Mahasiswa (NIM) <span class="required">*</span>
            </label>
            <input type="text" name="nim" id="nim" placeholder="Contoh: 12345678" class="form-control" required>
            <div class="input-group-info">NIM harus unik untuk setiap mahasiswa</div>
        </div>

        <!-- Program Studi -->
        <div class="form-group">
            <label for="prodi" class="form-label">
                <i class="fas fa-book me-2" style="color: #667eea;"></i>
                Program Studi <span class="required">*</span>
            </label>
            <input type="text" name="prodi" id="prodi" placeholder="Contoh: Teknik Informatika" class="form-control" required>
            <div class="input-group-info">Program studi di universitas</div>
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="email" class="form-label">
                <i class="fas fa-envelope me-2" style="color: #667eea;"></i>
                Email <span class="required">*</span>
            </label>
            <input type="email" name="email" id="email" placeholder="contoh@email.com" class="form-control" required>
            <div class="input-group-info">Gunakan email yang masih aktif</div>
        </div>

        <!-- No HP -->
        <div class="form-group">
            <label for="nohp" class="form-label">
                <i class="fas fa-phone me-2" style="color: #667eea;"></i>
                Nomor Handphone <span class="required">*</span>
            </label>
            <input type="tel" name="nohp" id="nohp" placeholder="Contoh: 081234567890" class="form-control" required>
            <div class="input-group-info">Nomor aktif untuk komunikasi</div>
        </div>

        <!-- Buttons -->
        <div class="form-buttons">
            <button type="submit" class="btn-submit">
                <i class="fas fa-save me-2"></i>Simpan Data
            </button>
            <a href="/mahasiswa" class="btn-cancel">
                <i class="fas fa-times me-2"></i>Batal
            </a>
        </div>
    </form>
</div>

<script>
    // Simple form validation
    document.querySelector('form').addEventListener('submit', function(e) {
        const nama = document.getElementById('nama').value;
        const nim = document.getElementById('nim').value;
        const email = document.getElementById('email').value;
        
        if (nama.length < 3) {
            e.preventDefault();
            Swal.fire({
                title: "Validasi Error",
                text: "Nama harus minimal 3 karakter",
                icon: "error",
                confirmButtonColor: "#667eea"
            });
            return false;
        }

        if (!email.includes('@')) {
            e.preventDefault();
            Swal.fire({
                title: "Validasi Error",
                text: "Email tidak valid",
                icon: "error",
                confirmButtonColor: "#667eea"
            });
            return false;
        }
    });
</script>

@endsection