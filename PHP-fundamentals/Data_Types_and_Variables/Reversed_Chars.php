<?php
$revChars = '';

for ($i = 0; $i < 3; $i ++) {
   $char = readline();
   $revChars .= "$char ";
}
echo trim(strrev($revChars));



