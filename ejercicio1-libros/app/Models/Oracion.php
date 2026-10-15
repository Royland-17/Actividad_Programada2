<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Oracion extends Model
{
    protected $table = 'oraciones';
    protected $fillable = ['secuencia', 'parrafo_id'];

    public function parrafo(): BelongsTo
    {
        return $this->belongsTo(Parrafo::class);
    }

    public function palabras(): HasMany
    {
        return $this->hasMany(Palabra::class);
    }
}