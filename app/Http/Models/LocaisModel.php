<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model as Model;

class LocaisModel extends Model
{
    protected $table = 'localidade';
    public $timestamps = false;
    protected $primaryKey = 'idloc';



}
