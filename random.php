<?php
$seed = time();
$num = mt_rand(0,0);
$picpath = "https://cdn.jsdelivr.net/gh/logfk/random-picture@main/".$num.".png";
die(header("Location: $picpath"));
?>