<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Municipio;


class Comuna extends Model
{
    
    protected $table = 'tb_comuna';
    protected $primaryKey = 'comu_codi';
    public $timestamps = false;

    
}


    
    

