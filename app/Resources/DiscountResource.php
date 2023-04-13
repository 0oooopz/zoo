<?php

declare(strict_types=1);

namespace App\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DiscountResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'                  => $this->id,
            'money_check_id'      => $this->money_check_id,
            'ref_key'             => $this->ref_key,
            'line_number'         => $this->line_number,
            'discount_markup_key' => $this->discount_markup_key,
            'sum'                 => $this->sum,
            'key_string'          => $this->key_string,
            'created_at'          => $this->created_at,
            'updated_at'          => $this->updated_at,
        ];
    }
}
