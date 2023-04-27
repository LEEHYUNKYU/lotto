<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

exec("java -jar /lib/magicVKeypad-1.0.0.6.jar 2>&1", $output);

echo $_SERVER['HTTP_HOST']."<BR>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
print_r($output);

?>