@extends('index')
 
@section('MainContent')
    <h1 class="mb-0">Profile Mahasiswa</h1>
    <hr />

    <div class="form-group">
        <label for="fotoMhs" class="form-label">Foto</label>
        <img src="{{asset('asset/img/mhs/')}}/{{$mahasiswa->fotoMhs}}" alt="" width="100px">
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="namaMhs" class="form-control" placeholder="Nama Lengkap" value="{{ $mahasiswa->namaMhs }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">NIM</label>
            <input type="text" name="id" class="form-control" placeholder="Nim" value="{{ $mahasiswa->id }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Kota Kelahiran</label>
            <input type="text" name="kotaLahirMhs" class="form-control" placeholder="Kota Kelahiran" value="{{ $mahasiswa->kotaLahirMhs }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggalLahirMhs" class="form-control" placeholder="Tanggal Lahir" value="{{ $mahasiswa->tanggalLahirMhs }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">E-mail</label>
            <input type="email" name="emailMhs" class="form-control" placeholder="Email" value="{{ $mahasiswa->emailMhs }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">No. Telepon</label>
            <inputtype="text" name="teleponMhs" class="form-control" placeholder="No.Telepon" value="{{ $mahasiswa->teleponMhs }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Fakultas</label>
            <input type="text" name="fakultasMhs" class="form-control" placeholder="Fakultas" value="{{ $mahasiswa->fakultasMhs }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Jurusan</label>
            <input type="text" name="jurusanMhs" class="form-control" placeholder="Jurusan" value="{{ $mahasiswa->jurusanMhs }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Semester</label>
            <input type="text" name="semesterMhs" class="form-control" placeholder="Semester" value="{{ $mahasiswa->semesterMhs }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <input type="text" name="genderMhs" class="form-control" placeholder="Jenis Kelamin" value="{{ $mahasiswa->genderMhs }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Program Kelas</label>
            <input type="text" name="kelasMhs" class="form-control" placeholder="Program Kelas" value="{{ $mahasiswa->kelasMhs }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Alamat</label>
            <textarea class="form-control" name="alamatMhs" placeholder="Alamat" readonly>{{ $mahasiswa->alamatMhs }}</textarea>
        </div>
    </div>

    <a href="/mahasiswa/{{$mahasiswa->id}}/edit" type="button" class="btn btn-warning">Edit</a>
@endsection