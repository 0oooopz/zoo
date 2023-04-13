<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property int $money_check_id
 * @property string $ref_key
 * @property int $line_number
 * @property string $discount_markup_key
 * @property int $sum
 * @property int $key_string
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 */
class Discount extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'money_check_id',
        'ref_key',
        'line_number',
        'discount_markup_key',
        'sum',
        'key_string',
    ];

    public function moneyCheck(): belongsTo
    {
        return $this->belongsTo(MoneyCheck::class);
    }
}