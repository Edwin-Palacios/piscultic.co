<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
require_once('../modelo/registro.php');
require_once('registro.php');

if($_POST){
    $modelo = new cuenta();
   
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $usuario_cuenta=$_POST['usuario'];
    $contrasena=$_POST['contrasena'];
    $rep_password=$_POST['rep_contrasena'];
    $correo=$_POST['correo'];
    $f_nacimiento=$_POST['fecha_naci'];
    $foto_perfil=$_POST['foto_perfil'];
    $fecha_creacion_cuenta=4;
    $f_h_u_c = 0;
    $estado = "Activo";
    
    if($contrasena == $rep_password){

        $modelocuenta = $modelo->cuenta($nombre, $apellido, $usuario_cuenta, $contrasena, $correo, $f_nacimiento, $f_h_u_c, $foto_perfil, $fecha_creacion_cuenta);
        // $modeloUsuario = $modelo->usuarios($usuario, $contrasena, $estado);
        // $modeloPerfil = $modelo->personajes($usuario);
        // $modeloSeleccionarCuenta= $modelo->getCuenta($usuario_cuenta, $contrasena);
        //     $id_cuenta = $_SESSION['id_cuenta'];
        //     $usuario = $_SESSION['usuario'];
        //     $contrasena = $_SESSION['contrasena'];
        // if($id_cuenta != null and $usuario != null and $contrasena != null){
            
        //     $modeloUsuario = $modelo->usuarios($usuario, $contrasena, $estado);
        //     $modeloSeleccionarUsuario->getUsuario($usuario, $contrasena);
        // }
        $f_p = $_SESSION['foto_perfil'];
        $id_cuenta = $_SESSION['id_cuenta'];
        $usuario = $_SESSION['usuario'];
        $contrasena_usuario = $_SESSION['contrasena'];
        $modeloUsuario = $modelo->usuarios($id_cuenta, $usuario, $contrasena_usuario, $estado, $f_p);
         
            $_SESSION['usuario_cuenta'];
            $_SESSION['usuario'];
            
           
            if( $_SESSION['usuario_cuenta'] == $_SESSION['usuario']){
                $id_cuenta = $_SESSION['id_cuenta'];
                $id_usuario = $_SESSION['id_usuario'];
                $usuario = $_SESSION['usuario_cuenta'];
                // echo $_SESSION['usuario'];
                $f_h_u_c = $_SESSION['fecha_hora_ultima_conexion'];
                $modeloPersonaje = $modelo->personajes($id_cuenta, $id_usuario, $usuario, $f_h_u_c);

                // echo "Lo lograste";
                header('location: ../vista/vista-sala-juego.php');

            }

        // if($id_cuenta != null AND $usuario != null AND $contrasena_usuario != null){
        //     $modeloUsuario = $modelo->usuarios($id_cuenta, $usuario, $contrasena_usuario, $estado);
        //     echo   $a = $_SESSION['id_cuenta'];
        //     echo   $b = $_SESSION['id_usuario'];
        //     echo   $c = $_SESSION['usuario'];
        //     echo   $d = $_SESSION['id_usuario'];
        //     echo   $d = $_SESSION['foto_perfil'];


        // }
        



        // header('location: ../index.html');
           
    }else{
        ?><!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script type="text/javascript" src="../recursos/js/alerta.js"></script>
            <title>Document</title>
        </head>
        <body>
        <script>
                alerta();
        </script>

        </body>
        </html>
        <?php

        
    }

}


?>

<!-- 
        <input type="text" id="nom" name="nombre">
        <label for="ape">Apellidos</label>
        <input type="text" id="ape" name="apellido">
        <label for="usu">Nombre de Usuario</label>
        <input type="text" id="usu" name="usuario">

        <label for="pass">Contraseña</label>
        <input type="password" id="pass" name="contrasena">

        <label for="rp_pass">Repetir contraseña</label>
        <input type="password" id="rp_pass" name="rep_contrasena">

        <label for="cor">Correo</label>
        <input type="email" id="cor" name="correo">

        <label for="f_n">Fecha de Nacimiento</label>
        <input type="date" id="f_n" name="fecha_naci">

        <label for="f_per">Foto de perfil</label>
        <input type="text" id="f_per" name="foto_perfil">

        
        <input type="datetime"  name="nombre_usuario" value="$fecha_creacion_cuenta"> -->

       <?php
       



       ?>