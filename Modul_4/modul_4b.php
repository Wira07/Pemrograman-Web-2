<?php
$sepeda['Polygob Siskiu D7'] = 1500000;
$sepeda['Polygob Siskiu D5'] = 950000;
$sepeda['Polygob Siskiu T8'] = 2800000;
$sepeda['Polygob Rayz 3'] = 6000000;
$sepeda['Polygob Rapid'] = 3000000;
echo "<b>Array sebelum pengurutan</b>";
echo "<pre>";
print_r($sepeda);
echo "</pre>";

sort($sepeda);
reset($sepeda);
echo "<b>Array setelah pengurutan dengan sort()</b>";
echo "<pre>";
print_r($sepeda);
echo "</pre>";

rsort($sepeda);
reset($sepeda);
echo "<b>Array setelah pengurutan dengan rsort()</b>";
echo "<pre>";
print_r($sepeda);
echo "</pre>";
?>