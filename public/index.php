<?php

require_once ('../vendor/autoload.php');


$dev = new \App\Developer(24, 1999, 'Karaman Kama ','Developer front');

var_dump($dev->introducing_worker());


