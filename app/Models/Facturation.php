<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facturation extends Model
{
    use HasFactory;
    protected $fillable = [
        'productID',
        'nom',
        'prix',
        'quantite',
        'code',
        'date_achat',
    ];
}
