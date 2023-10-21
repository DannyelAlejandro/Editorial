<?php

namespace App\Repositories;

use App\Models\Editorial;
use App\Repositories\BaseRepository;

class EditorialRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'edi_nombre',
        'edi_ruc',
        'edi_direccion',
        'edi_telefono',
        'edi_celular',
        'edi_pais',
        'edi_provincia',
        'edi_ciudad',
        'edi_codigo_postal',
        'edi_sitio_web',
        'edi_instagram',
        'edi_facebook'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Editorial::class;
    }
}
