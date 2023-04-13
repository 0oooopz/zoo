<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int $id
 * @property int $money_check_id
 * @property string $financial_account
 * @property string $type
 * @property string $account_credit_key
 * @property string $discount_card_key
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 */
class FinancialAccount extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'financial_accounts';

    protected $fillable = [
        'money_check_id',
        'financial_account',
        'type',
        'account_credit_key',
        'discount_card_key',
    ];

    public function moneyCheck(): belongsTo
    {
        return $this->belongsTo(MoneyCheck::class);
    }
}
