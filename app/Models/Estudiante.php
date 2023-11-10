<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $table = 'estudiantes';

    protected $primaryKey = 'id_estudiante';

    protected $fillable = [
        'nombre',
        'edad',
        'id_curso',
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'id_curso');
    }
}
