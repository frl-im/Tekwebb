@extends('layouts.main')

@section('content')
<style>
    .berita-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 3rem 2rem;
        border-radius: 15px;
        margin-bottom: 2rem;
        text-align: center;
    }

    .berita-header h1 {
        font-size: 2.5rem;
        margin-bottom: 0.5rem;
    }

    .berita-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 2rem;
        margin-bottom: 2rem;
    }

    .article-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        cursor: pointer;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .article-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.2);
    }

    .article-image {
        width: 100%;
        height: 200px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 3rem;
        overflow: hidden;
    }

    .article-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .article-content {
        padding: 1.5rem;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .article-category {
        display: inline-block;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 0.4rem 0.8rem;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
        margin-bottom: 0.8rem;
        width: fit-content;
    }

    .article-title {
        font-size: 1.3rem;
        color: #2c3e50;
        margin-bottom: 0.8rem;
        line-height: 1.4;
        flex-grow: 1;
    }

    .article-title a {
        color: #2c3e50;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .article-title a:hover {
        color: #667eea;
    }

    .article-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #999;
        font-size: 0.9rem;
        border-top: 1px solid #e9ecef;
        padding-top: 1rem;
        margin-top: 1rem;
    }

    .article-author {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .article-author i {
        color: #667eea;
    }

    .article-date {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .article-date i {
        color: #667eea;
    }

    .article-excerpt {
        color: #666;
        line-height: 1.6;
        margin-bottom: 1rem;
        flex-grow: 1;
    }

    .read-more {
        display: inline-block;
        color: #667eea;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        margin-top: auto;
    }

    .read-more:hover {
        color: #764ba2;
        gap: 0.5rem;
    }

    .read-more i {
        margin-left: 0.5rem;
        transition: transform 0.3s ease;
    }

    .article-card:hover .read-more i {
        transform: translateX(5px);
    }

    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    }

    .empty-state i {
        font-size: 4rem;
        color: #ddd;
        margin-bottom: 1rem;
    }

    .empty-state p {
        color: #999;
    }

    @media (max-width: 768px) {
        .berita-grid {
            grid-template-columns: 1fr;
        }

        .berita-header h1 {
            font-size: 1.8rem;
        }
    }
</style>

<!-- Header Section -->
<div class="berita-header">
    <h1><i class="fas fa-newspaper me-3"></i>Berita & Update</h1>
    <p>Tetap terdepan dengan informasi terbaru tentang pengembangan dan pencapaian</p>
</div>

@if($beritas && count($beritas) > 0)
    <!-- Articles Grid -->
    <div class="berita-grid">
        @foreach($beritas as $berita)
        <div class="article-card">
            <div class="article-image">
                <i class="fas fa-image"></i>
            </div>
            <div class="article-content">
                <span class="article-category">Artikel</span>
                <h3 class="article-title">
                    <a href="/berita/{{$berita['slug'] ?? '#'}}">
                        {{ $berita['judul'] ?? 'Judul Tidak Tersedia' }}
                    </a>
                </h3>
                <p class="article-excerpt">
                    {{ substr($berita['konten'] ?? '', 0, 150) }}...
                </p>
                <div class="article-meta">
                    <span class="article-author">
                        <i class="fas fa-user"></i>
                        {{ $berita['penulis'] ?? 'Penulis Tidak Diketahui' }}
                    </span>
                    <span class="article-date">
                        <i class="fas fa-calendar-alt"></i>
                        {{ date('d M Y') }}
                    </span>
                </div>
                <a href="/berita/{{$berita['slug'] ?? '#'}}" class="read-more">
                    Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
        @endforeach
    </div>
@else
    <!-- Empty State -->
    <div class="empty-state">
        <i class="fas fa-inbox"></i>
        <h4 class="mb-2">Tidak Ada Berita</h4>
        <p>Belum ada berita yang dipublikasikan. Cek kembali nanti untuk update terbaru!</p>
    </div>
@endif

<!-- CTA Section -->
<div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 3rem; border-radius: 15px; text-align: center; margin-top: 3rem;">
    <h2 style="margin-bottom: 1rem;">Jangan Lewatkan Update Terbaru</h2>
    <p style="margin-bottom: 1.5rem; font-size: 1rem;">Berlangganan newsletter kami untuk mendapatkan informasi terbaru langsung ke email Anda.</p>
    <div class="input-group" style="max-width: 400px; margin: 0 auto;">
        <input type="email" class="form-control" placeholder="Masukkan email Anda" aria-label="Email">
        <button class="btn btn-light" type="button">
            <i class="fas fa-paper-plane me-2"></i>Berlangganan
        </button>
    </div>
</div>

@endsection