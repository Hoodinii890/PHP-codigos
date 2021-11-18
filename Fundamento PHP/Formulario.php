<?php
$Name = $_POST['nombre'];
$Last_name = $_POST['apellido'];
$email = $_POST['email'];
session_start();
if (!isset($_SESSION['Valida'])) {
    $_SESSION['Valida'] = ["nombre" => $Name, "apellido" => $Last_name, "email" => $email];
    print_r($_SESSION['Valida']);
}elseif(isset($_SESSION['Valida'])){
    echo "hola"
}
