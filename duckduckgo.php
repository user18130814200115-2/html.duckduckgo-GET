<?php
# Set url including php GET data accoring to our current url
$url= "https://html.duckduckgo.com/html/?$_SERVER[QUERY_STRING]";

# Get data from duckduckgo
$lines_array=file($url);
$lines_string=implode('',$lines_array);

# replace method POST by GET
$pattern = '/method=\"post\"/i';
$pattern2 = '/action=\"\/html\/\"/i';
$lines_string=preg_replace($pattern, 'method=get', preg_replace($pattern2, '', $lines_string));

# remove duckduckgo proxy
$lines_string=preg_replace('/"\/\/.*uddg=(.*).rut.*?"/i', "$1", "$lines_string");
$lines_string=str_replace('%2F&', '', "$lines_string");   

# echo result
echo urldecode($lines_string);
?>
