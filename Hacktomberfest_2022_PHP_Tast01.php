<?php

//creating variables
$t = date("H");

// making decisions
if ($t < "10") {
  //displaying outputs
  echo "Have a good morning!";

} elseif ($t < "20") {
  //displaying outputs
  echo "Have a good day!";

} else {
  //displaying outputs
  echo "Have a good night!";
}

?>
