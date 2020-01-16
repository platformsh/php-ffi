<?php
declare(strict_types=1);

$p1 = new Point(3, 4);
$p2 = new Point(7, 9);

$api = new PointApi();

$d2 = $api->distance($p1, $p2);

print "Distance is $d2\n";
