<?php

declare(strict_types=1);

namespace App\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NavigationLinkUrlResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'money_check_id' => $this->money_check_id,
            'currency' => $this->currency,
            'organization' => $this->organization,
            'responsible' => $this->responsible,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
