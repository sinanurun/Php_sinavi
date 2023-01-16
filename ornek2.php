<?php
$isimler = array("mert","alex","sinan","enver","oğuzhan");
$isimler2 = array("mert","alex","sinan","enver","oğuzhan");
function ebkyazdir($array){
sort($array);
echo "en küçük değer => $array[0] .<br>";
rsort($array);
echo "en büyük değer => $array[0] .<br>";
}
ebkyazdir($isimler);
function ebkyazdir2($array){
    $ek = min($array);
    echo "en küçük değer => $ek .<br>";
    $eb = max($array);
    echo "en büyük değer => $eb .<br>";
}
ebkyazdir2($isimler2);
?>