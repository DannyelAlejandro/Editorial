<!-- Apellidos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aut_apellidos', 'Apellidos:') !!}
    {!! Form::text('aut_apellidos', null, ['class' => 'form-control', 'required', 'maxlength' => 250, 'maxlength' => 250]) !!}
</div>

<!-- Nombres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aut_nombres', 'Nombres:') !!}
    {!! Form::text('aut_nombres', null, ['class' => 'form-control', 'required', 'maxlength' => 250, 'maxlength' => 250]) !!}
</div>

<!-- Sitio Web Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aut_sitio_web', 'Sitio Web:') !!}
    {!! Form::text('aut_sitio_web', null, ['class' => 'form-control', 'maxlength' => 250, 'maxlength' => 250]) !!}
</div>