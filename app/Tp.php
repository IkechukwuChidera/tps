<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tp extends Model
{
  protected $guarded=['id'];
    protected $table='tps';


    public function user()
    {
        return $this->belongsToOne('App\User');
    }
}
