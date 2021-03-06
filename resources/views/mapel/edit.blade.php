@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Mata Pelajaran</div>

                <div class="card-body">
                <form action="{{route('mapel.update',$mapel->id)}}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                <label>Mata Pelajaran</label>
                    <input type="text" name="nama" value="{{$mapel->mapel}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
