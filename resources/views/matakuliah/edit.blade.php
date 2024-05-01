@extends('index')
 
@section('MainContent')
    <h1 class="mb-0">Edit Mata Kuliah</h1>
    <hr />
    <form action="{{ route('matakuliah.update', $matakuliah->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="id" class="form-control" placeholder="Kode Mata Kuliah" value="{{ $matakuliah->id }}">
            </div>
            <div class="col">
                <input type="text" name="namaMk" class="form-control" placeholder="Nama Mata Kuliah" value="{{ $matakuliah->namaMk }}">
            </div>
        </div>
            
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="namaDsn" class="form-control" placeholder="Nama Dosen" value="{{ $matakuliah->namaDsn }}">
            </div>
        </div>
           
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection