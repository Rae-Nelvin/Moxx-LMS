<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LessonGroup extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'classID',
        'title'
    ];

    /**
     * Get the Course that owns the LessonGroup
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
