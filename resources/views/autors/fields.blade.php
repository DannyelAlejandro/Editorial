<!-- Aut Apellidos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aut_apellidos', 'Aut Apellidos:') !!}
    {!! Form::text('aut_apellidos', null, ['class' => 'form-control', 'required', 'maxlength' => 250, 'maxlength' => 250]) !!}
</div>

<!-- Aut Nombres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aut_nombres', 'Aut Nombres:') !!}
    {!! Form::text('aut_nombres', null, ['class' => 'form-control', 'required', 'maxlength' => 250, 'maxlength' => 250]) !!}
</div>

<!-- Aut Sitio Web Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aut_sitio_web', 'Aut Sitio Web:') !!}
    {!! Form::text('aut_sitio_web', null, ['class' => 'form-control', 'maxlength' => 250, 'maxlength' => 250]) !!}
</div>