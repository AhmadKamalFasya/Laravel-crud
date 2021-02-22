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
                                            <a href="" class="badge badge-danger">Delete</a>
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

@endSection