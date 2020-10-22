<?php

require_once 'Point.php';

$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);

echo $p1->getPoint();
echo $p2->getPoint() . PHP_EOL;

$p1->swapPoints($p2);

echo $p1->getPoint();
echo $p2->getPoint();