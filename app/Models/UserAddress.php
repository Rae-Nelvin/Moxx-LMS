<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserAddress extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'user_addresses';

    protected $fillable = [
        'userID',
        'street_name',
        'province',
        'city',
        'postal_code'
    ];

    /**
     * Get the user that owns the UserAddress
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id', 'userID');
    }
}
