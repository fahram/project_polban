@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Data Inbox
                </div>
                <div class="card-body">
                    Nama : {{$inbox->nama}} 
                    <hr>
                    Nim : {{$inbox->nim}} 
                    <hr>
                    Tempat Lahir : {{$inbox->tempat_lahir}} 
                    <hr>
                    Tanggal Lahir : {{$inbox->tanggal_lahir}} 
                    <hr>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection