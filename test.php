<?php

require 'lib/ServerClass.php';

//SEND POST REQUEST
$url="https://api.deezer.com/search";
$params=['q'=>'back to you'];
$response=Server::sendRequest($url,$params,'get',[]);


echo '<br><br>**** MADE BY ARASH ABEDI ****<br><br>GET REQUEST';

//DEEZER
echo '<pre>';
var_dump(json_decode($response,true));
echo '</pre>';

//dev pack