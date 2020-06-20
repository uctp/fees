<?php
// include snoopy library
require('Snoopy.class.php');
// initialize snoopy object
$snoopy = new Snoopy;
$url = "http://t.qq.com";
// read webpage content
$snoopy->fetch($url);
// save it to $lines_string
$lines_string = $snoopy->results;
//output, you can also save it locally on the server
echo $lines_string;
?>
?>