<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    public $table = 'editorial';

    protected $primaryKey = 'edi_id';
    public $timestamps = false;

    public $fillable = [
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

    protected $casts = [
        'edi_nombre' => 'string',
        'edi_ruc' => 'string',
        'edi_direccion' => 'string',
        'edi_telefono' => 'string',
        'edi_celular' => 'string',
        'edi_pais' => 'string',
        'edi_provincia' => 'string',
        'edi_ciudad' => 'string',
        'edi_codigo_postal' => 'string',
        'edi_sitio_web' => 'string',
        'edi_instagram' => 'string',
        'edi_facebook' => 'string'
    ];

    public static array $rules = [
        'edi_nombre' => 'required|string|max:250',
        'edi_ruc' => 'nullable|string|max:250',
        'edi_direccion' => 'nullable|string|max:250',
        'edi_telefono' => 'nullable|string|max:250',
        'edi_celular' => 'nullable|string|max:250',
        'edi_pais' => 'nullable|string|max:250',
        'edi_provincia' => 'nullable|string|max:250',
        'edi_ciudad' => 'nullable|string|max:250',
        'edi_codigo_postal' => 'nullable|string|max:250',
        'edi_sitio_web' => 'nullable|string|max:250',
        'edi_instagram' => 'nullable|string|max:250',
        'edi_facebook' => 'nullable|string|max:250',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function libros(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Libro::class, 'edi_id');
    }
}
