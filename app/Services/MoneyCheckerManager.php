<?php

declare(strict_types=1);

namespace App\Services;


use App\Factory\Factory;
use App\Models\MoneyCheck;
use Illuminate\Support\Facades\DB;
use App\Http\Adapters\MoneyCheckAdapter;

class MoneyCheckerManager
{
    protected array $createdMoneyChecks = [];

    public function process(array $data)
    {
        collect($data)->each(function ($moneyCheckValue) {
            $adapterMoneyCheck = Factory::make(MoneyCheckAdapter::class, $moneyCheckValue);

            DB::transaction(function () use ($adapterMoneyCheck) {
                $moneyCheck = $adapterMoneyCheck->adaptMoneyCheck();
                $moneyCheck->save();
                $moneyCheck->fresh();

                $moneyCheck->moneyCheckerSovaUds()->save($adapterMoneyCheck->adaptMoneyCheckerSovaUds());
                $moneyCheck->transaction()->save($adapterMoneyCheck->adaptTransaction());
                $moneyCheck->financialAccount()->save($adapterMoneyCheck->adaptFinancialAccount());
                $moneyCheck->cashier()->save($adapterMoneyCheck->adaptCashier());
                $moneyCheck->navigationLinkUrl()->save($adapterMoneyCheck->adaptNavigationLinkUrl());
                $moneyCheck->discounts()->createMany(
                    $this->prepareDiscounts($adapterMoneyCheck->adaptDiscounts())
                );

                $this->saveProducts($adapterMoneyCheck, $moneyCheck);

                $this->createdMoneyChecks[] = $moneyCheck;
            });
        });

        return $this->createdMoneyChecks;
    }

    protected function prepareDiscounts(array $data): array
    {
        return collect($data)->each(function ($data) {
            return $data;
        })->toArray();
    }

    protected function saveProducts(MoneyCheckAdapter $adapterMoneyCheck, MoneyCheck $moneyCheck): void
    {
        $moneyCheckProducts = $adapterMoneyCheck->adaptProducts();
        $moneyCheckProductsSovaUds = $adapterMoneyCheck->adaptProductSovaUds();

        collect($moneyCheckProducts)->each(function($productInformation, $index) use ($moneyCheck, $moneyCheckProductsSovaUds) {
            $product = $moneyCheck->products()->create($productInformation->toArray());
            $product->productSovaUds()->create($moneyCheckProductsSovaUds[$index]->toArray());
        });
    }

}
