@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Inbox
                    <a href="{{route('inbox.create')}}" class="btn btn-primary btn-sm float-end"> Create </a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th width="170">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($inboxs as $inbox)
                            <tr>
                                <td>{{ $inbox->id }}</td>
                                <td>{{ $inbox->name }}</td>
                                <td>{{ $inbox->phone }}</td>
                                <td>{{ $inbox->message }}</td>
                                <td>
                                    <a href="{{ route('inbox.show', $inbox->id) }}" class="btn btn-sm btn-secondary"> Show</a>
                                    <a href="{{ route('inbox.edit', $inbox->id) }}" class="btn btn-sm btn-warning"> Edit</a>
                                    {!! Form::model($inbox, ['class'=>'float-end','method'=>'DELETE', 'route' => ['inbox.destroy', $inbox->id]]) !!}
                                    {!! Form::submit('Delete', ['class'=>'btn btn-sm btn-danger']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5">Data masih kosong</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{$inboxs->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection