<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    public $table = 'autor';

    protected $primaryKey = 'aut_id';
    public $timestamps = false;

    public $fillable = [
        'aut_apellidos',
        'aut_nombres',
        'aut_sitio_web'
    ];

    protected $casts = [
        'aut_apellidos' => 'string',
        'aut_nombres' => 'string',
        'aut_sitio_web' => 'string'
    ];

    public static array $rules = [
        'aut_apellidos' => 'required|string|max:250',
        'aut_nombres' => 'required|string|max:250',
        'aut_sitio_web' => 'nullable|string|max:250'
    ];

    public function libros(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Libro::class, 'aut_id');
    }
}
