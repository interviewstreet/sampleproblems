<?php

for($i=0; $i<15; $i++) {
$i = sprintf("%02d", $i);
if ($i == 0) { $t = 3; }
else if ($i==0) { $t = 5;}
else {$t = rand()%100; }

$inp = "input".$i.".txt";
$oup = "output".$i.".txt";

$res = "";
for($j = 0;$j<$t; $j++) $res .= "Hello World\n";

file_put_contents($inp, $t);
file_put_contents($oup, $res);

}

?>
