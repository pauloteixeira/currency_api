<?php

namespace App\Services;

use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;

class CrawlerService
{
    const SIXTY_SECONDS_DURATION = 60;
    public $client;
    public $url;

    public function __construct( String $url ) 
    {
        $this->client = new Client(HttpClient::create(['timeout' => self::SIXTY_SECONDS_DURATION]));
        $this->client->setServerParameter('HTTP_USER_AGENT', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:73.0) Gecko/20100101 Firefox/73.0');
        $this->url = $url;
    }

    function crawlingPage() 
    {
        $crawler = $this->client->request('GET', $this->url);
        
        return $crawler;
    }
}