@extends('index')
 
@section('MainContent')
    <h1 class="mb-0">Tambah data Mahasiswa</h1>
    <hr />
    <form action="{{ route('mahasiswa.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="row mb-3">
                <div class="col">
                    <input type="text" name="namaMhs" class="form-control" placeholder="Nama Lengkap" required>
                </div>
                <div class="col">
                    <input type="text" name="genderMhs" class="form-control" placeholder="Jenis Kelamin" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <input type="text" name="kotaLahirMhs" class="form-control" placeholder="Kota Kelahiran" required>
                </div>
                <div class="col">
                    <input type="date" name="tanggalLahirMhs" class="form-control" placeholder="Tanggal Lahir" required>
                </div>
                
            </div>
            

            <div class="row mb-3">
                <div class="col">
                    <input type="email" name="emailMhs" class="form-control" placeholder="Email" required>
                </div>
                <div class="col">
                    <input type="text" name="teleponMhs" class="form-control" placeholder="No.Telepon" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <input type="text" name="fakultasMhs" class="form-control" placeholder="Fakultas" required>
                </div>
                <div class="col">
                    <input type="text" name="jurusanMhs" class="form-control" placeholder="Jurusan" required>
                </div>
                <div class="col">
                    <input type="text" name="semesterMhs" class="form-control" placeholder="Semester" required>
                </div>
                
                <div class="col">
                    <input type="text" name="kelasMhs" class="form-control" placeholder="kKelas" required>
                </div>
            </div>
            
            <div class="col mb-3">
                <div class="col">
                    <textarea class="form-control" name="alamatMhs" placeholder="Alamat" required></textarea>
                </div>
            </div>
                
            <div class="col-md-4">
                <div class="form-group">
                    <label for="fotoMhs">Foto Mahasiswa:</label>
                    <input type="file" name="fotoMhs" id="fotoMhs" class="form-control-file">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
    