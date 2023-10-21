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

    public function getAuthorsAgruped() : array {
        $authors = [];
        $aux = $this->model->all();

        foreach ($aux as $author) 
            $authors[$author->aut_id] = $author->aut_nombres  . ' ' . $author->aut_apellidos;

        return $authors;
    }
}
