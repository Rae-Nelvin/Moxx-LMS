<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Course extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'coverID',
        'courseTypeID',
        'creatorID',
        'price',
        'discountID',
        'isActive'
    ];

    /**
     * Get the user associated with the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'creatorID');
    }

    /**
     * Get the courseType associated with the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function courseType(): HasOne
    {
        return $this->hasOne(CourseType::class, 'id', 'courseTypeID');
    }

    /**
     * Get all of the lessonGroup for the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lessonGroup(): HasMany
    {
        return $this->hasMany(LessonGroup::class, 'courseID', 'id');
    }
}
