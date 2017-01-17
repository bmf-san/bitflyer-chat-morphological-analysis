<?php
namespace App;

use Carbon\Carbon;
use \GuzzleHttp\Client;

class ChatDataAnalysis {
    public function analysis()
    {
        $guzzle_client = new Client();
        $today = Carbon::today();
        $response = $guzzle_client->request('GET', 'https://api.bitflyer.jp/v1/getchats',[
                                                'query' => ['from_date' => $today]
                                            ]);
        $array_data = json_decode($response->getBody());

        // Split array data by MeCab

        // Analysis splited data by data.json



        // Ex. var_dump(\MeCab\split("私の名前は太郎です。"));

        return true;
    }
}
