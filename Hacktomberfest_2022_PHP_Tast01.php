<?php
$t = date("H");
if ($t < "10") { //missing '$' mark
 echo "Have a good morning!";
} elseif ($t < "20") {
 echo "Have a good day!";
} else { //missing brackets
 echo "Have a good night!";
}
?>
