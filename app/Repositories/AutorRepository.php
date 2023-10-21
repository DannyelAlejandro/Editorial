<?php

namespace App\Repositories;

use App\Models\Autor;
use App\Repositories\BaseRepository;

class AutorRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'aut_apellidos',
        'aut_nombres',
        'aut_sitio_web'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Autor::class;
    }
}
