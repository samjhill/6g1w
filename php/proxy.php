<?php
// Set your return content type
header('Content-type: application/xml');

// Website url to open
$daurl = 'http://svcs.ebay.com/services/search/FindingService/v1?OPERATION-NAME=findItemsByKeywords&SERVICE-VERSION=1.0.0&SECURITY-APPNAME=rit483d65-f477-4935-ac6d-35e12287a5b&RESPONSE-DATA-FORMAT=XML&REST-PAYLOAD&keywords=' . $_GET["search"];

// Get that website's content
$handle = fopen($daurl, "r");

// If there is something, read and return
if ($handle) {
    while (!feof($handle)) {
        $buffer = fgets($handle, 4096);
        echo $buffer;
    }
    fclose($handle);
}
?>