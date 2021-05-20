<?php
require_once 'linkedin_config.php';
 
try {
    if ($adapter->isConnected()) {
        $adapter->disconnect();
        echo 'Logged out the user';
        echo '<p><a href="index.php">Login</a></p>';
    }
}
catch( Exception $e ){
    echo $e->getMessage() ;
}