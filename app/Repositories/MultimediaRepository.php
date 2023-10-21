<?php

namespace App\Repositories;

use App\Models\Multimedia;
use App\Repositories\BaseRepository;

class MultimediaRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'lib_id',
        'mlt_tipo',
        'mlt_multimedia'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Multimedia::class;
    }
}
