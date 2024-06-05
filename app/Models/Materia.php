<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    protected $table = 'materias';

    protected $primaryKey = 'id_materia';

    protected $fillable = [
        'nombre',
    ];

    public function lecciones()
    {
        return $this->hasMany(Leccion::class, 'id_materia', 'id_materia');
    }
}
