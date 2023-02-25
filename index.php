<?php
include_once 'includes/user.php';
include_once 'includes/user_session.php';
include_once 'parametros.php';


$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    $user->setUser($userSession->getCurrentUser());
    include_once 'vistas/dashboard/home.php';

}else if(isset($_POST['username']) && isset($_POST['password'])){
    
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    $user = new User($userForm);
    if($user->userExists($userForm, $passForm)){
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
        //$userSession->setCurrentRol($user->getRol());
        include_once 'vistas/dashboard/home.php';
    }else{
        $errorLogin = "Usuario y/o password incorrecto!";
        include_once 'vistas/usuarios/login.php';
    }
}else{
    include_once 'vistas/usuarios/login.php';
}
?>