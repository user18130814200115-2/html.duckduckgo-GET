<?php
$url= "https://html.duckduckgo.com/html/?$_SERVER[QUERY_STRING]";

if (substr( $_SERVER[QUERY_STRING], 0, 5 ) === "q=%21") {
        header("Location: $url");
        die();
}       

$lines_array=file($url);
$lines_string=implode('',$lines_array);

$pattern1 = '/method=\"post\"/i';
$pattern2 = '/action=\"\/html\/\"/i';
$pattern6 = '/\/\/duckduckgo.com\/about.html/';
$pattern3 = '/"\/\/.*uddg=(.*)&.*?rut.*?"/i'; 

function decode($matches) {
        return urldecode("$matches[1]");
}       

$lines_string=preg_replace($pattern1, "", $lines_string);
$lines_string=preg_replace($pattern2, "", $lines_string);
$lines_string=preg_replace($pattern6, "https://github.com/user18130814200115-2/html.duckduckgo-GET", $lines_string);
$lines_string=preg_replace_callback($pattern3, decode, $lines_string);   

echo $lines_string;
?>
<style>
.result--ad {
        display: none
}
</style>
