<?php

require "vendor/autoload.php";

use App\ChatDataAnalysis;

$instance = new ChatDataAnalysis();

echo $instance->sayHi();
