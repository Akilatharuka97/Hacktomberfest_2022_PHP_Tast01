<?php
   $t = date("H");
//           checking t
         if ($t < "10") {
             echo "Have a good morning!";
   } elseif ($t < "20") {
             echo "Have a good day!";
   } else {
             echo "Have a good night!";
}
?>
