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
elseif($url1=="informace-cestujici"){include "page_informace-cestujici.php";}
elseif($url1=="jizdni-rady"){include "page_jizdni-rady.php";}
elseif($url1=="osicka-sedmicka"){include "page_osicka-sedmicka.php";}
elseif($url1=="podnikatele-firmy"){include "page_podnikatele-firmy.php";}
elseif($url1=="pronajem-obecnich-prostor"){include "page_pronajem-obecnich-prostor.php";}
elseif($url1=="kontakty"){include "page_kontakty.php";}
else {include "page_home.php";}
?>
