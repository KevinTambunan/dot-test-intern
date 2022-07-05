@extends('layouts.dashboard')
@section('judul', 'Karyawan')
@section('field')
    <a href="{{ url('/karyawan/create') }}" class="btn btn-info mb-2">Tambah karyawan</a>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Umur</th>
                <th scope="col">Perusahaan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($karyawan as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->umur }}</td>
                    @foreach ($perusahaan as $itm)
                        @if ($item->perusahaan_id == $itm->id)
                            <td>{{ $itm->nama }}</td>
                        @endif
                    @endforeach
                    <td>
                        <button type="button" class="btn btn-secondary" data-toggle="modal"
                            data-target="#exampleModal{{$item->id}}">Edit</button>
                        <a href="{{ url('/karyawan/destroy/' . $item->id) }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="exampleModalLabel">Edit data {{ $item->nama }}</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5>Form Edit data {{ $item->nama }}</h5>
                                <form method="POST" action="{{url('/karyawan/update/'.$item->id)}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama">Nama Karyawan</label>
                                        <input type="text" class="form-control" id="nama" value="{{$item->nama}}" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="umur">Umur Karyawan</label>
                                        <input type="number" class="form-control" id="umur" value="{{$item->umur}}" name="umur">
                                    </div>
                                    <div class="form-group">
                                        <label for="perusahaan">Perusahaan</label>
                                        <select class="form-control" id="perusahaan" name="perusahaan">
                                            @foreach ($perusahaan as $perusahaan_item)
                                                <option value="{{$perusahaan_item->id}}"
                                                    @if ($item->perusahaan_id == $perusahaan_item->id)
                                                    selected="selected"
                                                    @endif
                                                >{{$perusahaan_item->nama}}</option>
                                            @endforeach
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
            @endforeach
        </tbody>
    </table>
@endsection
