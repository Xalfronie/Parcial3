<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leccion extends Model
{
    use HasFactory;

    protected $table = 'lecciones';

    protected $primaryKey = 'id_leccion';

    protected $fillable = [
        'id_materia',
        'titulo',
        'descripcion',
    ];

    public function materia()
    {
        return $this->belongsTo(Materia::class, 'id_materia', 'id_materia');
    }

    public function actividades()
    {
        return $this->hasMany(Actividad::class, 'id_leccion', 'id_leccion');
    }
}
