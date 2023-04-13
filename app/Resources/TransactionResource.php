<?php

declare(strict_types=1);

namespace App\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'                        => $this->id,
            'movement_type'             => $this->movement_type,
            'payment_type_cashless_key' => $this->payment_type_cashless_key,
            'discounts_type_key'        => $this->discounts_type_key,
            'money_check_id'            => $this->money_check_id,
            'created_at'                => $this->created_at,
            'updated_at'                => $this->updated_at,
        ];
    }
}
