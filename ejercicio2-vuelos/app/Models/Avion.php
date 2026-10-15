<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Avion extends Model
{
    protected $table = 'aviones';
    protected $fillable = ['id_avion', 'modelo', 'capacidad', 'compania_id'];

    public function companiaAerea(): BelongsTo
    {
        return $this->belongsTo(CompaniaAerea::class, 'compania_id');
    }

    public function vuelos(): HasMany
    {
        return $this->hasMany(Vuelo::class, 'avion_id');
    }
}