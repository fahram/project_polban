@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Inbox
                </div>
                <div class="card-body">
                    {!! Form::model($inbox ,  ['method'=>'PATCH', 
                    'route'=> [ 'inbox.update' , $inbox->id]]) !!}
                        @include('inbox.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection