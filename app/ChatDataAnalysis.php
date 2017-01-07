<?php
namespace App;

use Carbon\Carbon;
use \GuzzleHttp\Client;

class ChatDataAnalysis {
    public function analysis()
    {
        $guzzle_client = new Client();

        $now = new Carbon();
        $from_date = $now->subDay()->toIso8601String();

        $response = $guzzle_client->request('GET', 'https://api.bitflyer.jp/v1/getchats',[
                                                'query' => ['from_date' => $from_date]
                                            ]);
        $array_data = json_decode($response->getBody());

        var_dump($array_data);

        // var_dump(\MeCab\split("私はphp7でmecabを使いたい"));

        return true;
    }
}
