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

# Function to remove last character form regex below
# For some reason, the regula expression always appends a "&" this is the only way I found to cleanly get rid of it
function callback($matches) {
        return mb_substr($matches[1], 0, -1);
}
# Regex to remove duckduckgo proxy
$lines_string=preg_replace_callback('/"\/\/.*uddg=(.*).rut.*?"/i', "callback", "$lines_string");
$lines_string=urldecode($lines_string);

# Output HTML data
echo "$lines_string"
?>
