<?php

declare(strict_types=1);

namespace App\Http\Adapters;

use App\Models\Product;
use App\Models\ProductSovaUds;
use App\Models\MoneyCheckerSovaUds;
use App\Models\Cashier;
use App\Models\Discount;
use App\Models\MoneyCheck;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Models\FinancialAccount;
use App\Models\NavigationLinkUrl;

class MoneyCheckAdapter
{
    public function __construct(
        private readonly array $data
    ) {
    }

    public function adaptMoneyCheck(): MoneyCheck
    {
        $moneyCheck = new MoneyCheck();

        $moneyCheck->ref_key = $this->data['Ref_Key'];
        $moneyCheck->data_version = $this->data['DataVersion'];
        $moneyCheck->deleted = $this->data['DeletionMark'];
        $moneyCheck->number = $this->data['Number'];
        $moneyCheck->posted = $this->data['Posted'];
        $moneyCheck->date = Carbon::parse($this->data['Date']);
        $moneyCheck->currency_key = $this->data['Валюта_Key'];
        $moneyCheck->discount_card_key = $this->data['ДисконтнаяКарточка_Key'];
        $moneyCheck->bid = $this->data['Заявка_Key'];
        $moneyCheck->card_key = $this->data['Карточка_Key'];
        $moneyCheck->authorization_code = $this->data['КодАвторизации'];
        $moneyCheck->comment = $this->data['Комментарий'];
        $moneyCheck->multiplicity = $this->data['Кратность'];
        $moneyCheck->course = $this->data['Курс'];
        $moneyCheck->mdlpid = $this->data['МДЛПИД'];
        $moneyCheck->direction_movement = $this->data['НаправлениеДвижения'];
        $moneyCheck->do_not_transfer_cashier = $this->data['НеПередаватьКассира'];
        $moneyCheck->number_payment_card = $this->data['НомерПлатежнойКарты'];
        $moneyCheck->receipt_number = $this->data['НомерЧекаЭТ'];
        $moneyCheck->object = $this->data['Объект'];
        $moneyCheck->object_type = $this->data['Объект_Type'];
        $moneyCheck->round_total_cheque = $this->data['ОкруглятьИтогЧека'];
        $moneyCheck->organization_key = $this->data['Организация_Key'];
        $moneyCheck->base = $this->data['Основание'];
        $moneyCheck->base_type = $this->data['Основание_Type'];
        $moneyCheck->responsible_key = $this->data['Ответственный_Key'];
        $moneyCheck->send_email = $this->data['ОтправлятьEmail'];
        $moneyCheck->send_sms = $this->data['ОтправлятьСМС'];
        $moneyCheck->sub_report = $this->data['Подотчет'];
        $moneyCheck->department_key = $this->data['Подразделение_Key'];
        $moneyCheck->percent_manual_discounts_markups = $this->data['ПроцентРучнойСкидкиНаценки'];
        $moneyCheck->change = $this->data['Сдача'];
        $moneyCheck->taxation_system = $this->data['СистемаНалогообложения'];
        $moneyCheck->discount = $this->data['Скидка'];
        $moneyCheck->rounding_method_total_check = $this->data['СпособОкругленияИтогаЧека'];
        $moneyCheck->reference_number = $this->data['СсылочныйНомер'];
        $moneyCheck->reference_number_foundations = $this->data['СсылочныйНомерОснования'];
        $moneyCheck->delete_between_organization = $this->data['УдалитьМеждуОрганизациями'];
        $moneyCheck->delete_organization_recipient_key = $this->data['УдалитьОрганизацияПолучатель_Key'];
        $moneyCheck->uid_payment = $this->data['УИДПлатежа'];
        $moneyCheck->uid_payment_1c = $this->data['УИДПлатежа1С'];
        $moneyCheck->specified_email = $this->data['УказанныйEmail'];
        $moneyCheck->specified_phone = $this->data['УказанныйТелефон'];
        $moneyCheck->fiscal_check_number = $this->data['ФискальныйНомерЧека'];
        $moneyCheck->electronically = $this->data['Электронно'];
        $moneyCheck->invoice_key = $this->data['Инвойс_Key'];
        $moneyCheck->verified = $this->data['Проверен'];

        return $moneyCheck;
    }

    public function adaptMoneyCheckerSovaUds(): MoneyCheckerSovaUds
    {
        $sovaUds = new MoneyCheckerSovaUds();

        $sovaUds->discount_rate = $this->data['SOVA_UDSdiscountRate'];
        $sovaUds->client_id = $this->data['SOVA_UDSIDКлиента'];
        $sovaUds->operation_id = $this->data['SOVA_UDSIDОперации'];
        $sovaUds->client_uid = $this->data['SOVA_UDSUIDКлиента'];
        $sovaUds->uparticipant_client_id = $this->data['SOVA_UDSUParticipantIDКлиента'];
        $sovaUds->whole_amount_without_discount = $this->data['SOVA_UDSВсяСуммаБезСкидки'];
        $sovaUds->client_name = $this->data['SOVA_UDSИмяКлиента'];
        $sovaUds->use_additional_bonus = $this->data['SOVA_UDSИспользоватьДополнительныйБонус'];
        $sovaUds->cashier = $this->data['SOVA_UDSКассир'];
        $sovaUds->cashier_type = $this->data['SOVA_UDSКассир_Type'];
        $sovaUds->discount_code = $this->data['SOVA_UDSКодСкидки'];
        $sovaUds->accumulated_points = $this->data['SOVA_UDSНакопленоБаллов'];
        $sovaUds->operation_registered_on_server = $this->data['SOVA_UDSОперацияЗарегистрированаНаСервере'];
        $sovaUds->full_server_response_as_result_of_payment = $this->data['SOVA_UDSПолныйОтветСервераВРезультатеОплаты'];
        $sovaUds->calculated_interest_discounts = $this->data['SOVA_UDSРассчитанныйПроцентСкидки'];
        $sovaUds->additional_bonus_calculation = $this->data['SOVA_UDSРасчетДополнительногоБонуса'];
        $sovaUds->redeemable_points = $this->data['SOVA_UDSСписываемыеБаллы'];
        $sovaUds->amount_without_discounts = $this->data['SOVA_UDSСуммаБезСкидки'];
        $sovaUds->additional_accrual_amount = $this->data['SOVA_UDSСуммаДополнительногоНачисления'];

        return $sovaUds;
    }

