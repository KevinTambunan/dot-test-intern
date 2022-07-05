@extends('layouts.dashboard')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
@section('judul', 'Perusahaan')

@section('field')
    <div class="fluid-container">
        <div class="row">
            <div class="card mb-2 col-md-4" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Detail Perusahaan</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $perusahaan->nama }}</h6>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td>{{ $perusahaan->nama }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>{{ $perusahaan->alamat }}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                    @if ($perusahaan->aktif == 1)
                                        Aktif
                                    @else
                                        Tidak Aktif
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Edit
                        Data</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="exampleModalLabel">Edit data</h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h5>Form Edit data Perusahaan {{ $perusahaan->nama }}</h5>
                                    <form method="POST" action="{{ url('/perusahaan/update/'.$perusahaan->id) }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="nama">Nama Perusahaan</label>
                                            <input type="text" class="form-control" id="nama"
                                                value="{{ $perusahaan->nama }}" name="nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea class="form-control" id="alamat" rows="3" name="alamat">{{ $perusahaan->alamat }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="aktif">Aktif</label>
                                            <select class="form-control" id="aktif" name="aktif">
                                                <option @if ($perusahaan->aktif == 1) selected="selected" @endif>Aktif
                                                </option>
                                                <option @if ($perusahaan->aktif == 0) selected="selected" @endif>Tidak
                                                    Aktif</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <h5>Karyawan</h5>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Umur</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($karyawan as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->umur }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
