<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendeurs extends Model
{
    use HasFactory;
    protected $table = 'vendeurs';
    protected $fillable = ['NomV', 'PrénomV', 'EmailV', 'mot_de_passV'];
}

