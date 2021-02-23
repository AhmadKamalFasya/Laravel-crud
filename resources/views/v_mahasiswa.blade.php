@extends('layout.v_template')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Mahasiswa</h4>
                        <p class="card-category"> List Data mahasiswa</p>
                    </div>
                    <div class="card-body">
                        <a href="/mahasiswa/add" class="btn btn-primary">Tambah Data</a>
                        @if(session('pesan'))
                        <div class="alert alert-success" role="alert">
                            {{session('pesan')}}
                        </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>No</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Prodi</th>
                                    <th>Matakuliah</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($mahasiswa as $data)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td class="text-primary">{{$data->nim}}</td>
                                        <td>{{$data->nama}}</td>
                                        <td>{{$data->prodi}}</td>
                                        <td>{{$data->mata_kuliah}}</td>
                                        <td>
                                            <a href="/mahasiswa/detail/{{$data->mahasiswa_id}}" class="badge badge-primary">Detail</a>
                                            <a href="/mahasiswa/edit/{{$data->mahasiswa_id}}" class="badge badge-success">Edit</a>
                                            <button type="button" class="badge badge-danger" data-toggle="modal" data-target=".delete{{$data->mahasiswa_id}}" style="cursor: pointer;">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@foreach ($mahasiswa as $data)
<div class="modal fade delete{{$data->mahasiswa_id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-center">Apakah anda yakin ingin menghapusnya ?</h5>
            </div>
            <div class="modal-body text-center">
                <button type="button" class="btn btn-primary">Batal</button>
                <a href="mahasiswa/delete/{{ $data->mahasiswa_id}}" type="button" class="btn btn-danger">Hapus</a>
            </div>
        </div>

    </div>
</div>
@endforeach

@endSection