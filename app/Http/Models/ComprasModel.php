<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model as Model;

class ComprasModel extends Model
{
    protected $table = 'pedido_compra';
    public $timestamps = false;
    protected $primaryKey = 'idpc';


}
