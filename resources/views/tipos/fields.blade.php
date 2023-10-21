<!-- Tip Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tip_descripcion', 'Descripcion:') !!}
    {!! Form::text('tip_descripcion', null, ['class' => 'form-control', 'required', 'maxlength' => 250, 'maxlength' => 250]) !!}
</div>

<!-- Tip Siglas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tip_siglas', 'Siglas:') !!}
    {!! Form::text('tip_siglas', null, ['class' => 'form-control', 'required', 'maxlength' => 5, 'maxlength' => 5]) !!}
</div>

<!-- Tip Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tip_estado', 'Estado:') !!}
    {!! Form::select('tip_estado', [1 => 'Activo', 0 => 'Inactivo'], null ,['class' => 'form-control', 'required', 'placeholder' => 'Seleccione...']) !!}
</div>