<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parts extends Model
{
    protected $guarded = [];
    //

    public function order(){
        return $this->belongsTo(Orders::class);
    }
}
