<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    protected $guarded = [];

    public function parts(){

        return $this->hasMany(Parts::class);
    }
}
