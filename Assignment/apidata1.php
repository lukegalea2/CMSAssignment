<!DOCTYPE html>
<html>
    <head>
        <title> API </title>
    </head>
    
    <body>
        
<?php

$db = new mysqli('localhost','root','','cmsassignment');

if ($dp -> connect_errno){
echo ("Failed to connect to database");
}

$result = $db ->query("SELECT * FROM wp_wc_product_meta_lookup");

$dbdata = array();

while ($row = $result ->fetch_assoc())
{
    $dbdata[] = $row;
}

echo json_endoe($dbdata);

?>
            </body>
</html>