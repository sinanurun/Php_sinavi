<?php
$dogum_yili = (int)$_REQUEST['dyili'];
$ogrenim = (int)$_REQUEST['ogrenim'];

$yas = 2023 - $dogum_yili;

if($yas >= 18 && $ogrenim >=2)
{
    echo "Ehliyet için yeterliliğe sahipsiniz";
}
else{
    echo "Ehliyet için yeterliliğe sahip değilsiniz";
}





?>
