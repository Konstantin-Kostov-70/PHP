<?php
function singOfInteger($num) :void {
   if ($num > 0) {
       echo "The number $num is positive.";
   } elseif ($num < 0) {
       echo "The number $num is negative.";
   } else {
       echo "The number $num is zero.";
   }
}
singOfInteger(intval(readline()));




