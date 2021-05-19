<?php 
/* 
 * Basic Site Settings and API Configuration 
 */ 
 
// Database configuration 
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'techeuxon'); 
define('DB_USER_TBL', 'users'); 
 
// Twitter API configuration 
define('TW_CONSUMER_KEY', 'AnBnF267B3HWBa3oz5DUe3BKy'); 
define('TW_CONSUMER_SECRET', 'BruqoGVChRTmRizMf33r4yPZ1sFojZedloFVYQElungNa2GLhI'); 
define('TW_REDIRECT_URL', 'http://localhost:82/vinnovate/loginpoc/twitterloginapi/twitter-oauth/'); 
 
// Start session 
if(!session_id()){ 
    session_start(); 
} 
 
// Include Twitter client library  
require_once 'twitter-oauth/twitteroauth.php';