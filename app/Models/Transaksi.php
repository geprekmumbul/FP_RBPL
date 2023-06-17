<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Transaksi
 *
 * @property int $IdTrsk
 * @property int $IdCust
 * @property string $Jenis
 * @property string $Tanggal
 * @property int $Nominal
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi query()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereIdCust($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereIdTrsk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereJenis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereNominal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereTanggal($value)
 * @mixin \Eloquent
 */
class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'Transaksi';
    protected $primaryKey = 'IdTrsk';
    public $timestamps = false;
    protected $fillable = [
        'IdCust',
        'Jenis',
        'Tanggal',
        'Nominal'
    ];
}
