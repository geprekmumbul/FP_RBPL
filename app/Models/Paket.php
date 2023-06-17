<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Paket
 *
 * @property int $IdPaket
 * @property string $Layanan
 * @property string $NamaPaket
 * @property string $Deskripsi
 * @property int $Harga
 * @property float $Rating
 * @method static \Illuminate\Database\Eloquent\Builder|Paket newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Paket newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Paket query()
 * @method static \Illuminate\Database\Eloquent\Builder|Paket whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paket whereHarga($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paket whereIdPaket($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paket whereLayanan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paket whereNamaPaket($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paket whereRating($value)
 * @mixin \Eloquent
 */
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
