<?php

declare(strict_types=1);

namespace Moselle;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class OfferFetcher
{
    public function test() {
        return 'hello';
    }

    public static function fetchOffer(HttpClientInterface $client)
    {
        $response = $client->request(
            'GET',
            'http://localhost/offers'
        );

        return 'hello';
    }
}
