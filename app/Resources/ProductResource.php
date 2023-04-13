<?php

declare(strict_types=1);

namespace App\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'                               => $this->id,
            'money_check_id'                   => $this->money_check_id,
            'ref_key'                          => $this->ref_key,
            'line_number'                      => $this->line_number,
            'nomenclature_key'                 => $this->nomenclature_key,
            'product_unit_key'                 => $this->product_unit_key,
            'quantity'                         => $this->quantity,
            'price'                            => $this->price,
            'sum'                              => $this->sum,
            'percentage_discounts_markups'     => $this->percentage_discounts_markups,
            'percent_manual_discounts_markups' => $this->percent_manual_discounts_markups,
            'amount_discounted'                => $this->amount_discounted,
            'warehouse_key'                    => $this->warehouse_key,
            'employee_key'                     => $this->employee_key,
            'performer_key'                    => $this->performer_key,
            'date'                             => $this->date,
            'created_at'                       => $this->created_at,
            'updated_at'                       => $this->updated_at,
        ];
    }
}
