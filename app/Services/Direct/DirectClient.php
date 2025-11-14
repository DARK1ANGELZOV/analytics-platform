<?php 
namespace App\Services\Direct; 
 
use GuzzleHttp\Client; 
use GuzzleHttp\Exception\RequestException; 
 
class DirectClient 
{ 
    private Client $client; 
    private string $token; 
 
    public function __construct(string $token) 
    { 
        $this->token = $token; 
        $this->client = new Client([ 
            'base_uri' => 'https://api.direct.yandex.com/json/v5/', 
            'headers' => [ 
                'Authorization' => 'Bearer ' . $token, 
                'Content-Type' => 'application/json', 
            ], 
        ]); 
    } 
 
    public function getReports(array $params): array 
    { 
        try { 
            $response = $this->client->post('reports', ['json' => $params]); 
            return json_decode($response->getBody()->getContents(), true); 
        } catch (RequestException $e) { 
            throw new \Exception('Yandex Direct API error: ' . $e->getMessage()); 
        } 
    } 
} 
