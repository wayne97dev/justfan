<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    public const REQUESTED_STATUS = 'requested';
    public const REJECTED_STATUS = 'rejected';
    public const APPROVED_STATUS = 'approved';
    public const STRIPE_CONNECT_METHOD = 'Stripe Connect';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'amount', 'status', 'message', 'processed', 'payment_identifier', 'payment_method', 'fee', 'stripe_payout_id', 'stripe_transfer_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
    ];

    /*
     * Relationships
     */

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
