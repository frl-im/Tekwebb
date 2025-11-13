@extends ('layouts/main')
@section('content')
    <h1>Tambah Data Mahasiswa</h1>
    <div class="card">
        <div class="card-body bg-ocean">
    <form action="/insertdata" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" name="name" id="nama" placeholder="Nama Lengkap" class="form-control">
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">Nomor Induk Mahasiswa(Nim)</label>
            <input type="number" name="nim" id="nim" placeholder="NIM lengkap" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="prodi" class="form-label">Progam Studi</label>
            <input type="text" name="prodi" id="prodi" placeholder="Nama Progam Studi" class="form-control">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" placeholder="Nama Email" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="nohp" class="form-label">No Hp</label>
            <input type="number" name="nohp" id="nohp" placeholder="nomer Handphone" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
@endsection