    public function adaptTransaction(): Transaction
    {
        $transaction = new Transaction();

        $transaction->movement_type = $this->data['ВидДвижения'];
        $transaction->payment_type_cashless_key = $this->data['ВидОплатыБезнал_Key'];
        $transaction->discounts_type_key = $this->data['ВидСкидки_Key'];

        return $transaction;
    }

    public function adaptFinancialAccount(): FinancialAccount
    {
        $financialAccount = new FinancialAccount();

        $financialAccount->financial_account = $this->data['ДенежныйСчет'];
        $financialAccount->type = $this->data['ДенежныйСчет_Type'];
        $financialAccount->account_credit_key = $this->data['ДенежныйСчетБезнал_Key'];
        $financialAccount->discount_card_key = $this->data['ДенежныйСчетКредит_Key'];

        return $financialAccount;
    }

    public function adaptCashier(): Cashier
    {
        $cashier = new Cashier();

        if (isset($this->data['КассирФИО'])) {
            $fullName = Str::snake($this->data['КассирФИО']);
            $explodeFullName = explode('_', $fullName);
        }

        $cashier->first_name = $explodeFullName['last_name'] ?? '';
        $cashier->last_name = $explodeFullName['first_name'] ?? '';
        $cashier->patronymic = $explodeFullName['patronymic'] ?? '';
        $cashier->individual_taxpayer_number = $this->data['КассирИНН'] ?: null;

        return $cashier;
    }

    public function adaptNavigationLinkUrl(): NavigationLinkUrl
    {
        return new NavigationLinkUrl([
            'currency'     => $this->data['Валюта@navigationLinkUrl'],
            'organization' => $this->data['Организация@navigationLinkUrl'],
            'responsible'  => $this->data['Ответственный@navigationLinkUrl'],
        ]);
    }

    /**
     * Adapt Discount
     *
     * @return Discount[]
     */
    public function adaptDiscounts(): array
    {
        $discounts = [];

        foreach ($this->data['Скидки'] as $discountInformation) {
            if (empty($discountInformation)) {
                return [];
            }

            $discount = new Discount();

            $discount->ref_key = $discountInformation['Ref_Key'];
            $discount->line_number = $discountInformation['LineNumber'];
            $discount->discount_markup_key = $discountInformation['СкидкаНаценка_Key'];
            $discount->sum = $discountInformation['Сумма'];
            $discount->key_string = $discountInformation['КлючСтроки'];

            $discounts[] = $discount;
        }

        return $discounts;
    }

    /**
     * Adapt Goods
     *
     * @return Product[]
     */
    public function adaptProducts(): array
    {
        $products = [];

        foreach ($this->data['Товары'] as $productInformation) {
            $product = new Product();

            $product->ref_key = $productInformation['Ref_Key'];
            $product->line_number = $productInformation['LineNumber'];
            $product->nomenclature_key = $productInformation['Номенклатура_Key'];
            $product->product_unit_key = $productInformation['ЕдиницаИзмерения_Key'];
            $product->quantity = $productInformation['Количество'];
            $product->price = $productInformation['Цена'];
            $product->sum = $productInformation['Сумма'];
            $product->percentage_discounts_markups = $productInformation['ПроцентСкидкиНаценки'];
            $product->percent_manual_discounts_markups = $productInformation['ПроцентРучнойСкидкиНаценки'];
            $product->amount_discounted = $productInformation['СуммаСоСкидкой'];
            $product->warehouse_key = $productInformation['Склад_Key'];
            $product->employee_key = $productInformation['Сотрудник_Key'];
            $product->performer_key = $productInformation['Исполнитель_Key'];
            $product->date = Carbon::parse($productInformation['Период']);

            $products[] = $product;
        }

        return $products;
    }

    public function adaptProductSovaUds(): array
    {
        $productsSovaUds = [];

        foreach ($this->data['Товары'] as $productInformation) {
            $productSovaUds = new ProductSovaUds();

            $productSovaUds->apply_discount = $productInformation['SOVA_UDSНеПрименятьСкидку'];
            $productSovaUds->amount_without_discounts_on_line = $productInformation['SOVA_UDSСуммаБезСкидкиПоСтроке'];
            $productSovaUds->whole_amount_without_discounts_on_line = $productInformation['SOVA_UDSВсяСуммаБезСкидкиПоСтроке'];
            $productSovaUds->percentage_of_additional_accrual = $productInformation['SOVA_UDSПроцентДополнительногоНачисления'];
            $productSovaUds->additional_amount_accrual = $productInformation['SOVA_UDSСуммаДополнительногоНачисления'];
            $productSovaUds->maximum_percentage_payment_points = $productInformation['SOVA_UDSМаксимальныйПроцентОплатыБаллами'];
            $productSovaUds->maximum_payment_amount_points = $productInformation['SOVA_UDSМаксимальнаяСуммаОплатыБаллами'];

            $productsSovaUds[] = $productSovaUds;
        }

        return $productsSovaUds;
    }
}
