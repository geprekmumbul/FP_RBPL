<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PIC
 *
 * @property int $IdPIC
 * @property string $NamaPIC
 * @property string $NomorPIC
 * @method static \Illuminate\Database\Eloquent\Builder|PIC newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PIC newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PIC query()
 * @method static \Illuminate\Database\Eloquent\Builder|PIC whereIdPIC($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PIC whereNamaPIC($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PIC whereNomorPIC($value)
 * @mixin \Eloquent
 */
class PIC extends Model
{
    use HasFactory;
    protected $table = 'PIC';
    protected $primaryKey = 'IdPIC';
    public $timestamps = false;
    protected $fillable = [
        'NamaPIC',
        'NomorPIC'
    ];
}
