<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Transaction extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'userID',
        'courseID',
        'token',
        'discountID',
        'acceptorID'
    ];

    /**
     * Get the Users that owns the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the Courses associated with the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Courses(): HasOne
    {
        return $this->hasOne(Course::class);
    }

    /**
     * Get the Discounts associated with the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Discounts(): HasOne
    {
        return $this->hasOne(Discount::class);
    }

    /**
     * Get the Acceptor associated with the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Acceptor(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
