@extends('layout.v_template')

@section('content')

<h2 class="text-white">Dosen</h2>
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
            <td><img src="{{asset('img')}}/profile.jpg" style="width:100px; border-radius:50%;" alt=""></td>
            <td>{{$data->nidn}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->mata_kuliah}}</td>
            <td>
                <a href="" class="badge badge-primary">Edit</a>
                <a href="" class="badge badge-danger">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endSection