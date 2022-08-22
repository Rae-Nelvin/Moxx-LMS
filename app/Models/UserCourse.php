<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserCourse extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'userID',
        'courseID',
        'startLessonID',
        'endLessonID',
        'progressLessonID'
    ];

    /**
     * Get the Users that owns the UserCourse
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the Courses associated with the UserCourse
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Courses(): HasOne
    {
        return $this->hasOne(Course::class);
    }

    /**
     * Get the StartLessonID associated with the UserCourse
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function StartLessonID(): HasOne
    {
        return $this->hasOne(Lesson::class);
    }

    /**
     * Get the EndLessonID associated with the UserCourse
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function EndLessonID(): HasOne
    {
        return $this->hasOne(Lesson::class);
    }

    /**
     * Get the ProgressLessonID associated with the UserCourse
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ProgressLessonID(): HasOne
    {
        return $this->hasOne(Lesson::class);
    }
}
