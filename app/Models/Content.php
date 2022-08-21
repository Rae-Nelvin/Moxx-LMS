<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Content extends Model
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
        'description',
        'courseID',
        'coverID',
        'externalLinks',
        'creatorID'
    ];

    /**
     * Get the Course that owns the Content
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    /**
     * Get the Photo associated with the Content
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Photo(): HasOne
    {
        return $this->hasOne(Photo::class);
    }

    /**
     * Get the User that owns the Content
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
