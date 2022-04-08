@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Data Mahasiswa
                </div>
                <div class="card-body">
                    <img src="/storage/{{$mahasiswa->photo}}" height="100"/>
                    <hr>
                    Nama : {{$mahasiswa->nama}} 
                    <hr>
                    Nim : {{$mahasiswa->nim}} 
                    <hr>
                    Tempat Lahir : {{$mahasiswa->tempat_lahir}} 
                    <hr>
                    Tanggal Lahir : {{$mahasiswa->tanggal_lahir}} 
                    <hr>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection