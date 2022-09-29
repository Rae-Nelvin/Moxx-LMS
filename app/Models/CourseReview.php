<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CourseReview extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'userID',
        'courseID',
        'reviews',
        'stars',
    ];

    /**
     * Get the Users that owns the CourseReview
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the Course associated with the CourseReview
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Course(): HasOne
    {
        return $this->hasOne(Course::class);
    }
}
