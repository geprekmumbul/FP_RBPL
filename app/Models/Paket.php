<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    protected $table = 'Paket';
    protected $primaryKey = 'IdPaket';
    public $timestamps = false;
    protected $fillable = [
        'Layanan',
        'NamaPaket',
        'Deskripsi',
        'Harga',
        'Rating'
    ];
}
