<?php
$t = date("H");
if ($t < "10") {
 echo "Have a good morning!";
  //display text
} elseif ($t < "20") {
 echo "Have a good day!";
 //display text 
} else {
 echo "Have a good night!";
  //display text
}
?>
