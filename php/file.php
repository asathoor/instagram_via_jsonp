<?
// session_start(); // if needed
/*
file: authToken.php
purpose: try to authentiate Instagram API
by: petj
licence: GPLv3
method: implicit
*/

$client_id ="[YOUR-CLIENT-ID-HERE]"; // client = test2
$redirect_uri ="http://multimusen.dk/instagram/loginok.php"; // this file will receive the token

$urlOne = "https://api.instagram.com/oauth/authorize/?client_id=" . $client_id 
    . "&redirect_uri=" . $redirect_uri 
    . "&response_type=token";

header("Location: $urlOne"); 

/* If you get an error like "0auth is disabled" then edit the client and enable it! */

?>
