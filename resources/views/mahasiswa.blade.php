@extends('layouts.main')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="mb-0">Data Mahasiswa</h1>
    <div>
        <a href="/tambahdatamahasiswa" class="btn btn-success">Tambah Data</a>
        <form method="POST" action="{{ route('logout') }}" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-outline-secondary">Logout</button>
        </form>
    </div>
</div>

@if ($message = Session::get('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                title: "Sukses",
                text: "{{$message}}",
                icon: "success"
            });
        })
    </script>
@endif

<table class="table table-striped table-hover">
  <thead class="table-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Nim</th>
      <th scope="col">Prodi</th>
      <th scope="col">Email</th>
      <th scope="col">No Hp</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @php $i = 1; @endphp
    @foreach ($data as $mahasiswa)
    <tr>
      <th scope="row">{{ $i }}</th>
      <td>{{ $mahasiswa->name }}</td>
      <td>{{ $mahasiswa->nim }}</td>
      <td>{{ $mahasiswa->prodi }}</td>
      <td>{{ $mahasiswa->email }}</td>
      <td>{{ $mahasiswa->nohp }}</td>
      <td>
        <a href="tampildata/{{ $mahasiswa->id }}" class="btn btn-sm btn-primary">Edit</a>
        <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" class="d-inline delete-form">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
        </form>
      </td>
      @php $i++; @endphp
    </tr>
    @endforeach
  </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
  $('form.delete-form').on('submit', function(e){
    e.preventDefault();
    const form = this;

    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!"
    }).then((result) => {
      if (result.isConfirmed) {
        form.submit();
      }
    });
  });
</script>

@endsection