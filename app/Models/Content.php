<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'courseid',
        'cover',
        'externalLinks',
        'created_by'
    ];

    /**
     * Get the admin associated with the Content
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function admin(): HasOne
    {
        return $this->hasOne(Admin::class, 'id', 'created_by');
    }

    /**
     * Get the cover associated with the Content
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cover(): HasOne
    {
        return $this->hasOne(Cover::class, 'id', 'cover');
    }
    
    /**
     * Get the course that owns the Content
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class, 'id', 'courseid');
    }
}
