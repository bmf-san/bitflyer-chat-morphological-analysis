<?php

require "vendor/autoload.php";

use App\ChatDataAnalysis;

$chat_data_analysis = new ChatDataAnalysis();

echo $chat_data_analysis->analysis();
