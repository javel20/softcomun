<?php

namespace Softcomun;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $fillable = [
        'nombre', 'responsable', 'avance', 'fechai', 'fechaf', 'estado', 'user_id', 'proyecto_id',
    ];


    
    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class);
    } 
}
