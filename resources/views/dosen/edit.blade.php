@extends('index')
 
@section('MainContent')
    <h1 class="mb-0">Edit Data dosen</h1>
    <hr />
    <form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="namaDsn" class="form-control" placeholder="Nama Lengkap" value="{{ $dosen->namaDsn }}">
            </div>
            <div class="col">
                <input type="text" name="kodeDsn" class="form-control" placeholder="Kode Dosen" value="{{ $dosen->kodeDsn }}">
            </div>
        
            <div class="col">
                <input type="text" name="NIDN" class="form-control" placeholder="NIDN" value="{{ $dosen->NIDN }}">
            </div>
            <div class="col">
                <input type="email" name="emailDsn" class="form-control" placeholder="Email" value="{{ $dosen->emailDsn }}">
            </div>
            <div class="col">
                <input type="text" name="teleponDsn" class="form-control" placeholder="No.Telepon" value="{{ $dosen->teleponDsn }}">
            </div>

            <div class="form-group">
                    <label for="fotoDsn" class="form-label">Foto</label>
                    <img src="{{asset('asset/img/Dsn/')}}/{{$dosen->fotoDsn}}" alt="" width="100px">
                    <input type="file" name="fotoDsn" id="fotoDsn" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection