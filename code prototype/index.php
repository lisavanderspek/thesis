<?php


$url = array(
"mmc/index.html",
"mmg/index.html",
"mc/index.html",
"mg/index.html",
);


shuffle($url);
header("Location: $url[0]"); // Redirect user...



?>