<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;

    protected $table = 'actividades';

    protected $primaryKey = 'id_actividad';

    protected $fillable = [
        'id_leccion',
        'tipo_actividad',
        'contenido',
    ];

    public function leccion()
    {
        return $this->belongsTo(Leccion::class, 'id_leccion', 'id_leccion');
    }
}
