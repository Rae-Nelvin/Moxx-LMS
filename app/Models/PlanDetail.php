<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PlanDetail extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'planID',
        'featureID'
    ];

    /**
     * Get the feature associated with the PlanDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function feature(): HasOne
    {
        return $this->hasOne(PlanFeature::class, 'id', 'featureID');
    }
}
