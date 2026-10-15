<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CompaniaAerea extends Model
{
    protected $table = 'companias_aereas';
    protected $fillable = ['id_compania', 'nombre'];

    public function aviones(): HasMany
    {
        return $this->hasMany(Avion::class, 'compania_id');
    }

    public function vuelos(): HasMany
    {
        return $this->hasMany(Vuelo::class, 'compania_id');
    }
}