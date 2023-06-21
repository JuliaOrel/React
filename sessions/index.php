<?php
session_start();
$user_name="Alex";
//setcookie("user_name", $user_name, time()+60);
echo $_COOKIE["user_name"];

setcookie("user_name", $user_name, time()-60);
echo $_COOKIE["user_name"];

