<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Review
 *
 * @property int $IdReview
 * @property int $IdPaket
 * @property int $IdCust
 * @property int $Rating
 * @property string $Feedback
 * @method static \Illuminate\Database\Eloquent\Builder|Review newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Review newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Review query()
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereFeedback($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereIdCust($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereIdPaket($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereIdReview($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereRating($value)
 * @mixin \Eloquent
 */
class Review extends Model
{
    use HasFactory;
    protected $table = 'Review';
    protected $primaryKey = 'IdReview';
    public $timestamps = false;
    protected $fillable = [
        'IdPaket',
        'IdCust',
        'Rating',
        'Feedback'
    ];
}
