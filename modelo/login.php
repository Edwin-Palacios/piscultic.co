<?php
require_once('../recursos/conexion.php');
session_start();
class usuario extends conexion{

    public function __construct(){
        $this->db = parent::__construct();
    }


    public function logins($usuario, $contrasena){
        $statement = $this->db->prepare("SELECT * FROM cuenta WHERE cuenta_nombre_usuario = :usuario AND contrasena = :contrasena");
        $statement->bindParam(':usuario', $usuario);
        $statement->bindParam(':contrasena', $contrasena);
        
        if($statement->execute()){

            $statement = $this->db->prepare("SELECT cu.id_cuenta, cu.nombre, cu.apellido, cu.cuenta_nombre_usuario, cu.fecha_hora_ultima_conexion,
                                            cu.foto_perfil, us.id_usuario, us.nombre_usuario, us.estado, us.f_p, per.id_personaje, per.usuario,
                                            per.nombre_personaje, per.rango, per.nivel, per.puntos, per.notificaciones, per.mensajes, per.f_h_u_c
                                            FROM cuenta cu
                                            INNER JOIN usuarios us ON cu.id_cuenta = us.id_cuenta
                                            INNER JOIN personaje per ON cu.id_cuenta = per.id_cuenta AND us.id_usuario = per.id_usuario
                                            WHERE cuenta_nombre_usuario = :usuario");
                $statement->bindParam(':usuario', $usuario);
                $statement->execute();
                if($statement->rowCount() == 1){
                    $result = $statement->fetch();
                    $_SESSION['id_cuenta'] = $result['id_cuenta'];
                    $_SESSION['id_usuario'] = $result['id_usuario'];
                    $_SESSION['id_personaje'] = $result['id_personaje'];
                    $_SESSION['nombre_cuenta_usuario'] = $result['cuenta_nombre_usuario'];
                    $_SESSION['nombre_usuario'] = $result['nombre_usuario'];
                    $_SESSION['nombre_personaje_usuario'] = $result['usuario'];
                    $_SESSION['nombre_cuenta'] = $result['nombre'] . " " . $result['apellido'];
                    $_SESSION['foto_perfil_cuenta'] = $result['foto_perfil'];
                    $_SESSION['foto_perfil_usuario'] = $result['f_p'];
                    $_SESSION['estado'] = $result['estado'];
                    $_SESSION['nombre_personaje'] = $result['nombre_personaje'];
                    $_SESSION['rango'] = $result['rango'];
                    $_SESSION['nivel'] = $result['nivel'];
                    $_SESSION['monedas'] = $result['puntos'];
                    $_SESSION['notificaciones'] = $result['notificaciones'];
                    $_SESSION['mensajes'] = $result['mensajes'];
                    
                    return true;

                }
                

        }else{
            return false;
        }
    }


    

    public function getIdCuenta(){
        return $_SESSION['id_cuenta'];
    }
    public function getIdUsuario(){
        return $_SESSION['id_usuario'];
    }

    public function getIdPersonaje(){
        return $_SESSION['id_personaje'];
    }

    public function getNombreCuentaUsuario(){
        return $_SESSION['nombre_cuenta_usuario'];
    }

    public function getNombreUsuario(){
        return $_SESSION['nombre_usuario'];
    }

    public function getNombrePersonajeUsuario(){
        return $_SESSION['nombre_personaje_usuario'];
    }

    public function getNombreCuenta(){
        return $_SESSION['nombre_cuenta'];
    }

    public function getFotoPerfilCuenta(){
        return $_SESSION['foto_perfil_cuenta'];
    }

    public function getFotoPerfilUsuario(){
        return $_SESSION['foto_perfil_usuario'];
    }

    public function getEstado(){
        return $_SESSION['estado'];
    }

    public function getNombrePersonaje(){
        return $_SESSION['nombre_personaje'];
    }

    public function getRango(){
        return $_SESSION['rango'];
        
    }

    public function getNivel(){
        return $_SESSION['nivel'];
    }

    public function getMonedas(){
        return $_SESSION['monedas'];
    }

    public function getNotificaciones(){
        return $_SESSION['notificaciones'];
    }
    public function getMensajes(){
        return $_SESSION['mensajes'];
    }
    

    


    public function validarSession(){
        if($_SESSION['id_cuenta'] == null && $_SESSION['id_usuario'] == null && $_SESSION['id_personaje'] == null){
            header('location:../vista/index.html');
        }else if($_SESSION['nombre_cuenta_usuario'] == $_SESSION['nombre_usuario'] AND $_SESSION['nombre_usuario'] == $_SESSION['nombre_personaje_usuario'] AND $_SESSION['nombre_personaje_usuario'] == $_SESSION['nombre_cuenta_usuario']){
            echo "cuenta validada";
        }
    }

    // public function validarSessionUsuario(){
    //     if($_SESSION['id'] != null){
    //         if($_SESSION['perfil'] == true){
    //             header('location:../../interfaz/pages/index.php');
    //         }else{
    //             header('location: ../../index.html');
    //         }
    //     }
    // }

    public function cerrarSession(){
        $_SESSION['id_cuenta'] = null;
        $_SESSION['id_usuario'] = null;
        $_SESSION['id_personaje'] = null;
        $_SESSION['nombre_cuenta_usuario'] = null;
        $_SESSION['nombre_usuario'] = null;
        $_SESSION['nombre_personaje_usuario'] = null;
        $_SESSION['nombre_cuenta'] = null;
        $_SESSION['estado'] = "desconectado";
        return session_destroy();
        
    }

}
?>