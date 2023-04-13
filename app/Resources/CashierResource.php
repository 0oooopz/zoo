<?php

declare(strict_types=1);

namespace App\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CashierResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'                         => $this->id,
            'first_name'                 => $this->first_name,
            'last_name'                  => $this->last_name,
            'patronymic'                 => $this->patronymic,
            'individual_taxpayer_number' => $this->individual_taxpayer_number,
            'created_at'                 => $this->created_at,
            'updated_at'                 => $this->updated_at,
        ];
    }
}
