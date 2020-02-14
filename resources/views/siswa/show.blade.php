@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Kelas</div>

                <div class="card-body">
                <div class="form-group">
                    <label>NIS</label>
                    <input type="text" name="nis" value="{{ $siswa->nis }}"
                    class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" value="{{ $siswa->nama }}"
                    class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" value="{{ $siswa->alamat }}"
                    class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <input type="text" name="kelas" value="{{$siswa->kelas->kelas}}"
                    class="form-control" readonly>
                </div>
                <div class="form-group">
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
