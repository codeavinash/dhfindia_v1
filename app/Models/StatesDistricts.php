<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatesDistricts extends Model
{
    use HasFactory;

    public function members()
    {
        return $this->hasMany('App\Models\User', 'dis_id', 'id');
    }
}
