@extends('index')
 
@section('MainContent')
    <h1 class="mb-0">Profile Dosen</h1>
    <hr />

    <div class="form-group">
        <label for="fotoDsn" class="form-label">Foto</label>
        <img src="{{asset('asset/img/dsn/')}}/{{$dosen->fotoDsn}}" alt="" width="100px">
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="namaDsn" class="form-control" placeholder="Nama Lengkap" value="{{ $dosen->namaDsn }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Kode Dosen</label>
            <input type="text" name="kodeDsn" class="form-control" placeholder="Kode Dosen" value="{{ $dosen->kodeDsn }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">NIDN</label>
            <input type="text" name="NIDN" class="form-control" placeholder="NIDN" value="{{ $dosen->NIDN }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">E-mail</label>
            <input type="email" name="emailDsn" class="form-control" placeholder="Email" value="{{ $dosen->emailDsn }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">No. Telepon</label>
            <inputtype="text" name="teleponDsn" class="form-control" placeholder="No.Telepon" value="{{ $dosen->teleponDsn }}" readonly>
        </div>
    </div>

    <a href="/dosen/{{$dosen->kodeDsn}}/edit" type="button" class="btn btn-warning">Edit</a>
@endsection