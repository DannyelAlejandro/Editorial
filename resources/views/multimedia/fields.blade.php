<!-- Lib Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lib_id', 'Libro:') !!}
    {!! Form::select('lib_id', $books, null ,['class' => 'form-control', 'required', 'placeholder' => 'Seleccione...']) !!}
</div>

<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mlt_tipo', 'Tipo:') !!}
    {!! Form::text('mlt_tipo', null, ['class' => 'form-control', 'required', 'maxlength' => 250, 'maxlength' => 250]) !!}
</div>

<!-- Multimedia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('temp_multimedia', 'Multimedia:') !!}
    {!! Form::file('temp_multimedia', ['class' => 'form-control-file']) !!}
</div>