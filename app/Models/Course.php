<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        'subtitle',
        'coverID',
        'courseTypeID',
        'creatorID',
        'price',
        'discountID',
        'isActive'
    ];

    /**
     * Get the Cover associated with the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Cover(): HasOne
    {
        return $this->hasOne(Photo::class);
    }

    /**
     * Get the CourseType associated with the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function CourseType(): HasOne
    {
        return $this->hasOne(CourseType::class);
    }

    /**
     * Get the User that owns the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the Discount associated with the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Discount(): HasOne
    {
        return $this->hasOne(Discount::class);
    }
}
