<?php
session_start();



if (!isset($_COOKIE['visits'])) $_COOKIE['visits'] = 0;
$visits = $_COOKIE['visits'] + 1;
setcookie('visits',$visits,time()+3600*24*365);

if(isset($_SESSION['view']))
{
    $_SESSION['view']=$_SESSION['view']+1;
}
else
{
    $_SESSION['view']=1;
}

$thistimevisits = $_SESSION['view'];

include "view.html";


?>
