<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $money_check_id
 * @property int $amount
 * @property int $non_cash_amount
 * @property int $correction_amount
 * @property int $credit_amount
 * @property int $bonus_payment_amount
 * @property int $trade_discount_amount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 */
class Payment extends Model
{
    use SoftDeletes, SoftDeletes;

    protected $table = 'payments';

    protected $fillable = [
        'money_check_id',
        'amount',
        'non_cash_amount',
        'correction_amount',
        'credit_amount',
        'bonus_payment_amount',
        'trade_discount_amount',
    ];

    public function moneyCheck(): belongsTo
    {
        return $this->belongsTo(MoneyCheck::class);
    }
}
