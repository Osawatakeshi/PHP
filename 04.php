<?php
//1.
function one($max) {
    $result = $max * 2 ."\n";
    return $result;
}
    echo one(3);

//2.
function f($a, $b) {
    $result = $a + $b ."\n";
    return $result;
}
    echo f(1,8);

//3.
$arr = array(1, 3, 5 ,7, 9);
    $result = array_product($arr);
    var_dump( $result ) ."\n";

//4.
$arr = array(2, 6, 15, 8, 7);
function max_array($arr) {
    $result = 0;
foreach($arr as $a) {
    if($result < $a) {
    $result = $a;
 }
}
    return $result;
}
    echo max_array($arr) . "\n";

//5.strip_tags
$sink = "<h1>ぱいそん</h1>";
    echo strip_tags($sink) . "\n";

//5.array_push
$sink = array("P","y","t","h","o",);
array_push($sink, "n");
    print_r($sink) . "\n";

//5.array_merge
$take = array("coffee" => "250","milk" => "100");
$take_more = array("milk" => "150", "sugar" =>"50");
$result = array_merge($take,$take_more);
    print_r($result);

//5.time
$doko = time();
$now = time();
    print $now . "\n";

//5.mktime
$stamptime = mktime(0, 0, 0, 20, 6, 2020);
    print $stamptime  . "\n";

//5.date
date_default_timezone_set('Asia/Tokyo');
    echo date("Y/m/d") . "\n";
?>    
