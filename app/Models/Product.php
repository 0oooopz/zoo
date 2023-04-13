<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property int $money_check_id
 * @property string $ref_key
 * @property string $line_number
 * @property string $nomenclature_key
 * @property string $product_unit_key
 * @property int $quantity
 * @property int $price
 * @property int $sum
 * @property int $percentage_discounts_markups
 * @property int $percent_manual_discounts_markups
 * @property int $amount_discounted
 * @property string $warehouse_key
 * @property string $employee_key
 * @property string $performer_key
 * @property \Carbon\Carbon $date
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 */
class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'money_check_id',
        'ref_key',
        'line_number',
        'nomenclature_key',
        'product_unit_key',
        'quantity',
        'price',
        'sum',
        'percentage_discounts_markups',
        'percent_manual_discounts_markups',
        'amount_discounted',
        'warehouse_key',
        'employee_key',
        'performer_key',
        'date',
    ];

    public function moneyCheck(): belongsTo
    {
        return $this->belongsTo(MoneyCheck::class);
    }

    public function productSovaUds(): hasOne
    {
        return $this->hasOne(ProductSovaUds::class);
    }
}
