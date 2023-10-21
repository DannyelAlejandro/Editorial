<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libros extends Model
{
    public $table = 'libros';

    protected $primaryKey = 'lib_id';

    public $fillable = [
        'aut_id',
        'edi_id',
        'usu_id',
        'tip_id',
        'lib_publicacion_tipo',
        'lib_isbn',
        'lib_titulo',
        'lib_fecha_publicacion',
        'lib_edicion',
        'lib_paginas',
        'lib_tamano',
        'lib_precio',
        'lib_encuadernacion',
        'lib_soporte',
        'lib_idioma',
        'lib_estado'
    ];

    protected $casts = [
        'lib_isbn' => 'string',
        'lib_titulo' => 'string',
        'lib_fecha_publicacion' => 'date',
        'lib_tamano' => 'string',
        'lib_precio' => 'float',
        'lib_encuadernacion' => 'string',
        'lib_soporte' => 'string',
        'lib_idioma' => 'string'
    ];

    public static array $rules = [
        'aut_id' => 'required',
        'edi_id' => 'required',
        'usu_id' => 'required',
        'tip_id' => 'required',
        'lib_publicacion_tipo' => 'required',
        'lib_isbn' => 'required|string|max:250',
        'lib_titulo' => 'required|string|max:250',
        'lib_fecha_publicacion' => 'required',
        'lib_edicion' => 'required',
        'lib_paginas' => 'required',
        'lib_tamano' => 'required|string|max:250',
        'lib_precio' => 'required|numeric',
        'lib_encuadernacion' => 'required|string|max:250',
        'lib_soporte' => 'required|string|max:250',
        'lib_idioma' => 'required|string|max:250',
        'lib_estado' => 'required'
    ];

    public function aut(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Autor::class, 'aut_id');
    }

    public function edi(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Editorial::class, 'edi_id');
    }

    public function tip(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Tipo::class, 'tip_id');
    }

    public function usu(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'usu_id');
    }

    public function multimedia(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Multimedia::class, 'lib_id');
    }
}
