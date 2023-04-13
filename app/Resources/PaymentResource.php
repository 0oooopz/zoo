<?php

declare(strict_types=1);

namespace App\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PaymentResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'                    => $this->id,
            'money_check_id'        => $this->money_check_id,
            'amount'                => $this->amount,
            'non_cash_amount'       => $this->non_cash_amount,
            'correction_amount'     => $this->correction_amount,
            'credit_amount'         => $this->credit_amount,
            'bonus_payment_amount'  => $this->bonus_payment_amount,
            'trade_discount_amount' => $this->trade_discount_amount,
            'created_at'            => $this->created_at,
            'updated_at'            => $this->updated_at,
        ];
    }
}
