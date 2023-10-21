<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model
{
    public $table = 'multimedia';

    protected $primaryKey = 'mlt_id';

    public $fillable = [
        'lib_id',
        'mlt_tipo',
        'mlt_multimedia'
    ];

    protected $casts = [
        'mlt_tipo' => 'string',
        'mlt_multimedia' => 'string'
    ];

    public static array $rules = [
        'lib_id' => 'required',
        'mlt_tipo' => 'required|string|max:250',
        'mlt_multimedia' => 'required|string|max:250'
    ];

    public function lib(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Libro::class, 'lib_id');
    }
}
