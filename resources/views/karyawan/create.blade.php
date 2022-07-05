@extends('layouts.dashboard')

@section('judul', 'Tambah Karyawan')
@section('field')
    <form method="POST" action="{{url('/karyawan/store')}}">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Karyawan</label>
            <input type="text" class="form-control" id="nama" placeholder="Kevin..." name="nama">
        </div>
        <div class="form-group">
            <label for="umur">Umur Karyawan</label>
            <input type="number" class="form-control" id="umur" placeholder="25" name="umur">
        </div>
        <div class="form-group">
            <label for="perusahaan">Perusahaan</label>
            <select class="form-control" id="perusahaan" name="perusahaan">
                @foreach ($perusahaan as $item)
                    <option value="{{$item->id}}">{{$item->nama}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-danger">Reset</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection
