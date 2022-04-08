@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Input Inbox
                </div>
                <div class="card-body">

                    {!! Form::model($inbox = new \App\Models\Inbox,  ['url'=>'inbox']) !!}
                        @include('inbox.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection