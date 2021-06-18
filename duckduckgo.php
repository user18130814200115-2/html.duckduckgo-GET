<?php
$url= "https://html.duckduckgo.com/html/?q=$_GET[q]";
 
$lines_array=file($url);
$lines_string=implode('',$lines_array);
 
 
$pattern = '/method=\"post\"/i';
$pattern2 = '/action=\"\/html\/\"/i';
echo preg_replace($pattern, 'method=get', preg_replace($pattern2, '', $lines_string));
?>
