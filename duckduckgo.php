<?php
$url= "https://html.duckduckgo.com/html/?$_SERVER[QUERY_STRING]";   

$lines_array=file($url);
$lines_string=implode('',$lines_array);


$pattern = '/method=\"post\"/i';
$pattern2 = '/action=\"\/html\/\"/i';
$lines_string=preg_replace($pattern, 'method=get', preg_replace($pattern2, '', $lines_string));
   
echo preg_replace('/\/\/.*uddg=/i', ' ', urldecode("$lines_string"))                     
?>
