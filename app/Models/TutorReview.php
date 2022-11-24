<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TutorReview extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'userID',
        'mentorID',
        'reviews',
        'stars',
    ];

    /**
     * Get the user associated with the TutorReview
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'userID');
    }

    /**
     * Get the mentor associated with the TutorReview
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mentor(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'mentorID');
    }
}
