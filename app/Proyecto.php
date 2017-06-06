<?php

namespace Softcomun;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    public function trabajador()
    {
        return $this->belongsToMany('hosp\Trabajador');
    }
}
