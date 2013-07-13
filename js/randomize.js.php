<?php 
header("Content-Type: application/javascript");
$curl = curl_init("http://www.random.org/sequences/?min=0&max=9&col=1&format=plain&rnd=new");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
$result = str_replace("\n", ",", trim($result));
?>
var arr = new Array(<?php echo $result;?>);
<?php
$curl = curl_init("http://www.random.org/integers/?num=10&min=0&max=1&col=1&base=10&format=plain&rnd=new");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
$result = str_replace("\n", ",", trim($result));
?>
var random_bit = new Array(<?php echo $result;?>);
var switches = new Array();
<?php for($i=1; $i<=10; $i++):?>
switches.push($("#switch<?php echo $i;?>"));
<?php endfor;?>