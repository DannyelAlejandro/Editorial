<!-- Aut Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aut_id', 'Aut Id:') !!}
    {!! Form::number('aut_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Edi Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('edi_id', 'Edi Id:') !!}
    {!! Form::number('edi_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Usu Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usu_id', 'Usu Id:') !!}
    {!! Form::number('usu_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Tip Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tip_id', 'Tip Id:') !!}
    {!! Form::number('tip_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Lib Publicacion Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lib_publicacion_tipo', 'Lib Publicacion Tipo:') !!}
    {!! Form::number('lib_publicacion_tipo', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Lib Isbn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lib_isbn', 'Lib Isbn:') !!}
    {!! Form::text('lib_isbn', null, ['class' => 'form-control', 'required', 'maxlength' => 250, 'maxlength' => 250]) !!}
</div>

<!-- Lib Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lib_titulo', 'Lib Titulo:') !!}
    {!! Form::text('lib_titulo', null, ['class' => 'form-control', 'required', 'maxlength' => 250, 'maxlength' => 250]) !!}
</div>

<!-- Lib Fecha Publicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lib_fecha_publicacion', 'Lib Fecha Publicacion:') !!}
    {!! Form::text('lib_fecha_publicacion', null, ['class' => 'form-control','id'=>'lib_fecha_publicacion']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#lib_fecha_publicacion').datepicker()
    </script>
@endpush

<!-- Lib Edicion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lib_edicion', 'Lib Edicion:') !!}
    {!! Form::number('lib_edicion', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Lib Paginas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lib_paginas', 'Lib Paginas:') !!}
    {!! Form::number('lib_paginas', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Lib Tamano Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lib_tamano', 'Lib Tamano:') !!}
    {!! Form::text('lib_tamano', null, ['class' => 'form-control', 'required', 'maxlength' => 250, 'maxlength' => 250]) !!}
</div>

<!-- Lib Precio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lib_precio', 'Lib Precio:') !!}
    {!! Form::number('lib_precio', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Lib Encuadernacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lib_encuadernacion', 'Lib Encuadernacion:') !!}
    {!! Form::text('lib_encuadernacion', null, ['class' => 'form-control', 'required', 'maxlength' => 250, 'maxlength' => 250]) !!}
</div>

<!-- Lib Soporte Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lib_soporte', 'Lib Soporte:') !!}
    {!! Form::text('lib_soporte', null, ['class' => 'form-control', 'required', 'maxlength' => 250, 'maxlength' => 250]) !!}
</div>

<!-- Lib Idioma Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lib_idioma', 'Lib Idioma:') !!}
    {!! Form::text('lib_idioma', null, ['class' => 'form-control', 'required', 'maxlength' => 250, 'maxlength' => 250]) !!}
</div>

<!-- Lib Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lib_estado', 'Lib Estado:') !!}
    {!! Form::number('lib_estado', null, ['class' => 'form-control', 'required']) !!}
</div>