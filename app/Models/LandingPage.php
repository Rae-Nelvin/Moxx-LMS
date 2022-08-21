<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class LandingPage extends Model
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
        'types',
        'imageID'
    ];

    /**
     * Get the Image associated with the LandingPage
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Image(): HasOne
    {
        return $this->hasOne(Photos::class);
    }
}
