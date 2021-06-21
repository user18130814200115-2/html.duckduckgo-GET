<?php
# set url with php GET data
$url= "https://html.duckduckgo.com/html/?$_SERVER[QUERY_STRING]";

# get data from duckduckgo
$lines_array=file($url);
$lines_string=implode('',$lines_array);

# Change method to GET
$pattern = '/method=\"post\"/i';
$pattern2 = '/action=\"\/html\/\"/i';
$lines_string=preg_replace($pattern, 'method=get', preg_replace($pattern2, '', $lines_string));

# Regex to remove duckduckgo proxy
$lines_string=preg_replace('/"\/\/.*uddg=(.*)&.*?rut.*?"/i', "$1", "$lines_string");
$lines_string=urldecode($lines_string);

# Output HTML data
echo "$lines_string"
?>
