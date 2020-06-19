<?php

$name = 'Osawa Takeshi';

if ($name = 'Osawa Takeshi') {
    echo "私は $name です"."\n";
} else {
    echo "$name ではありません"."\n";
}

$total = 0;
    echo $total;

for ($i = 0; $i <= 10000; ++$i) {
    echo $total += $i;
}
    echo $total."\n";

$fruits = array('pineapple','Kiwi','pear','Muscat','blueberry');
    foreach ($fruits as $fruit) {
        echo $fruit."\n";
    }

$start = 1;
$end = 100;

for ($i = $start; $i <= $end; ++$i) {
    if ($i % 5 == 0) {
        echo $i."\n";
    }
}
