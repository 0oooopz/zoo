<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int $id
 * @property int $product_id
 * @property bool $apply_discount
 * @property int $amount_without_discounts_on_line
 * @property int $whole_amount_without_discounts_on_line
 * @property int $percentage_of_additional_accrual
 * @property int $additional_amount_accrual
 * @property int $maximum_percentage_payment_points
 * @property int $maximum_payment_amount_points
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 */
class ProductSovaUds extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'product_sova_uds';

    protected $fillable = [
        'apply_discount',
        'amount_without_discounts_on_line',
        'whole_amount_without_discounts_on_line',
        'percentage_of_additional_accrual',
        'additional_amount_accrual',
        'maximum_percentage_payment_points',
        'maximum_payment_amount_points',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
