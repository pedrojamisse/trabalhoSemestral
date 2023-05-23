<?php
include_once '../modelo/usuario.php';
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];

$usuario = new Usuario();
$usuario ->login($user,$pass);

if (!empty($_SESSION['tipo_us'])) {
    switch ($_SESSION['tipo_us']) {
        case 1:
            header('Location:../view/adm_catalogo.php');
            break;
        case 2:
            header('Location:../view/tec_catalogo.php');
            break;
    }
} else {
    $objectos = $usuario->login($user, $pass);
    if (!empty($objectos)) {
        foreach ($objectos as $objecto) {
            $_SESSION['pk_usuario'] = $objecto->pk_usuario;
            $_SESSION['tipo_us'] = $objecto->tipo_us;
            $_SESSION['nome'] = $objecto->nome;
        } 
        switch ($_SESSION['tipo_us']) {
            case 1:
                header('Location:../view/adm_catalogo.php');
                break;
            case 2:
                header('Location:../view/tec_catalogo.php');
                break;
        }
    } else {
        header('Location:../view/login.php');
    }
}
?>
