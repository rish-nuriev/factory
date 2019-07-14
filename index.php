<?php

use Factory\{SummerFactory, WinterFactory};

require_once 'vendor/autoload.php';

$isSummerTime = date('m-d') >= '03-21' && date('m-d') < '09-21';

$factory = $isSummerTime ? new SummerFactory() : new WinterFactory;

$tshirt = $factory->createTshirt();
$tshirt->setColor('Green');

$shorts = $factory->createShorts();
$shorts->synch($tshirt);

$tshirt->about();
echo '<br/><br/>';
$shorts->about();

