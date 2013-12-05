
<?php
// Set your return content type
header('Content-type: application/xml');

// Website url to open
$daurl = 'http://www.reddit.com/r/webdesignporn/top/.rss';

// Get that website's content
$handle = fopen($daurl, "r");

// If there is something, read and return
if ($handle) {
    while (!feof($handle)) {
        $buffer = fgets($handle, 8192);
        echo $buffer;
    }
    fclose($handle);
}
?>