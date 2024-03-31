@extends('index')
 
@section('MainContent')
    <h1 class="mb-0">Tambah data dosen</h1>
    <hr />
    <form action="{{ route('dosen.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="row mb-3">
                <div class="col">
                    <input type="text" name="namaDsn" class="form-control" placeholder="Nama Lengkap" required>
                </div>
                <div class="col">
                    <input type="text" name="kodeDsn" class="form-control" placeholder="Kode Dosen" required>
                </div>
            </div>
            
            <div class="row mb-3">
                <div class="col">
                    <input type="text" name="NIDN" class="form-control" placeholder="NIDN" required>
                </div>
            </div>
            

            <div class="row mb-3">
                <div class="col">
                    <input type="text" name="teleponDsn" class="form-control" placeholder="No. Telepon" required>
                </div>
                <div class="col">
                    <input type="email" name="emailDsn" class="form-control" placeholder="E-mail" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="fotoDsn">Foto dosen:</label>
                    <input type="file" name="fotoDsn" id="fotoDsn" class="form-control-file">
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
       