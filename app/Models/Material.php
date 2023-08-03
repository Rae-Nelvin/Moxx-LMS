<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Material extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'materials';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'materialGroupID',
        'title',
        'description',
        'file'
    ];

    /**
     * Get the materialGroup that owns the Material
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function materialGroup(): BelongsTo
    {
        return $this->belongsTo(MaterialGroup::class, 'materialGroupID', 'id');
    }
}
