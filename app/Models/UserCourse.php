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
     * Get the course associated with the UserCourse
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function course(): HasOne
    {
        return $this->hasOne(Course::class, 'id', 'courseID');
    }

    /**
     * Get the lesson associated with the UserCourse
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function lesson(): HasOne
    {
        return $this->hasOne(Lesson::class, 'id', 'progressLessonID');
    }
}
