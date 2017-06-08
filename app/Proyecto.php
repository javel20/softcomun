<?php

namespace Softcomun;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    public function trabajador()
    {
        return $this->belongsToMany('Softcomun\Trabajador');
    }


    public function scopeProyectos($query, $dato)
    {
        return $query->join('tipotrabajadors', 'trabajadors.tipotrabajador_id', '=' ,'tipotrabajadors.id')
                    ->where('trabajadors.nombre','LIKE', "%$dato->buscar%")
                    ->orWhere('trabajadors.apellidopaterno','LIKE', "%$dato->buscar%")
                    ->orWhere('trabajadors.apellidomaterno','LIKE', "%$dato->buscar%")
                    ->orWhere('trabajadors.dni','LIKE', "%$dato->buscar%")
                    ->orWhere('trabajadors.estado','LIKE', "%$dato->buscar%")
                    ->orWhere('tipotrabajadors.nombre','LIKE', "%$dato->buscar%")
                    ->select('trabajadors.*', 'tipotrabajadors.nombre as nombrett')
                    ->paginate(7);

    }

}


