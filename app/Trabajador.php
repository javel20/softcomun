<?php

namespace Softcomun;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
     public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tipotrabajador()
    {
        return $this->belongsTo(Tipotrabajador::class);
    }

    public function proyecto()
    {
        return $this->belongsToMany('Softcomun\Proyecto');
    }
    

    public function scopeTrabajadors($query, $dato)
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

    public function scopeListaTrabajador($query){

        return $query->leftJoin('users', 'users.trabajador_id', '=', 'trabajadors.id')
                    ->where('users.id', '=' , null)
                    ->select('trabajadors.*', 'users.id as iduser')
                    ->get();

    }
}
