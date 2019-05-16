<?php

    $connect = mysqli_connect ("localhost", "root", "", "cmsassignment");
            
            $sql = "SELECT * FROM wp_wc_product_meta_lookup";
            
            $result = mysqli_query($connect, $sql);
            
            $json_array = array();
            
            while($row = mysqli_fetch_assoc($result))
            {
                $json_array[] = $row;
            }
            
            $txt = json_encode($json_array);
            echo $txt;

            $myfile = fopen("newfile.txt", "w") or die("Unable to open file");
            fwrite($myfile, $txt);
?>