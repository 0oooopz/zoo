<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Factory\Factory;
use App\Models\MoneyCheck;
use App\Clients\BafApiClient;
use App\Http\Controllers\Controller;
use App\Services\MoneyCheckerManager;
use App\Resources\MoneyCheckResource;

class OdataController extends Controller
{
    public function store()
    {
        $oData = Factory::make(BafApiClient::class)->getData();

        if (empty($oData)) {
            return response()->json([
                'success' => false,
                'message' => 'Something wen\'t wrong',
            ]);
        }

        Factory::make(MoneyCheckerManager::class)->process($oData);

        $data = MoneyCheck::with([
                'moneyCheckerSovaUds',
                'transaction',
                'financialAccount',
                'cashier', 'payment',
                'navigationLinkUrl',
                'discounts',
                'products',
            ]
        )->get();

        return MoneyCheckResource::collection($data);
    }
}
