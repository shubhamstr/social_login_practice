<?php
require_once 'vendor/autoload.php';
 
$config = [
    'callback' => 'http://localhost:82/vinnovate/loginpoc/linkedinloginapi/index.php',
    'keys'     => [
                    'id' => '86t41nulx54158',
                    'secret' => 'm1gAKBGnPl7D1Uiv'
                ],
    'scope'    => 'r_liteprofile r_emailaddress',
];
 
$adapter = new Hybridauth\Provider\LinkedIn( $config );