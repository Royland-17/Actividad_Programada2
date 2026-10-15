<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Palabra extends Model
{
    protected $table = 'palabras';
    protected $fillable = ['texto', 'oracion_id'];

    public function oracion(): BelongsTo
    {
        return $this->belongsTo(Oracion::class);
    }
}