<?php
$arr = array(1, 3, 5 ,7, 9);
    $result = array_product($arr);
    var_dump( $result ) ."\n";

$arr = array(2, 6, 15, 8, 7);
function max_array($arr) {
// とりあえず配列の最初の要素を一番大きい値とする
    $result = 0;
    foreach($arr as $a) {
 //どうしたらいいかわからない・・・・
    if($result < $a) {
    $result = $a;
 }
}
    return $result;
}
echo max_array($arr) . "\n";
?>