@extends('index')
 
@section('MainContent')
    <h1 class="mb-0">Tambah matakuliah</h1>
    <hr />
    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="row mb-3">
                <div class="col">
                    <input type="text" name="kodeMk" class="form-control" placeholder="Kode Mata Kuliah" required>
                </div>
                <div class="col">
                    <input type="text" name="namaMk" class="form-control" placeholder="Nama Mata Kuliah" required>
                </div>
            </div>
            
            <div class="row mb-3">
                <div class="col">
                    <input type="text" name="namaDsn" class="form-control" placeholder="Nama Dosen" required>
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
       