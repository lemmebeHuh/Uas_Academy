@extends('index')
 
@section('MainContent')
    <h1 class="mb-0">Detail Mata Kuliah</h1>
    <hr />

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Mata Kuliah</label>
            <input type="text" name="namaMk" class="form-control" placeholder="Nama Mata Kuliah" value="{{ $matakuliah->namaMk }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Kode Mata Kuliah</label>
            <input type="text" name="kodeMk" class="form-control" placeholder="Kode Mata Kuliah" value="{{ $matakuliah->kodeMk }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama Dosen</label>
            <input type="text" name="namaDsn" class="form-control" placeholder="namaDsn" value="{{ $matakuliah->namaDsn }}" readonly>
        </div>
    </div>

    <a href="/matakuliah/{{$matakuliah->kodeMk}}/edit" type="button" class="btn btn-warning">Edit</a>
@endsection