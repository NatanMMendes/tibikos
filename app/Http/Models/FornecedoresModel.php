<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model as Model;

class FornecedoresModel extends Model
{
    protected $table = 'fornecedor';
    public $timestamps = false;
    protected $primaryKey = 'idforn';


}
