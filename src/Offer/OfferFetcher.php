<?php

declare(strict_types=1);

namespace Moselle\Offer;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class OfferFetcher
{
    public static function fetchOffer(HttpClientInterface $client, string $url): array
    {
        $response = $client->request(
            'GET',
            $url
        );

        return $response->toArray();
    }
}
