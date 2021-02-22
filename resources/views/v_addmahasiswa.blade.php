@extends('layout.v_template')
@section('title', 'Tambah data Mahasiswa | Zeph University')

@section('content')

<div class="container">
    <form action="/mahasiswa/insert" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control text-white @error('nim') is-invalid @enderror" id="" aria-describedby="emailHelp" value="{{ old('nim')}}" autofocus>
            <div class="invalid-feedback">
                @error('nim')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control text-white @error('nama') is-invalid @enderror" value="{{ old('nama')}}" id="">
            <div class="invalid-feedback">
                @error('nama')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Prodi</label>
            <input type="text" name="prodi_id" class="form-control text-white @error('prodi_id') is-invalid @enderror" value="{{ old('prodi_id')}}" id="">
            <div class="invalid-feedback">
                @error('prodi_id')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Matakuliah</label>
            <input class="form-control @error('matakuliah_id') is-invalid @enderror" type="file" name="matakuliah_id" value="{{ old('matakuliah_id')}}" id="formFile">
            <div class="invalid-feedback">
                @error('matakuliah_id')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endSection