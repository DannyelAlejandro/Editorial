<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipos extends Model
{
    public $table = 'tipos';
    protected $primaryKey='tip_id';  
    public $timestamps = false;

    public $fillable = [
        'tip_descripcion',
        'tip_siglas',
        'tip_estado'
    ];

    protected $casts = [
        'tip_descripcion' => 'string',
        'tip_siglas' => 'string'
    ];

    public static array $rules = [
        'tip_descripcion' => 'required|string|max:250',
        'tip_siglas' => 'required|string|max:5',
        'tip_estado' => 'required'
    ];

    public function libros(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Libro::class, 'tip_id');
    }
}
