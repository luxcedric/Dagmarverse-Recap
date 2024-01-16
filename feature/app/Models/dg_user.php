<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dg_user extends Model
{
    use HasFactory;
    public $primaryKey = 'dg_UUID';
    public $timestamps = false;
    public $table = "dg_user";
    
}
