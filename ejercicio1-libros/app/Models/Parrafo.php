<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Parrafo extends Model
{
    protected $table = 'parrafos';
    protected $fillable = ['orden', 'capitulo_id'];

    public function capitulo(): BelongsTo
    {
        return $this->belongsTo(Capitulo::class);
    }

    public function oraciones(): HasMany
    {
        return $this->hasMany(Oracion::class);
    }
}