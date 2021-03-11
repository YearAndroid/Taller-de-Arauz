<?php

require "indexH.html";

$nombre = $_POST['nombre'];
$cantidad =$_POST['cantidad'];

$i = 0;

 while($i < $cantidad){
     echo $nombre. "<br/> " ;
     $i++;
 }
