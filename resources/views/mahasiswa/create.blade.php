@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Input Mahasiswa
                </div>
                <div class="card-body">

                    {!! Form::model($mahasiswa = new \App\Models\Mahasiswa,  ['url'=>'mahasiswa','files'=>true]) !!}
                        @include('mahasiswa.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection