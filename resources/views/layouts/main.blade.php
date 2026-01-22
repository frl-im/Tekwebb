<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}} | Portfolio</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f8f9fa;
            color: #2c3e50;
        }

        /* Navbar Profesional */
        .navbar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 1rem 0;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: white !important;
        }

        .nav-link {
            color: rgba(255,255,255,0.9) !important;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover, .nav-link.active {
            color: #fff !important;
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            right: 0;
            height: 3px;
            background: #fff;
            border-radius: 2px;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 80px 0;
            margin-bottom: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
        }

        .hero-section h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .hero-section p {
            font-size: 1.1rem;
            opacity: 0.95;
            margin-bottom: 2rem;
        }

        /* Cards */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .card-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 12px 12px 0 0 !important;
        }

        /* Buttons */
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            padding: 10px 25px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .btn-success {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            border: none;
            padding: 10px 25px;
            font-weight: 500;
        }

        .btn-success:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(16, 185, 129, 0.4);
        }

        .btn-danger {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            border: none;
            padding: 10px 25px;
            font-weight: 500;
        }

        /* Tables */
        .table-striped {
            border-radius: 12px;
            overflow: hidden;
        }

        .table thead {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .table tbody tr {
            transition: all 0.3s ease;
        }

        .table tbody tr:hover {
            background-color: #e9ecef;
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px 0;
            margin-top: 60px;
            text-align: center;
        }

        /* Spacing */
        .container {
            max-width: 1200px;
        }

        /* Badge */
        .badge-info {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        /* Section Title */
        .section-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 2rem;
            color: #2c3e50;
            position: relative;
            padding-bottom: 1rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 2px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 1.8rem;
            }

            .section-title {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="fas fa-briefcase me-2"></i>Portfolio
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{$title === 'Home' ? 'active' : '' }}" href="/home">
                            <i class="fas fa-home me-1"></i>Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{$title === 'About' ? 'active' : '' }}" href="/about">
                            <i class="fas fa-user me-1"></i>Tentang
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{$title === 'Profile' ? 'active' : '' }}" href="/profile">
                            <i class="fas fa-address-card me-1"></i>Profil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{$title === 'Berita' ? 'active' : '' }}" href="/berita">
                            <i class="fas fa-newspaper me-1"></i>Berita
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{$title === 'Contact' ? 'active' : '' }}" href="/contact">
                            <i class="fas fa-envelope me-1"></i>Kontak
                        </a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link {{$title === 'Data Mahasiswa' ? 'active' : '' }}" href="/mahasiswa">
                                <i class="fas fa-users me-1"></i>Mahasiswa
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="fas fa-user-circle me-1"></i>{{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="/profile"><i class="fas fa-user me-2"></i>Profil Saya</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="fas fa-sign-out-alt me-2"></i>Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                                <i class="fas fa-sign-in-alt me-1"></i>Login
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container py-5">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-4 mb-3">
                    <h5>Portfolio</h5>
                    <p>Menampilkan karya terbaik dan pengalaman profesional</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Navigasi</h5>
                    <ul class="list-unstyled">
                        <li><a href="/home" style="color: rgba(255,255,255,0.9); text-decoration: none;">Home</a></li>
                        <li><a href="/about" style="color: rgba(255,255,255,0.9); text-decoration: none;">Tentang</a></li>
                        <li><a href="/berita" style="color: rgba(255,255,255,0.9); text-decoration: none;">Berita</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Media Sosial</h5>
                    <div>
                        <a href="#" style="color: white; margin-right: 15px;"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="#" style="color: white; margin-right: 15px;"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" style="color: white; margin-right: 15px;"><i class="fab fa-linkedin fa-lg"></i></a>
                        <a href="#" style="color: white;"><i class="fab fa-github fa-lg"></i></a>
                    </div>
                </div>
            </div>
            <hr style="background-color: rgba(255,255,255,0.2);">
            <p>&copy; 2025 Portfolio. Semua hak dilindungi.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('success'))
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        Swal.fire({
          title: "Sukses",
          text: "{{ session('success') }}",
          icon: "success"
        });
      });
    </script>
    @endif
</body>
</html>