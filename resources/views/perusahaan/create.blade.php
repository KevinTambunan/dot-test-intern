@extends('layouts.dashboard')

@section('judul', 'Tambah Perusahaan')
@section('field')
    <form method="POST" action="{{url('/perusahaan/store')}}">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Perusahaan</label>
            <input type="text" class="form-control" id="nama" placeholder="PT..." name="nama">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3" name="alamat" placeholder="Jalan..."></textarea>
        </div>
        <div class="form-group">
            <label for="aktif">Aktif</label>
            <select class="form-control" id="aktif" name="aktif">
                <option>Aktif</option>
                <option>Tidak Aktif</option>
            </select>
        </div>
        <button type="reset" class="btn btn-danger">Reset</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection
