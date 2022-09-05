<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $fillable = [
        'nume',
       'prenume',
        'email',
       'adresa',
        'telefon',
        'cod_postal',
       'oras',
        'status',
        'mesaj',
       'numar_comanda',
    ];
}
