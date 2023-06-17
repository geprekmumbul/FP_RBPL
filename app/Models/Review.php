<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
