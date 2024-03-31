@extends('index')
 
@section('MainContent')
    <h1 class="mb-0">Edit Data Mahasiswa</h1>
    <hr />
    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="namaMhs" class="form-control" placeholder="Nama Lengkap" value="{{ $mahasiswa->namaMhs }}">
            </div>
            <div class="col">
                <input type="text" name="kotaLahirMhs" class="form-control" placeholder="Kota Kelahiran" value="{{ $mahasiswa->kotaLahirMhs }}">
            </div>
        
            <div class="col">
                <input type="date" name="tanggalLahirMhs" class="form-control" placeholder="Tanggal Lahir" value="{{ $mahasiswa->tanggalLahirMhs }}">
            </div>
            <div class="col">
                <input type="email" name="emailMhs" class="form-control" placeholder="Email" value="{{ $mahasiswa->emailMhs }}">
            </div>
            <div class="col">
                <input type="text" name="teleponMhs" class="form-control" placeholder="No.Telepon" value="{{ $mahasiswa->teleponMhs }}">
            </div>
            <div class="col">
                <input type="text" name="fakultasMhs" class="form-control" placeholder="Tanggal Lahir" value="{{ $mahasiswa->fakultasMhs }}">
            </div>
            <div class="col">
                <input type="text" name="jurusanMhs" class="form-control" placeholder="Jurusan" value="{{ $mahasiswa->jurusanMhs }}">
            </div>
            <div class="col">
                <input type="text" name="semesterMhs" class="form-control" placeholder="Semester" value="{{ $mahasiswa->semesterMhs }}">
            </div>
            <div class="col">
                <input type="text" name="genderMhs" class="form-control" placeholder="Jenis Kelamin" value="{{ $mahasiswa->genderMhs }}">
            </div>
            <div class="col">
                <input type="text" name="kelasMhs" class="form-control" placeholder="Program Kelas" value="{{ $mahasiswa->kelasMhs }}">
            </div>
            <div class="col">
                <textarea class="form-control" name="alamatMhs" placeholder="Alamat">{{ $mahasiswa->alamatMhs }}</textarea>
            </div>


            <div class="form-group">
                    <label for="fotoMhs" class="form-label">Foto</label>
                    <img src="{{asset('asset/img/mhs/')}}/{{$mahasiswa->fotoMhs}}" alt="" width="100px">
                    <input type="file" name="fotoMhs" id="fotoMhs" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection