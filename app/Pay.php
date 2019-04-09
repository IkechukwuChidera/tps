<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
  protected $guarded=['id'];
    protected $table='pays';


    public function user()
    {
        return $this->belongsToOne('App\User');
    }
}
