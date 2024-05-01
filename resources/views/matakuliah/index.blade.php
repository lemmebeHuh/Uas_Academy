@extends('index')
 
@section('MainContent')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Mata Kuliah</h1>
        <a href="{{ route('matakuliah.create') }}" class="btn btn-primary">Add Mata Kuliah</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class= 'table table-bordered'>
        <thead class="table-dark" style="text-align: center;">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Mata Kuliah</th>
                <th scope="col">Kode Mata Kuliah</th>
                <th scope="col">Nama Dosen</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($matakuliah->count() > 0)
                @foreach($matakuliah as $rs)
                    <tr>
                        <td class="align-middle" style="text-align: center;">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->namaMk }}</td>
                        <td class="align-middle">{{ $rs->id }}</td>
                        <td class="align-middle">{{ $rs->namaDsn }}</td>
                        <td class="align-middle">
                            <div role="group" style="text-align: center;">
                                <a href="{{ route('matakuliah.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('matakuliah.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('matakuliah.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Data matakuliah tidak ditemukan!</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection