<?php
namespace App;

use \GuzzleHttp\Client;

class ChatDataAnalysis {
    public function sayHi()
    {
        $guzzle_client = new Client();

        $response = $guzzle_client->request('GET', 'https://api.bitflyer.jp/v1/getchats?from_date=2017-01-07T10:00:00');

        $array_data = json_decode($response->getBody());

        var_dump(\MeCab\split("私はphp7でmecabを使いたい"));


        return true;
    }
}
