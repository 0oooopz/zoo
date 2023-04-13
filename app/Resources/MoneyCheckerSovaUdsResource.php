<?php

declare(strict_types=1);

namespace App\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MoneyCheckerSovaUdsResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'                                        => $this->id,
            'discount_rate'                             => $this->discount_rate,
            'client_id'                                 => $this->client_id,
            'operation_id'                              => $this->operation_id,
            'client_uid'                                => $this->client_uid,
            'uparticipant_client_id'                    => $this->uparticipant_client_id,
            'whole_amount_without_discount'             => $this->whole_amount_without_discount,
            'client_name'                               => $this->client_name,
            'use_additional_bonus'                      => $this->use_additional_bonus,
            'cashier'                                   => $this->cashier,
            'cashier_type'                              => $this->cashier_type,
            'discount_code'                             => $this->discount_code,
            'accumulated_points'                        => $this->accumulated_points,
            'operation_registered_on_server'            => $this->operation_registered_on_server,
            'full_server_response_as_result_of_payment' => $this->full_server_response_as_result_of_payment,
            'calculated_interest_discounts'             => $this->calculated_interest_discounts,
            'additional_bonus_calculation'              => $this->additional_bonus_calculation,
            'redeemable_points'                         => $this->redeemable_points,
            'amount_without_discounts'                  => $this->amount_without_discounts,
            'additional_accrual_amount'                 => $this->additional_accrual_amount,
            'money_check_id'                            => $this->money_check_id,
        ];
    }
}
