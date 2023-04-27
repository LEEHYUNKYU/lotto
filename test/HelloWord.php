<?php exec("Java -jar jcaos-1.4.7.9.jar arguments", $output); 
print_r($output);

$myObj = new Java("HelloWorld");
echo (string) $myObj->getHelloWorld();
?>