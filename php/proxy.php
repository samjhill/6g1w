
<?php
// Set your return content type
//header('Content-type: application/json');

// Website url to open
$daurl = 'http://www.cssmania.com/api/api.php?search=' + $_GET['search'];

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