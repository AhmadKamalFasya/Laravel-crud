@extends('layout.v_template')

@section('title', 'Detail Mahasiswa | Zeph University')

@section('content')

<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{asset('img')}}/profile.jpg" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body text-white">
                <h5 class="card-title text-white">{{$mahasiswa->nama}} ({{$mahasiswa->nim}})</h5>
                <p class="card-text">{{$mahasiswa->prodi_id}}</p>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>

@endSection