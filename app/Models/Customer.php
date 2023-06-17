<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'Customer';
    protected $primaryKey = 'IdCust';
    public $timestamps = false;
    protected $fillable = [
        'NomorCust',
        'NamaSuami',
        'NamaIstri',
        'Tanggal',
        'Lokasi',
        'Status',
        'IdPIC',
    ];
}
