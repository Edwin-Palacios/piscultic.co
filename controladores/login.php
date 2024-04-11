<?php

require_once('../modelo/login.php');
// require_once('../modelo/registro.php');

if($_POST){
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $perfil = "bagre";
    if($usuario == null OR $contrasena == null){
        header('location: ../vista/index.html');
    }
    $modelo = new usuario();
    // $modeloP = new cuenta();
    $modelo_cuenta = $modelo->logins($usuario, $contrasena);
    // $modelo_usuario = $modelo->usuarioss($usuario, $contrasena);
    // $modelo_personaje = $modelo->personaje($usuario);
    // if($_SESSION['id_cuenta_personaje'] == null AND $_SESSION['id_usuario_personaje'] == null){
    //     $id_cuenta =$_SESSION['id_cuenta'];
    //     $id_usuario = $_SESSION['id_usuario'];
    //     $id_personaje = $_SESSION['id_personaje'];
    //     // $modeloP->personajes_registro($id_personaje, $id_cuenta, $id_usuario);

    // }else{
    //     echo "hola mundo";
    // }
        // echo "Cuenta " . $_SESSION['nombre_cuenta'] . "</br>";
        // echo "Usuario " . $_SESSION['nombre_usuario'];
    // echo "hola mundo primero";
    header('location: ../vista/vista-sala-juego.php');
}else{
    header('location: ../vista/index.html');
}


?>

<!-- INSERT INTO `personaje` (`id_personaje`, `id_cuenta`, `id_usuario`, `usuario`,
 `nombre_personaje`, `rango`, `nivel`, `monedas`, `notificaciones`, `mensajes`)
  VALUES (NULL, '28', '26', 'he', '', '', '', '', '', '');

  INSERT INTO `personaje` (`id_personaje`, `id_cuenta`, `id_usuario`, `usuario`,
   `nombre_personaje`, `rango`, `nivel`, `monedas`, `notificaciones`, `mensajes`)
    VALUES (NULL, '28', '26', 'he', '', '', '', '', '', ''); -->

<!-- 

    if(true){
        $id_cuenta = $_SESSION['id_cuenta'];
        $modelo_personaje = $modelo->personaje($id_cuenta);
        if($_SESSION['id_personaje'] == null && $_SESSION['id_cuenta_personaje'] == null && $_SESSION['id_usuario_personaje'] == null && $_SESSION['usuario_personaje'] == null){
        
            $usuario_perfil = $_SESSION['usuario_cuenta'];
            
            $id_usuario = $_SESSION['id_usuario'];
            $rango= null;
            $nivel = null;
            $monedas = null;
            $notificaciones = null;
            $mensajes = null;
            $id_personaje = null;
            
            $modeloPerfil->personajes_registro($id_personaje, $id_cuenta, $id_usuario, $usuario_perfil, $perfil, $rango, $nivel, $monedas, $notificaciones, $mensajes);
            if(true){
                $modelo_personaje = $modelo->personaje($id_cuenta);
                echo  $_SESSION['id_personaje'];
                echo  $_SESSION['id_cuenta_personaje'];
                echo  $_SESSION['id_usuario_personaje'];
                echo  $_SESSION['usuario_personaje'];
                echo  $_SESSION['personaje'];
                echo  $_SESSION['rango'];
                echo  $_SESSION['nivel'];
                echo  $_SESSION['monedas'];
                echo  $_SESSION['notificaciones'];
                echo  $_SESSION['mensajes'];
        }else{
            echo "Hola Mundo";
        }

    }
    
    // echo $modelo->getIdCuentaPersonaje() . "  y tambien " . $modelo->getIdUsuarioPersonaje(); -->
    
