<?php
$patch = $_SERVER['REQUEST_URI'];
$url=explode("/",$patch);

if(isset($url[1])) {$url1 = $url[1];}
if(isset($url[2])) {$url2 = $url[2];}
if(isset($url[3])) {$url3 = $url[3];}

if($url1==""){include "page_home.php";}
elseif($url1=="dokumenty"){include "page_dokumenty.php";}
elseif($url1=="uredni-deska" AND $url2=="archiv"){include "page_dokumenty-archiv.php";}
elseif($url1=="uredni-deska"){include "page_uredni-deska.php";}
elseif($url1=="uzitecne-informace"){include "page_uzitecne-informace.php";}
elseif($url1=="akce-udalosti"){include "page_akce-udalosti.php";}
else {include "page_home.php";}
?>
