@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Mahasiswa
                </div>
                <div class="card-body">
                    {!! Form::model($mahasiswa ,  [
                        'method'=>'PATCH', 
                        'route'=> [ 'mahasiswa.update' , $mahasiswa->id],
                        'files' => true
                        ]) !!}
                        @include('mahasiswa.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection