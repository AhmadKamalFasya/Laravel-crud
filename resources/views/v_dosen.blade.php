@extends('layout.v_template')

@section('content')

<h2 class="text-white">Dosen</h2>
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
                        <a href="/dosen/add" class="btn btn-primary">Tambah Data</a>
                        @if(session('pesan'))
                        <div class="alert alert-success" role="alert">
                            {{session('pesan')}}
                        </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">FOTO</th>
                                        <th scope="col">NIDN</th>
                                        <th scope="col">NAMA</th>
                                        <th scope="col">MATAKULIAH</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php $no = 1; ?>
                                        @foreach ($dosen as $data)
                                        <th scope="row">{{$no++}}</th>
                                        <td><img src="{{asset('img')}}/{{$data->foto}}" style="width:100px; border-radius:50%; height:100px;" alt=""></td>
                                        <td class="text-primary">{{$data->nidn}}</td>
                                        <td>{{$data->nama}}</td>
                                        <td>{{$data->mata_kuliah}}</td>
                                        <td>
                                            <a href="/dosen/detail/{{$data->dosen_id}}" class="badge badge-primary">Detail</a>
                                            <a href="/dosen/edit/{{$data->dosen_id}}" class="badge badge-success">Edit</a>
                                            <button type="button" class="badge badge-danger" data-toggle="modal" data-target=".delete{{$data->dosen_id}}" style="cursor: pointer;">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Small modal / Modal kecil-->

                        @foreach ($dosen as $data)
                        <div class="modal fade delete{{$data->dosen_id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-sm">

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="text-center">Apakah anda yakin ingin menghapusnya ?</h5>
                                    </div>
                                    <div class="modal-body text-center">
                                        <button type="button" class="btn btn-primary">Batal</button>
                                        <a href="dosen/delete/{{ $data->dosen_id}}" type="button" class="btn btn-danger">Hapus</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endSection