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
}
