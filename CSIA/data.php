<?php

$serverName = "localhost";
$dBUsername = "id18215526_listeningplatform";
$dBPassword = "F(+3YLGuB+2|97YJ";
$dBName = "id18215526_csia";

// $serverName = "sql202.epizy.com";
// $dBUsername = "epiz_30722674";
// $dBPassword = "hpkU09WhduU5P";
// $dBName = "epiz_30722674_CSIA";

// F(+3YLGuB+2|97YJ

$conn = mysqli_connect($serverName, $dBUsername,$dBPassword,$dBName);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
