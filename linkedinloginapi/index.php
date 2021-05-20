<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
require_once 'linkedin_config.php';
 
try {
    $adapter->authenticate();
    $userProfile = $adapter->getUserProfile();
    print_r($userProfile);
    echo '<a href="logout.php">Logout</a>';

    echo '<br><img src="'.$userProfile ->photoURL.'" style="width:100px;" alt="">';
    echo '<br>Name :'.$userProfile ->firstName.' '.$userProfile ->lastName;
    echo '<br>Email :'.$userProfile ->email;
}
catch( Exception $e ){
    echo $e->getMessage() ;
}
?>
</body>

</html>