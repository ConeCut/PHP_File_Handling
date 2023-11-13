<?php
$var = fopen('blah.txt', 'a') or die('Unable to open the file');
$to_be_added = ' and
';
fwrite($var, $to_be_added);
$to_be_added = 'forever';
fwrite($var, $to_be_added);
fclose($var);
