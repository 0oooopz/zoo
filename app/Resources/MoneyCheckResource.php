<?php

declare(strict_types=1);

namespace App\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MoneyCheckResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'                                => $this->id,
            'ref_key'                           => $this->ref_key,
            'data_version'                      => $this->data_version,
            'number'                            => $this->number,
            'posted'                            => $this->posted,
            'deleted'                           => $this->deleted,
            'date'                              => $this->date,
            'currency_key'                      => $this->currency_key,
            'discount_card_key'                 => $this->discount_card_key,
            'bid'                               => $this->bid,
            'card_key'                          => $this->card_key,
            'created_at'                        => $this->created_at,
            'updated_at'                        => $this->updated_at,
            'authorization_code'                => $this->authorization_code,
            'comment'                           => $this->comment,
            'multiplicity'                      => $this->multiplicity,
            'course'                            => $this->course,
            'mdlpid'                            => $this->mdlpid,
            'direction_movement'                => $this->direction_movement,
            'do_not_transfer_cashier'           => $this->do_not_transfer_cashier,
            'number_payment_card'               => $this->number_payment_card,
            'receipt_number'                    => $this->receipt_number,
            'object'                            => $this->object,
            'object_type'                       => $this->object_type,
            'round_total_cheque'                => $this->round_total_cheque,
            'organization_key'                  => $this->organization_key,
            'base'                              => $this->base,
            'base_type'                         => $this->base_type,
            'responsible_key'                   => $this->responsible_key,
            'send_email'                        => $this->send_email,
            'send_sms'                          => $this->send_sms,
            'sub_report'                        => $this->sub_report,
            'department_key'                    => $this->department_key,
            'percent_manual_discounts_markups'  => $this->percent_manual_discounts_markups,
            'change'                            => $this->change,
            'taxation_system'                   => $this->taxation_system,
            'discount'                          => $this->discount,
            'rounding_method_total_check'       => $this->rounding_method_total_check,
            'reference_number'                  => $this->reference_number,
            'reference_number_foundations'      => $this->reference_number_foundations,
            'delete_between_organization'       => $this->delete_between_organization,
            'delete_organization_recipient_key' => $this->delete_organization_recipient_key,
            'uid_payment'                       => $this->uid_payment,
            'uid_payment_1c'                    => $this->uid_payment_1c,
            'specified_email'                   => $this->specified_email,
            'specified_phone'                   => $this->specified_phone,
            'fiscal_check_number'               => $this->fiscal_check_number,
            'electronically'                    => $this->electronically,
            'invoice_key'                       => $this->invoice_key,
            'verified'                          => $this->verified,
            'money_checker_sova_uds'            => new MoneyCheckerSovaUdsResource($this->whenLoaded('moneyCheckerSovaUds')),
            'transaction'                       => new TransactionResource($this->whenLoaded('transaction')),
            'financial_account'                 => new FinancialAccountResource($this->whenLoaded('financialAccount')),
            'cashier'                           => new CashierResource($this->whenLoaded('cashier')),
            'payment'                           => new PaymentResource($this->whenLoaded('payment')),
            'navigation_link_url'               => new NavigationLinkUrlResource($this->whenLoaded('navigationLinkUrl')),
            'discounts'                         => DiscountResource::collection($this->whenLoaded('discounts')),
            'products'                          => ProductResource::collection($this->whenLoaded('products')),
        ];
    }
}
