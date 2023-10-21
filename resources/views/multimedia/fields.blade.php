<!-- Lib Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lib_id', 'Lib Id:') !!}
    {!! Form::number('lib_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Mlt Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mlt_tipo', 'Mlt Tipo:') !!}
    {!! Form::text('mlt_tipo', null, ['class' => 'form-control', 'required', 'maxlength' => 250, 'maxlength' => 250]) !!}
</div>

<!-- Mlt Multimedia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mlt_multimedia', 'Mlt Multimedia:') !!}
    {!! Form::text('mlt_multimedia', null, ['class' => 'form-control', 'required', 'maxlength' => 250, 'maxlength' => 250]) !!}
</div>