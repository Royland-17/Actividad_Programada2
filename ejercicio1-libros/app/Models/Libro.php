<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Libro extends Model
{
    protected $table = 'libros';
    protected $fillable = ['titulo', 'isbn'];

    public function capitulos(): HasMany
    {
        return $this->hasMany(Capitulo::class);
    }
}