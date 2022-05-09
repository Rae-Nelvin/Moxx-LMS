<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCourse extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'userid',
        'courseid',
        'progress',
    ];

    /**
     * Get the user that owns the UserCourse
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id', 'userid');
    }

    /**
     * Get the course associated with the UserCourse
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function course(): HasOne
    {
        return $this->hasOne(Course::class, 'id', 'courseid');
    }
}
