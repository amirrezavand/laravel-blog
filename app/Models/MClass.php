<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MClass extends Model
{
    use HasFactory;
    protected $table='classes';
    protected $fillable=['description','started_at'];
}
