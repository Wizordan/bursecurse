<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    protected $table = 'regions';
    public function banks(){
        return $this->belongsToMany(Banks::class, 'b_r_link');
    }
}
