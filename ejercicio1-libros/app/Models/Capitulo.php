<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Capitulo extends Model
{
    protected $table = 'capitulos';
    protected $fillable = ['numero', 'titulo', 'libro_id'];

    public function libro(): BelongsTo
    {
        return $this->belongsTo(Libro::class);
    }

    public function parrafos(): HasMany
    {
        return $this->hasMany(Parrafo::class);
    }
}