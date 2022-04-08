
<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('phone', 'Phone') !!}
    {!! Form::tel('phone', null, ['class'=>'form-control']) !!}
    @error('phone')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('message', 'Message') !!}
    {!! Form::textarea('message', null, ['class'=>'form-control']) !!}
    @error('message')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

{!! Form::submit('Save', ['class'=> 'btn btn-success mt-4']) !!}