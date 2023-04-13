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
 * @property string $first_name
 * @property string $last_name
 * @property string $patronymic
 * @property integer $individual_taxpayer_number
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 */
class Cashier extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'cashier_information';

    protected $fillable = [
        'money_check_id',
        'first_name',
        'last_name',
        'patronymic',
        'individual_taxpayer_number',
    ];

    public function moneyCheck(): belongsTo
    {
        return $this->belongsTo(MoneyCheck::class);
    }
}
