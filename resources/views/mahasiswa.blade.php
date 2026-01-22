@extends('layouts.main')

@section('content')
<style>
    .table-responsive {
        border-radius: 12px;
        overflow: hidden;
    }

    .table {
        margin-bottom: 0;
    }

    .action-buttons {
        display: flex;
        gap: 5px;
    }

    .action-buttons .btn-sm {
        padding: 6px 12px;
        font-size: 0.85rem;
    }

    .table-header-section {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 2rem;
        border-radius: 15px;
        margin-bottom: 2rem;
    }

    .table-header-section h1 {
        font-size: 2rem;
        margin-bottom: 0.5rem;
    }

    .table-header-section p {
        opacity: 0.9;
        margin: 0;
    }

    .btn-group-top {
        display: flex;
        gap: 10px;
        margin-top: 1rem;
    }

    .btn-group-top .btn {
        padding: 10px 25px;
        font-weight: 500;
        border-radius: 8px;
    }

    .stats-section {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 1rem;
        margin-bottom: 2rem;
    }

    .stat-card {
        background: white;
        padding: 1.5rem;
        border-radius: 12px;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    }

    .stat-card h3 {
        color: #667eea;
        font-size: 2rem;
        margin-bottom: 0.5rem;
    }

    .stat-card p {
        color: #6c757d;
        margin: 0;
        font-size: 0.9rem;
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
        margin-bottom: 1.5rem;
    }
</style>

@if ($message = Session::get('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                title: "Sukses",
                text: "{{$message}}",
                icon: "success",
                confirmButtonColor: "#667eea"
            });
        })
    </script>
@endif

<!-- Header Section -->
<div class="table-header-section">
    <h1><i class="fas fa-users me-3"></i>Manajemen Data Mahasiswa</h1>
    <p>Kelola data mahasiswa dengan mudah - tambah, edit, dan hapus data</p>
    <div class="btn-group-top">
        <a href="/tambahdatamahasiswa" class="btn btn-light">
            <i class="fas fa-plus me-2"></i>Tambah Data Baru
        </a>
    </div>
</div>

<!-- Stats Section -->
@if($data->count() > 0)
<div class="stats-section">
    <div class="stat-card">
        <h3>{{ $data->count() }}</h3>
        <p>Total Mahasiswa</p>
    </div>
    <div class="stat-card">
        <h3>{{ $data->count() }}</h3>
        <p>Terdaftar</p>
    </div>
    <div class="stat-card">
        <h3>{{ $data->where('prodi', '!=', null)->count() }}</h3>
        <p>Program Studi</p>
    </div>
</div>
@endif

<!-- Table Section -->
@if($data->count() > 0)
    <div class="card">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col" style="width: 5%;"><i class="fas fa-hashtag me-2"></i>No</th>
                        <th scope="col" style="width: 20%;"><i class="fas fa-user me-2"></i>Nama</th>
                        <th scope="col" style="width: 12%;"><i class="fas fa-id-card me-2"></i>NIM</th>
                        <th scope="col" style="width: 18%;"><i class="fas fa-book me-2"></i>Program Studi</th>
                        <th scope="col" style="width: 18%;"><i class="fas fa-envelope me-2"></i>Email</th>
                        <th scope="col" style="width: 12%;"><i class="fas fa-phone me-2"></i>No. HP</th>
                        <th scope="col" style="width: 15%;"><i class="fas fa-cog me-2"></i>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach ($data as $mahasiswa)
                    <tr>
                        <th scope="row">{{ $i }}</th>
                        <td><strong>{{ $mahasiswa->name }}</strong></td>
                        <td><span class="badge bg-info">{{ $mahasiswa->nim }}</span></td>
                        <td>{{ $mahasiswa->prodi }}</td>
                        <td><small>{{ $mahasiswa->email }}</small></td>
                        <td>{{ $mahasiswa->nohp }}</td>
                        <td>
                            <div class="action-buttons">
                                <a href="tampildata/{{ $mahasiswa->id }}" class="btn btn-sm btn-primary" title="Edit">
                                    <i class="fas fa-edit me-1"></i>Edit
                                </a>
                                <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" class="d-inline delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" title="Hapus">
                                        <i class="fas fa-trash me-1"></i>Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                        @php $i++; @endphp
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@else
    <div class="empty-state">
        <i class="fas fa-inbox"></i>
        <h4 class="mb-2">Tidak Ada Data</h4>
        <p>Belum ada data mahasiswa yang terdaftar. Mulai dengan menambahkan data baru.</p>
        <a href="/tambahdatamahasiswa" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i>Tambah Data Pertama
        </a>
    </div>
@endif

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
  $('form.delete-form').on('submit', function(e){
    e.preventDefault();
    const form = this;

    Swal.fire({
      title: "Konfirmasi Penghapusan",
      text: "Data ini akan dihapus secara permanen dan tidak dapat dipulihkan!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#dc3545",
      cancelButtonColor: "#6c757d",
      confirmButtonText: "Ya, Hapus!",
      cancelButtonText: "Batal"
    }).then((result) => {
      if (result.isConfirmed) {
        form.submit();
      }
    });
  });
</script>

@endsection