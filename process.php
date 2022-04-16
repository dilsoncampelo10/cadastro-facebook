<?php
session_start();

$login = filter_input(INPUT_POST,'login',FILTER_SANITIZE_SPECIAL_CHARS);
$pass = filter_input(INPUT_POST,'pass');


echo $login;
echo $pass;

if($login && $pass){
   $_SESSION["login"] = "$login";
   
    header("Location: index.php");
    exit;

echo $_SESSION["login"];
   exit;
} else{
    echo "nao";
}
