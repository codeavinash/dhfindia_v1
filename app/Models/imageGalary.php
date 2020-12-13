<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imageGalary extends Model
{
    use HasFactory;

    protected $fillable = ['imageUrl'];
}
