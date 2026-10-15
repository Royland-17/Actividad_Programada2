<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Aeropuerto extends Model
{
    protected $table = 'aeropuertos';
    protected $primaryKey = 'codigo_iata';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['codigo_iata', 'nombre', 'ciudad'];

    public function vuelosSalida(): HasMany
    {
        return $this->hasMany(Vuelo::class, 'aeropuerto_origen_iata', 'codigo_iata');
    }

    public function vuelosLlegada(): HasMany
    {
        return $this->hasMany(Vuelo::class, 'aeropuerto_destino_iata', 'codigo_iata');
    }
}