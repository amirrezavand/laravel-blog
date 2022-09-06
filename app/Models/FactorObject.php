<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FactorObject extends Model
{
    use HasFactory;
    protected $fillable=['factor_id','object_id','price','lu_object_type'];
}
