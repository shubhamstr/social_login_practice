<?php
require_once 'vendor/autoload.php';
  
$config = [
    'callback' => 'http://localhost:82/vinnovate/loginpoc/twitterloginapi2/index.php',
    'keys'     => ['key' => 'EjS6ob6idavcn8tju5D74ao0E', 'secret' => 'L2wmkbV8wi3LPZwTCtfOqILhO7l8NwlK4MfCHG7lk7CcgtTLUq'],
    'authorize' => true
];
  
$adapter = new Hybridauth\Provider\Twitter( $config );