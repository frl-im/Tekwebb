<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 100px 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">MyApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{$title === 'Home' ? 'active' : '' }} " href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{$title === 'About' ? 'active' : '' }}" href="/about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{$title === 'Profile' ? 'active' : '' }} " href="/profile">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{$title === 'Contact' ? 'active' : '' }}" href="/contact">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{$title === 'Berita' ? 'active' : '' }} " href="/berita">Berita</a>
                    </li>
                    @auth
                    <li class="nav-item d-flex align-items-center me-2">
                        <span class="navbar-text text-white">Hi, {{ Auth::user()->name }}</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{$title === 'Data Mahasiswa' ? 'active' : '' }}" href="/mahasiswa">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-outline-light ms-2">Logout</button>
                        </form>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <section id="home" class="hero-section text-center">
        
    </section>

    <div class="container py-5">
        @yield('content')
        </div>

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