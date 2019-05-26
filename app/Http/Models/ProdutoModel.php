<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model as Model;

class ProdutoModel extends Model
{
    protected $table = 'produto';
    public $timestamps = false;
    protected $primaryKey = 'idprod';


}
