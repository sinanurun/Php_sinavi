<?php
$sayilar = array(89,65,12,35,74);
$sayilar2 = array(89,65,12,35,74);
function ebkyazdir($array){
sort($array);
echo "en küçük değer => $array[0] .<br>";
rsort($array);
echo "en büyük değer => $array[0] .<br>";
}
ebkyazdir($sayilar);
function ebkyazdir2($array){
    $ek = min($array);
    echo "en küçük değer => $ek .<br>";
    $eb = max($array);
    echo "en büyük değer => $eb .<br>";
}
ebkyazdir2($sayilar);
?>