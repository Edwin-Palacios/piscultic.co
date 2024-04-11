<?php
require_once('../recursos/conexion.php');
// session_start();


class cuenta extends conexion{

    public function __construct(){
        $this->db = parent::__construct();
    }
    

    public function cuenta($nombre, $apellido, $usuario_cuenta, $contrasena, $correo, $f_nacimiento, $f_h_u_c, $foto_perfil, $fecha_creacion_cuenta){

        $statement = $this->db->prepare("INSERT INTO cuenta(nombre, apellido, cuenta_nombre_usuario, contrasena, correo, fecha_nacimiento, fecha_hora_ultima_conexion, foto_perfil, fecha_creacion_cuenta) VALUES (:nombre, :apellido, :usuario_cuenta, :contrasena, :correo, :f_nacimiento, :f_h_u_c, :foto_perfil, :fecha_creacion_cuenta)");
         $statement->bindParam(':nombre', $nombre);
         $statement->bindParam(':apellido', $apellido);
         $statement->bindParam(':usuario_cuenta', $usuario_cuenta);
         $statement->bindParam(':contrasena', $contrasena);
         $statement->bindParam(':correo', $correo);
         $statement->bindParam(':f_nacimiento', $f_nacimiento);
         $statement->bindParam(':f_h_u_c', $f_h_u_c);
         $statement->bindParam(':foto_perfil', $foto_perfil);
         $statement->bindParam(':fecha_creacion_cuenta', $fecha_creacion_cuenta);
         
         if($statement->execute()){
            $statement = $this->db->prepare("SELECT * FROM cuenta WHERE cuenta_nombre_usuario = :usuario_cuenta AND contrasena = :contrasena");
            $statement->bindParam(':usuario_cuenta', $usuario_cuenta);
            $statement->bindParam(':contrasena', $contrasena);
            $statement->execute();
            if($statement->rowCount() == 1){
                $resul = $statement->fetch();
                $_SESSION['id_cuenta'] = $resul['id_cuenta'];
                $_SESSION['usuario'] = $resul['cuenta_nombre_usuario'];
                $_SESSION['contrasena'] = $resul['contrasena'];
                $_SESSION['foto_perfil'] = $resul['foto_perfil'];
            return true; 
        }
         }else{
            ?>
            <script type="text/javascript">

                function mostrar(){
                    alert('HOLA MUNDO');

                }

            </script>
            <?php
         }
    }

    public function usuarios($id_cuenta, $usuario, $contrasena_usuario, $estado, $f_p){
        $statement = $this->db->prepare("INSERT INTO usuarios(id_cuenta, nombre_usuario, contrasena, estado, f_p) VALUES (:id_cuenta, :usuario, :contrasena_usuario, :estado, :f_p)");
        $statement->bindParam(':id_cuenta', $id_cuenta);
        $statement->bindParam(':usuario', $usuario);
        $statement->bindParam(':contrasena_usuario', $contrasena_usuario);
        $statement->bindParam(':estado', $estado);
        $statement->bindParam(':f_p', $f_p);

        if($statement->execute()){
            $statement = $this->db->prepare("SELECT cu.id_cuenta, cu.cuenta_nombre_usuario, cu.fecha_hora_ultima_conexion, cu.foto_perfil, us.id_usuario, us.nombre_usuario FROM cuenta cu INNER JOIN usuarios us ON cu.id_cuenta = us.id_cuenta WHERE nombre_usuario = :usuario");
            $statement->bindParam(':usuario', $usuario);
            $statement->execute();
            if($statement->rowCount() == 1){
                $result = $statement->fetch();
                $_SESSION['id_cuenta'] = $result['id_cuenta'];
                $_SESSION['id_usuario'] = $result['id_usuario'];
                $_SESSION['usuario_cuenta'] = $result['cuenta_nombre_usuario'];
                $_SESSION['usuario'] = $result['nombre_usuario'];
                $_SESSION['fecha_hora_ultima_conexion'] = $result['fecha_hora_ultima_conexion'];
                $_SESSION['foto_perfil'] = $result['foto_perfil'];
                return true;
            }
         }else{
            echo "ha ocurrido un error, verifique su  usuario";
         }
    }


    public function personajes($id_cuenta, $id_usuario, $usuario, $f_h_u_c){

        $statement = $this->db->prepare("INSERT INTO personaje(id_cuenta, id_usuario, usuario, f_h_u_c ) VALUES (:id_cuenta, :id_usuario, :usuario, :f_h_u_c)");
        $statement->bindParam(':id_cuenta', $id_cuenta);
        $statement->bindParam(':id_usuario', $id_usuario);
        $statement->bindParam(':usuario', $usuario);
        $statement->bindParam(':f_h_u_c', $f_h_u_c);
        $statement->execute();

    }



}


?>