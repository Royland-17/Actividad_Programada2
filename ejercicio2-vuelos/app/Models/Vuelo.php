<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vuelo extends Model
{
    protected $table = 'vuelos';
    protected $primaryKey = 'numero_vuelo';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['numero_vuelo', 'duracion_estimada', 'compania_id', 'avion_id', 'aeropuerto_origen_iata', 'aeropuerto_destino_iata'];

    public function companiaAerea(): BelongsTo
    {
        return $this->belongsTo(CompaniaAerea::class, 'compania_id');
    }

    public function avion(): BelongsTo
    {
        return $this->belongsTo(Avion::class, 'avion_id');
    }

    public function origen(): BelongsTo
    {
        return $this->belongsTo(Aeropuerto::class, 'aeropuerto_origen_iata', 'codigo_iata');
    }

    public function destino(): BelongsTo
    {
        return $this->belongsTo(Aeropuerto::class, 'aeropuerto_destino_iata', 'codigo_iata');
    }

    /**
     * Instancia de la clase Vuelo (Cumpliendo con el punto 3 del ejercicio 2)
     */
    public static function instanciarVueloEjemplo()
    {
        return new static([
            'numero_vuelo' => 'JL-405',
            'duracion_estimada' => 180, // en minutos
        ]);
    }
}