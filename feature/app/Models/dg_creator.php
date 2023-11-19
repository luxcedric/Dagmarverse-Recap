<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dg_creator extends Model
{
    use HasFactory;
    protected $primaryKey = 'dg_id';
    public $timestamps = false;
    protected $table = "dg_creator";
}
