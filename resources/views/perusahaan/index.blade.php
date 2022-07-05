@extends('layouts.dashboard')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
@section('judul', 'Perusahaan')

@section('field')
    <a href="{{ url('/perusahaan/create') }}" class="btn btn-info mb-2">Tambah Perusahaan</a>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($perusahaan as $item)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>
                        @if ($item->aktif == 1)
                            Aktif
                        @else
                            Tidak Aktif
                        @endif
                    </td>
                    <td>
                        <a href="{{url('/perusahaan/detail/'.$item->id)}}" class="btn btn-secondary">Detail</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal"
                            data-target="#exampleModal{{$item->id}}">Hapus</button>
                    </td>
                </tr>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="exampleModalLabel">Hapus Perusahaan {{$item->nama}}</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5>Anda yakin ingin menghapus data perusahaan {{$item->nama}} ??</h5>
                                <p>Jika ya, seluruh data perusahaan akan terhapus beserta karyawan yang akan bekerja disana</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="{{url('/perusahaan/destroy/'.$item->id)}}" class="btn btn-danger">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>
@endsection

