<?php

declare(strict_types=1);

namespace App\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FinancialAccountResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'                 => $this->id,
            'financial_account'  => $this->financial_account,
            'type'               => $this->type,
            'account_credit_key' => $this->account_credit_key,
            'discount_card_key'  => $this->discount_card_key,
            'created_at'         => $this->created_at,
            'updated_at'         => $this->updated_at,
        ];
    }
}
