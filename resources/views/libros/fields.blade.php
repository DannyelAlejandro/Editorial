<!-- Aut Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aut_id', 'Autor:') !!}
    {!! Form::select('aut_id', $authors, null ,['class' => 'form-control', 'required', 'placeholder' => 'Seleccione...']) !!}
</div>

<!-- Edi Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('edi_id', 'Editorial:') !!}
    {!! Form::select('edi_id', $editorials, null ,['class' => 'form-control', 'required', 'placeholder' => 'Seleccione...']) !!}
</div>

<input type="hidden" name="usu_id" id="usu_id" value="{{ Auth::user()->usu_id }}">

<!-- Tip Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tip_id', 'Tipo:') !!}
    {!! Form::select('tip_id', $types, null ,['class' => 'form-control', 'required', 'placeholder' => 'Seleccione...']) !!}
</div>

<!-- Publicacion Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lib_publicacion_tipo', 'Publicacion Tipo:') !!}
    {!! Form::number('lib_publicacion_tipo', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Isbn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lib_isbn', 'ISBN:') !!}
    {!! Form::text('lib_isbn', null, ['class' => 'form-control', 'required', 'maxlength' => 250, 'maxlength' => 250]) !!}
</div>

<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lib_titulo', 'Titulo:') !!}
    {!! Form::text('lib_titulo', null, ['class' => 'form-control', 'required', 'maxlength' => 250, 'maxlength' => 250]) !!}
</div>

<!-- Fecha Publicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lib_fecha_publicacion', 'Fecha Publicacion:') !!}
    {!! Form::date('lib_fecha_publicacion', \Carbon\Carbon::now(), ['class' => 'form-control','id'=>'lib_fecha_publicacion']) !!}
</div>

<!-- Edicion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lib_edicion', 'Edicion:') !!}
    {!! Form::number('lib_edicion', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Paginas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lib_paginas', 'Paginas:') !!}
    {!! Form::number('lib_paginas', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Tamano Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lib_tamano', 'Tamano:') !!}
    {!! Form::text('lib_tamano', null, ['class' => 'form-control', 'required', 'maxlength' => 250, 'maxlength' => 250]) !!}
</div>

<!-- Precio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lib_precio', 'Precio:') !!}
    {!! Form::number('lib_precio', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Encuadernacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lib_encuadernacion', 'Encuadernacion:') !!}
    {!! Form::text('lib_encuadernacion', null, ['class' => 'form-control', 'required', 'maxlength' => 250, 'maxlength' => 250]) !!}
</div>

<!-- Soporte Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lib_soporte', 'Soporte:') !!}
    {!! Form::text('lib_soporte', null, ['class' => 'form-control', 'required', 'maxlength' => 250, 'maxlength' => 250]) !!}
</div>

<!-- Idioma Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lib_idioma', 'Idioma:') !!}
    {!! Form::text('lib_idioma', null, ['class' => 'form-control', 'required', 'maxlength' => 250, 'maxlength' => 250]) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lib_estado', 'Estado:') !!}
    {!! Form::select('lib_estado', [1 => 'Disponible', 0 => 'Agotado'], null ,['class' => 'form-control', 'required', 'placeholder' => 'Seleccione...']) !!}
</div>