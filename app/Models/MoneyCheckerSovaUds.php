<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property integer $id
 * @property integer $discount_rate
 * @property integer $money_check_id
 * @property string $client_id
 * @property string $operation_id
 * @property string $client_uid
 * @property string $uparticipant_client_id
 * @property string $whole_amount_without_discount
 * @property string $client_name
 * @property boolean $use_additional_bonus
 * @property string $cashier
 * @property string $cashier_type
 * @property string $discount_code
 * @property string $accumulated_points
 * @property boolean $operation_registered_on_server
 * @property string $full_server_response_as_result_of_payment
 * @property boolean $calculated_interest_discounts
 * @property string $additional_bonus_calculation
 * @property string $redeemable_points
 * @property string $amount_without_discounts
 * @property string $additional_accrual_amount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 */
class MoneyCheckerSovaUds extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'money_checker_sova_uds';

    protected $fillable = [
        'money_check_id',
        'discount_rate',
        'client_id',
        'operation_id',
        'client_uid',
        'uparticipant_client_id',
        'whole_amount_without_discount',
        'client_name',
        'use_additional_bonus',
        'cashier',
        'cashier_type',
        'discount_code',
        'accumulated_points',
        'operation_registered_on_server',
        'full_server_response_as_result_of_payment',
        'calculated_interest_discounts',
        'additional_bonus_calculation',
        'redeemable_points',
        'amount_without_discounts',
        'additional_accrual_amount',
    ];

    public function moneyCheck(): belongsTo
    {
        return $this->belongsTo(MoneyCheck::class);
    }
}
