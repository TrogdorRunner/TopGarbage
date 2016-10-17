<!DOCTYPE html>
<html lang="en">
    <head>
    
    </head>
    <body>
    <p>
        <?php
        $db = new mysqli(
            "us-cdbr-azure-southcentral-f.cloudapp.net",
            "bf6f4121f418a4",
            "16c7fed3",
            "goosebumpsdb"
        );
        if($db->connect_errno){
            die('Connectfailed['.$db->connect_error.']');
        }
        ?>
    </p>
    </body>
</html>