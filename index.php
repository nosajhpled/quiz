<?php
//print_r($_REQUEST);
$class =array_keys($_GET)[0];
$post = array_splice($_POST,0);
print_r($post);
if (!file_exists('./controller/'.$class.'.php')) { die('No file.');}
include('./controller/'.$class.'.php');
$i = new $class();
$i->go($post);
die();
?>
