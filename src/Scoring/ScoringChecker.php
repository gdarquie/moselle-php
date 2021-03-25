<?php

declare(strict_types=1);

namespace Moselle\Scoring;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class ScoringChecker
{
    public static function postScoring(HttpClientInterface $client, string $url): array
    {
        $response = $client->request(
            'GET', // todo: replace with post when joker has been updated
            $url,
            [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
            ],
        );

        return $response->toArray();
    }
}
