<?php

session_start();
unset($_SESSION['id'], $_SESSION['nome'], $_SESSION['email']);

$_SESSION['msg'] = "deslogado com sucesso";
header("Location: loginadm.php");
//header("Location: login.php");