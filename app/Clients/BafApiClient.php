<?php

declare(strict_types=1);

namespace App\Clients;

use Monolog\Logger;

use Psr\Log\LogLevel;
use Monolog\Handler\StreamHandler;
use GuzzleHttp\Client;
use Throwable;
use Illuminate\Support\Facades\Log;

class BafApiClient
{
    protected string $url;

    protected string $userName;

    protected string $password;

    protected Logger $logger;

    public function __construct()
    {
        $this->url = config('odata.credentials.url');
        $this->userName = config('odata.credentials.user_name');
        $this->password = config('odata.credentials.password');

        $this->logger = new Logger('BafApiClient');
        $this->logger->pushHandler(new StreamHandler(storage_path('logs/BafApiClient.log'), LogLevel::DEBUG));
    }

    public function getData(): array
    {
        $client = new Client();

        try {
            $response = $client->request('GET', $this->url . config('odata.parameter'), [
                'auth'    => [
                    $this->userName,
                    $this->password,
                ],
                'query'   => [
                    '$filter' => config('odata.filter'),
                    '$top'    => config('odata.top'),
                ],
                'headers' => [
                    'Accept'       => 'application/json',
                    'Content-Type' => 'application/json',
                ],
            ]);

            $data = json_decode($response->getBody()->getContents(), true);

            return $data['value'];

        } catch (Throwable $exception) {
            $this->logger->error('An error occurred while fetching data', ['exception' => $exception]);
        }

        return [];
    }
}
