<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Customer
 *
 * @property int $IdCust
 * @property int $IdPIC
 * @property string $NomorCust
 * @property string $NamaSuami
 * @property string $NamaIstri
 * @property string $Lokasi
 * @property string $Status
 * @property string $Tanggal
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereIdCust($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereIdPIC($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereLokasi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereNamaIstri($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereNamaSuami($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereNomorCust($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereTanggal($value)
 * @mixin \Eloquent
 */
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
