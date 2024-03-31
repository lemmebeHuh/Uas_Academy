@extends('index')
 
@section('MainContent')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List mahasiswa</h1>
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Add mahasiswa</a>
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
                <th scope="col">Foto</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Semester</th>
                <th scope="col">Kelas</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($mahasiswa->count() > 0)
                @foreach($mahasiswa as $rs)
                    <tr>
                        <td class="align-middle" style="text-align: center;">{{ $loop->iteration }}</td>
                        <td class="align-middle"><img  src= "{{asset('asset/img/mhs/')}}/{{$rs->fotoMhs}}" alt="" width='100px' style="border-radius: 50%;"></td>
                        <td class="align-middle">{{ $rs->namaMhs }}</td>
                        <td class="align-middle">{{ $rs->id }}</td>
                        <td class="align-middle">{{ $rs->jurusanMhs }}</td>
                        <td class="align-middle">{{ $rs->semesterMhs }}</td>
                        <td class="align-middle">{{ $rs->kelasMhs }}</td>
                        <td class="align-middle">
                            <div role="group" style="text-align: center;">
                                <a href="{{ route('mahasiswa.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('mahasiswa.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('mahasiswa.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="5">Data Mahasiswa tidak ditemukan!</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection