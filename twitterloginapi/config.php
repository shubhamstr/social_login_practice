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
define('TW_CONSUMER_KEY', 'HlhdIog84hMon9TwtLNR6YnvL'); 
define('TW_CONSUMER_SECRET', 'Q4GUPXeWhaeDYsTfSHsKwqqyQsf7fFIuZZ9OekWC7ezugS5nCx'); 
define('TW_REDIRECT_URL', 'http://localhost:82/vinnovate/techeuxon/twitterloginapi/twitter-oauth/'); 
 
// Start session 
if(!session_id()){ 
    session_start(); 
} 
 
// Include Twitter client library  
require_once 'twitter-oauth/twitteroauth.php';