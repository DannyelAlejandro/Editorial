<!-- Tip Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tip_descripcion', 'Tip Descripcion:') !!}
    {!! Form::text('tip_descripcion', null, ['class' => 'form-control', 'required', 'maxlength' => 250, 'maxlength' => 250]) !!}
</div>

<!-- Tip Siglas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tip_siglas', 'Tip Siglas:') !!}
    {!! Form::text('tip_siglas', null, ['class' => 'form-control', 'required', 'maxlength' => 5, 'maxlength' => 5]) !!}
</div>

<!-- Tip Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tip_estado', 'Tip Estado:') !!}
    {!! Form::number('tip_estado', null, ['class' => 'form-control', 'required']) !!}
</div>