<?php 
session_start();
 
if(!isset($_SESSION["ID"]) || $_SESSION["NAME"] !== true){
    header("location: login.php");
    exit;
}

?>