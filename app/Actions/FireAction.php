<?php

namespace App\Actions;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;

class FireAction
{
    /**
     * @throws ConnectionException
     */
    public function __invoke(string $url, array $headers, array $body, string $method): array
    {
        $options = ['verify' => false];

        $client = Http::withOptions($options)
            ->withHeaders($headers);

        if ($method === 'GET') {
            $res = $client->get($url, $body);
        } else {
            $res = $client->post($url, $body);
        }

        return $res->json();
    }
}
