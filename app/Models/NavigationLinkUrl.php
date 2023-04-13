<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property int $money_check_id
 * @property string $currency
 * @property string $organization
 * @property string $responsible
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 */
class NavigationLinkUrl extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'navigation_link_url';

    protected $fillable = [
        'money_check_id',
        'currency',
        'organization',
        'responsible',
    ];

    public function moneyCheck(): BelongsTo
    {
        return $this->belongsTo(MoneyCheck::class);
    }
}