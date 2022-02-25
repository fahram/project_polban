@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Mahasiswa
                    <a href="{{route('mahasiswa.create')}}" class="btn btn-primary btn-sm float-end"> Create </a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nim</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tangal Lahir</th>
                                <th width="170">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($mahasiswas as $mahasiswa)
                            <tr>
                                <td>{{ $mahasiswa->id }}</td>
                                <td>{{ $mahasiswa->nim }}</td>
                                <td>{{ $mahasiswa->nama }}</td>
                                <td>{{ $mahasiswa->tempat_lahir }}</td>
                                <td>{{ $mahasiswa->tanggal_lahir }}</td>
                                <td>
                                    <a href="{{ route('mahasiswa.show', $mahasiswa->id) }}" class="btn btn-sm btn-secondary"> Show</a>
                                    <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-sm btn-warning"> Edit</a>
                                    {!! Form::model($mahasiswa, ['class'=>'float-end','method'=>'DELETE', 'route' => ['mahasiswa.destroy', $mahasiswa->id]]) !!}
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
                    {{$mahasiswas->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection