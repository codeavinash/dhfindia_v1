<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryStates extends Model
{
    use HasFactory;


    public function districts()
    {
        return $this->hasMany('App\Models\StatesDistricts', 'state_id', 'id');
    }

}
