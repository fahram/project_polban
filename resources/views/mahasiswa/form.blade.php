<div class="form-group">
    {!! Form::label('nim', 'Nim') !!}
    {!! Form::text('nim', null, ['class'=>'form-control']) !!}
    @error('nim')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('nama', 'Nama') !!}
    {!! Form::text('nama', null, ['class'=>'form-control']) !!}    
    @error('nama')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('tempat_lahir', 'Tempat Lahir') !!}
    {!! Form::text('tempat_lahir', null, ['class'=>'form-control']) !!}
    @error('tempat_lahir')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('tanggal_lahir', 'Tanggal Lahir') !!}
    {!! Form::date('tanggal_lahir', null, ['class'=>'form-control']) !!}
    @error('tanggal_lahir')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('photo', 'Photo') !!}
    {!! Form::file('photo', ['class'=>'form-control']) !!}
    @error('photo')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

{!! Form::submit('Save', ['class'=> 'btn btn-success mt-4']) !!}