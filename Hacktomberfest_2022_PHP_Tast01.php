<?php
$t = date("H");
if ($t < "10") {
 echo "Have a good morning!";
} elseif ($t < "20") {
 echo "Have a good day!";
//   Display message
} else {
 echo "Have a good night!";
//   Display message
}
?>
