@extends('layout.v_template')

@section('content')

<h2 class="text-white">Dosen</h2>

@if(session('pesan'))
<div class="alert alert-success" role="alert">
    {{session('pesan')}}
</div>
@endif
<a href="/dosen/add" class="btn btn-primary">Tambah Data</a>
<table class="table table-success table-striped">
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
            <td>{{$data->nidn}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->mata_kuliah}}</td>
            <td>
                <a href="/dosen/detail/{{$data->dosen_id}}" class="badge badge-primary">Detail</a>
                <a href="" class="badge badge-success">Edit</a>
                <a href="" class="badge badge-danger">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endSection