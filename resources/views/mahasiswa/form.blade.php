<div class="form-group">
    {!! Form::label('nim', 'Nim') !!}
    {!! Form::text('nim', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('nama', 'Nama') !!}
    {!! Form::text('nama', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('tempat_lahir', 'Tempat Lahir') !!}
    {!! Form::text('tempat_lahir', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('tanggal_lahir', 'Tanggal Lahir') !!}
    {!! Form::date('tanggal_lahir', null, ['class'=>'form-control']) !!}
</div>

{!! Form::submit('Save', ['class'=> 'btn btn-success mt-4']) !!}