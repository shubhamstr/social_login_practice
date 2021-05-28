<?php
require_once 'vendor/autoload.php';
  
$config = [
    'callback' => 'http://localhost:82/vinnovate/loginpoc/twitterloginapi2/index.php',
    'keys'     => ['key' => 'AnBnF267B3HWBa3oz5DUe3BKy', 'secret' => 'BruqoGVChRTmRizMf33r4yPZ1sFojZedloFVYQElungNa2GLhI'],
    'authorize' => true
];
  
$adapter = new Hybridauth\Provider\Twitter( $config );