<?php include "db.php" ?>
<?php
    if(!isset($_GET['name'])) {
        echo '{"message" : "Hotel name not provided."}';
    }
    if(!isset($_GET['location'])) {
        echo '{"message" : "Hotel location not provided."}';
    }
    if(!isset($_GET['token'])) {
        echo '{"message" : "Token not provided."}';
    }
    if(isset($_GET['token']) && isset($_GET['location']) && isset($_GET['name'])) {
        //check if token is valid.
        if(isTokenValid($_GET['token'])) {
            
        }
    }
?>