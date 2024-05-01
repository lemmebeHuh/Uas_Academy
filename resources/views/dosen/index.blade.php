@extends('admin')
 
@section('MainContent')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List dosen</h1>
        <a href="{{ route('dosen.create') }}" class="btn btn-primary">Add dosen</a>
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
                <th scope="col">Kode Dosen</th>
                <th scope="col">E-mail</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($dosen->count() > 0)
                @foreach($dosen as $rs)
                    <tr>
                        <td class="align-middle" style="text-align: center;">{{ $loop->iteration }}</td>
                        <td class="align-middle"><img  src= "{{asset('asset/img/dsn/')}}/{{$rs->fotoDsn}}" alt="" width='100px' style="border-radius: 50%;"></td>
                        <td class="align-middle">{{ $rs->namaDsn }}</td>
                        <td class="align-middle">{{ $rs->kodeDsn }}</td>
                        <td class="align-middle">{{ $rs->emailDsn }}</td>
                        <td class="align-middle">
                            <div role="group" style="text-align: center;">
                                <a href="{{ route('dosen.show', $rs->kodeDsn) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('dosen.edit', $rs->kodeDsn)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('dosen.destroy', $rs->kodeDsn) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="5">Data dosen tidak ditemukan!</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection