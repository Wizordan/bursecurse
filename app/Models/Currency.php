<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $table = 'currency';
    public function banks(){
        return $this->belongsToMany(Banks::class, 'b_c_link');
    }

}
