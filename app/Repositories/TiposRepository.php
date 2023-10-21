<?php

namespace App\Repositories;

use App\Models\Tipos;
use App\Repositories\BaseRepository;

class TiposRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'tip_descripcion',
        'tip_siglas',
        'tip_estado'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Tipos::class;
    }

    public function getTypesAgruped() : array {
        $types = [];
        $aux = $this->model->where('tip_estado', 1)->get();

        foreach ($aux as $type) 
            $types[$type->tip_id] = $type->tip_siglas;

        return $types;
        
    }
}
