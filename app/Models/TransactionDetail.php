<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TransactionDetail extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'transasctionID',
        'paymentType',
        'discountID',
        'paymentProof',
        'isPaid',
        'acceptorID'
    ];

    /**
     * Get the Transaction that owns the TransactionDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Transaction(): BelongsTo
    {
        return $this->belongsTo(Transaction::class);
    }

    /**
     * Get the Discount associated with the TransactionDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Discount(): HasOne
    {
        return $this->hasOne(Discount::class);
    }

    /**
     * Get the PaymentProof associated with the TransactionDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function PaymentProof(): HasOne
    {
        return $this->hasOne(Photo::class);
    }

    /**
     * Get the Acceptor associated with the TransactionDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Acceptor(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
