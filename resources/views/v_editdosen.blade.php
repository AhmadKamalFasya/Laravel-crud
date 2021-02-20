@extends('layout.v_template')
@section('title', 'Edit Dosen | Zeph University')

@section('content')

<div class="container">
    <form action="/dosen/update/{{ $dosen->dosen_id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">NIDN</label>
            <input type="text" name="nidn" class="form-control text-dark @error('nidn') is-invalid @enderror" id="" aria-describedby="emailHelp" value="{{ $dosen->nidn }}" readonly>
            <div class="invalid-feedback">
                @error('nidn')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control text-white @error('nama') is-invalid @enderror" value="{{ $dosen->nama }}" id="">
            <div class="invalid-feedback">
                @error('nama')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Mata Kuliah</label>
            <input type="text" name="mata_kuliah" class="form-control text-white @error('mata_kuliah') is-invalid @enderror" value="{{ $dosen->mata_kuliah }}" id="">
            <div class="invalid-feedback">
                @error('mata_kuliah')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <img src="{{url('img/'.$dosen->foto)}}" alt="" width="100" height="100">
        <h6>{{$dosen->foto}}</h6>
        <div class="mb-3">
            <label for="formFile" class="form-label">Foto</label>
            <input class="form-control @error('foto') is-invalid @enderror" type="file" name="foto" value="{{ old('foto')}}" id="formFile">
            <div class="invalid-feedback">
                @error('foto')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection