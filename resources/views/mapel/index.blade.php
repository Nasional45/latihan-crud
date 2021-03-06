@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Daftar Mata Pelajaran
            <a href="{{route('mapel.create')}}"class="btn btn-primary float-right btm-sm">Tambah Data </a>
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
                                <th>Nomor</th>
                                <th>Mata Pelajaran</th>
                                <th colspan="3">Aksi</th>
                            </tr>
                        <thead>
                        <tbody>
                        @php $no = 1; @endphp
                        @foreach($mapel as $data)
                        <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{$data->mapel}}</td>
                        <td>
                            <a href="{{route('mapel.show',$data->id)}}" class="btn btn-info">Show</a>
                        </td>
                        <td>
                            <a href="{{route('mapel.edit',$data->id)}}" class="btn btn-danger">Edit</a>
                        </td>
                        <td>
                            <form action="{{route('mapel.destroy',$data->id)}}" method="post">
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
