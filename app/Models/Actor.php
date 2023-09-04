<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;
    //public $id='actor_id';
    public $primaryKey='actor_id';
    public $table='actor';
    public $fillable=['first_name','last_name'];
    public $timestamps = false;
}
