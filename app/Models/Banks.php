<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Banks extends Model
{

    protected $table = 'banks';

    public function currency(){
        return $this->belongsToMany(Currency::class, 'b_c_link');
    }
    public function regions(){
        return $this->belongsToMany(Regions::class, 'b_r_link');
    }

}
