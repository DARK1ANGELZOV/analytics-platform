<?php 
namespace App\Services\Metrika; 
 
use GuzzleHttp\Client; 
use GuzzleHttp\Exception\RequestException; 
 
class MetrikaClient 
{ 
    private Client $client; 
    private string $token; 
 
    public function __construct(string $token) 
    { 
        $this->token = $token; 
        $this->client = new Client([ 
            'base_uri' => 'https://api-metrica.yandex.net/stat/v1/data/', 
            'headers' => [ 
                'Authorization' => 'OAuth ' . $token, 
                'Content-Type' => 'application/json', 
            ], 
        ]); 
    } 
 
    public function getData(int $counterId, array $params): array 
    { 
        try { 
            $response = $this->client->get('', ['query' => array_merge(['ids' => $counterId], $params)]); 
            return json_decode($response->getBody()->getContents(), true); 
        } catch (RequestException $e) { 
            throw new \Exception('Yandex Metrika API error: ' . $e->getMessage()); 
        } 
    } 
} 
