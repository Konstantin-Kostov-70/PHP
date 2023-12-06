<?php
$text = explode('\\', readline());

$file = explode('.',end($text));

echo "File name: ".$file[0]."\n"."File extension: ".$file[1];



