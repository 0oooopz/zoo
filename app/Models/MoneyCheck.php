<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int $id
 * @property string $ref_key
 * @property string $data_version
 * @property string $number
 * @property boolean $posted
 * @property boolean $deleted
 * @property Carbon $date
 * @property string $currency_key
 * @property string $discount_card_key
 * @property string $bid
 * @property string $card_key
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 * @property string $authorization_code
 * @property string $comment
 * @property int $multiplicity
 * @property int $course
 * @property string $mdlpid
 * @property string $direction_movement
 * @property bool $do_not_transfer_cashier
 * @property string $number_payment_card
 * @property string $receipt_number
 * @property string $object
 * @property string $object_type
 * @property bool $round_total_cheque
 * @property string $organization_key
 * @property string $base
 * @property string $base_type
 * @property string $responsible_key
 * @property bool $send_email
 * @property bool $send_sms
 * @property string $sub_report
 * @property string $department_key
 * @property int $percent_manual_discounts_markups
 * @property int $change
 * @property string $taxation_system
 * @property int $discount
 * @property int $rounding_method_total_check
 * @property string $reference_number
 * @property string $reference_number_foundations
 * @property int $delete_between_organization
 * @property string $delete_organization_recipient_key
 * @property string $uid_payment
 * @property string $uid_payment_1c
 * @property string $specified_email
 * @property string $specified_phone
 * @property string $fiscal_check_number
 * @property bool $electronically
 * @property string $invoice_key
 * @property bool $verified
 */
class MoneyCheck extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'money_check';

    protected $fillable = [
        'ref_key',
        'data_version',
        'number',
        'posted',
        'deleted',
        'date',
        'currency_key',
        'discount_card_key',
        'bid',
        'card_key',
        'authorization_code',
        'comment',
        'multiplicity',
        'course',
        'mdlpid',
        'direction_movement',
        'do_not_transfer_cashier',
        'number_payment_card',
        'receipt_number',
        'object',
        'object_type',
        'round_total_cheque',
        'organization_key',
        'base',
        'base_type',
        'responsible_key',
        'send_email',
        'send_sms',
        'sub_report',
        'department_key',
        'percent_manual_discounts_markups',
        'change',
        'taxation_system',
        'discount',
        'rounding_method_total_check',
        'reference_number',
        'reference_number_foundations',
        'delete_between_organization',
        'delete_organization_recipient_key',
        'uid_payment',
        'uid_payment_1c',
        'specified_email',
        'specified_phone',
        'fiscal_check_number',
        'electronically',
        'invoice_key',
        'verified'
    ];

    public function moneyCheckerSovaUds(): HasOne
    {
        return $this->hasOne(MoneyCheckerSovaUds::class);
    }

    public function transaction(): HasOne
    {
        return $this->hasOne(Transaction::class);
    }

    public function financialAccount(): HasOne
    {
        return $this->hasOne(FinancialAccount::class);
    }

    public function cashier(): HasOne
    {
        return $this->hasOne(Cashier::class);
    }

    public function payment(): HasOne
    {
        return $this->hasOne(Payment::class);
    }

    public function navigationLinkUrl(): HasOne
    {
        return $this->hasOne(NavigationLinkUrl::class);
    }

    public function discounts(): hasMany
    {
        return $this->hasMany(Discount::class);
    }

    public function products(): hasMany
    {
        return $this->hasMany(Product::class);
    }
}
