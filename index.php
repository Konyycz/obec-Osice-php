<?php
$patch = $_SERVER['REQUEST_URI'];
$url=explode("/",$patch);

if(isset($url[1])) {$url1 = $url[1];}
if(isset($url[2])) {$url2 = $url[2];}
if(isset($url[3])) {$url3 = $url[3];}

if($url1==""){include "page_home.php";}
elseif($url1=="dokumenty"){include "page_dokumenty.php";}
else {include "page_home.php";}
?>