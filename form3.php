
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$alan1Err = $alan2Err = $alan3Err = $alan4Err = $siralamaErr = "";
$alan1 = $alan2 = $alan3 = $alan4 = $siralama = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["alan1"])) {
    $alan1Err = "Alan 1 Gerekli";
  } else {
    $alan1 = test_input($_POST["alan1"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9' ]*$/",$alan1)) {
      $alan1Err = "Yalnızca Harf veya Rakam Giriniz";
    }
  }
}
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["alan2"])) {
      $alan2Err = "Alan 2 Gerekli";
    } else {
      $alan2 = test_input($_POST["alan2"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z0-9' ]*$/",$alan2)) {
        $alan2Err = "Yalnızca Harf veya Rakam Giriniz";
      }
    }
}
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["alan3"])) {
          $alan3Err = "Alan 3 Gerekli";
        } else {
          $alan3 = test_input($_POST["alan3"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z0-9' ]*$/",$alan3)) {
            $alan3Err = "Yalnızca Harf veya Rakam Giriniz";
          }
        }
    } 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["alan4"])) {
              $alan4Err = "Alan 4 Gerekli";
            } else {
              $alan4 = test_input($_POST["alan4"]);
              // check if name only contains letters and whitespace
              if (!preg_match("/^[a-zA-Z0-9' ]*$/",$alan4)) {
                $alan4Err = "Yalnızca Harf veya Rakam Giriniz";
              }
            }
        }       
$icerikler = array($alan1,$alan2,$alan3,$alan4);
  if (empty($_POST["siralama"])) {
    $siralamaErr = "Siralama Seçimi Gerekli";
  } else {
    $siralama = test_input($_POST["siralama"]);
  }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Sıralama Formu</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Alan1: <input type="text" name="alan1" value="<?php echo $alan1;?>">
  <span class="error">* <?php echo $alan1Err;?></span>
  <br><br>
  Alan2: <input type="text" name="alan2" value="<?php echo $alan2;?>">
  <span class="error">* <?php echo $alan2Err;?></span>
  <br><br>
  Alan3: <input type="text" name="alan3" value="<?php echo $alan3;?>">
  <span class="error">* <?php echo $alan3Err;?></span>
  <br><br>
  Alan4: <input type="text" name="alan4" value="<?php echo $alan4;?>">
  <span class="error">* <?php echo $alan4Err;?></span>
  <br><br>
  Sıralama Tipi:
  <input type="radio" name="siralama" <?php if (isset($siralama) && $siralama=="a") echo "checked";?> value="a">A - Z
  <input type="radio" name="siralama" <?php if (isset($siralama) && $siralama=="z") echo "checked";?> value="z">Z - A
  <span class="error">* <?php echo $siralamaErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Gönder">  
</form>

<?php
echo "<h2>";
if (isset($siralama) && $siralama=="a") {sort($icerikler); echo "Küçükten Büyüğe Sıralama";}
if (isset($siralama) && $siralama=="z") {rsort($icerikler); echo "Büyükten Küçüğe Sıralama";}
echo "</h2>";
echo $icerikler[0];
echo "<br>";
echo $icerikler[1];
echo "<br>";
echo $icerikler[2];
echo "<br>";
echo $icerikler[3];
echo "<br>";

?>

</body>
</html>

