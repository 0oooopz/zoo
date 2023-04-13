<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property integer $id
 * @property integer $money_check_id
 * @property string $movement_type
 * @property string $payment_type_cashless_key
 * @property string $discounts_type_key
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 */
class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'transactions';

    protected $fillable = [
        'money_check_id',
        'movement_type',
        'payment_type_cashless_key',
        'discounts_type_key',
    ];

    public function moneyCheck(): belongsTo
    {
        return $this->belongsTo(MoneyCheck::class);
    }
}
