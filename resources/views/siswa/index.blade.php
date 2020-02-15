@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Daftar Siswa
            <a href="{{route('siswa.create')}}"class="btn btn-primary float-right btm-sm">Tambah Data </a>
        </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table responsive"></div>
                        <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nis</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>ID Kelas</th>
                                <th>Mata Pelajaran</th>
                                <th colspan="3">Aksi</th>
                            </tr>
                        <thead>
                        <tbody>
                        @php $no = 1; @endphp
                        @foreach($siswa as $data)
                        <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{$data->nis}}</td>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->alamat}}</td>
                        <td>{{$data->kelas->kelas}}</td>
                        <td>@foreach($data->mapel as $value)
                        <li>{{$value->mapel}}</li>
                        @endforeach
                        </td>
                        <td>
                            <a href="{{route('siswa.show',$data->id)}}" class="btn btn-info">Show</a>
                        </td>
                        <td>
                            <a href="{{route('siswa.edit',$data->id)}}" class="btn btn-danger">Edit</a>
                        </td>
                        <td>
                            <form action="{{route('siswa.destroy',$data->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Apakah Anda Yakin ?');"
                            class="btn btn-success">
                            Delete</button>
                        </td>
                    </form>
                    </tr>

                        @endforeach
                        </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
