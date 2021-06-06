<?php
session_start();
// checando sessão
if (!isset($_SESSION["log"])){
    $_SESSION["log"]=false;
    // redirecionando, caso não esteja logado
}
if ($_SERVER["REQUEST_URI"] != "/index.php" and $_SESSION["log"] == false){
    header("location: ../login.php");

}
?>