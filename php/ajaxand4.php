<?php
error_reporting(0);
session_start();
ob_start();
/*
echo $_SESSION['p1'];
echo $_SESSION['p2'];
echo $_SESSION['umbral'];
echo $_POST['X1'];
echo $_POST['X2']."<br>";
*/
$fun_act = (($_SESSION['p1']*$_POST['X1'])+($_SESSION['p2']*$_POST['X2'])+($_SESSION['p3']*$_POST['X3'])+($_SESSION['p4']*$_POST['X4']))-$_SESSION['umbral'];


if ($_POST['X1'] != 0 && $_POST['X1']  != 1 || $_POST['X2'] != 0 && $_POST['X2'] != 1 || $_POST['X3'] != 0 && $_POST['X3'] != 1 || $_POST['X4'] != 0 && $_POST['X4'] != 1) {
 echo "Error: porfavor asegurese de que ambos valores sean (1 o 0)";
}else {
    
if ($fun_act>=0) {
    echo "VALOR ESPERADO = 1";
}elseif ($fun_act<0) {
    echo "VALOR ESPERADO = 0";
}
}
?>


