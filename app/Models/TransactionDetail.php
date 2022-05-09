<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'transactionID',
        'paymentType',
        'discountID',
        'paymentProof',
        'is_paid',
        'accepted_by',
    ];

    /**
     * Get the Transaction that owns the TransactionDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Transaction(): BelongsTo
    {
        return $this->belongsTo(Transaction::class, 'id', 'transactionID');
    }

    /**
     * Get the paymentProof associated with the TransactionDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paymentProof(): HasOne
    {
        return $this->hasOne(Photo::class,'id','paymentProof');
    }

    /**
     * Get the accepted_by associated with the TransactionDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function accepted_by(): HasOne
    {
        return $this->hasOne(Admin::class,'id','accepted_by');
    }

    /**
     * Get the discount associated with the TransactionDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function discount(): HasOne
    {
        return $this->hasOne(Discount::class, 'id', 'discountID');
    }
}
