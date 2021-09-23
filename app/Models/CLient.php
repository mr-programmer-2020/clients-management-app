<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CLient extends Model
{
    protected $fillable = ['name,family_name,job,age'];
    use HasFactory;
}
