<?php

namespace App\Repositories;

use App\Models\Libros;
use App\Repositories\BaseRepository;

class LibrosRepository extends BaseRepository
{
    protected $fieldSearchable = [
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

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Libros::class;
    }
}
