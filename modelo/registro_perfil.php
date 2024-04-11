<?php
require_once('../recursos/conexion.php');
// session_start();


class registro_perefil extends conexion{

    public function __construct(){
        $this->db = parent::__construct();
    }
    
    // INSERT INTO `personaje` (`id_personaje`, `id_cuenta`, `id_usuario`, `usuario`,
    // `nombre_personaje`, `rango`, `nivel`, `monedas`, `notificaciones`, `mensajes`)
    //  VALUES (NULL, '28', '26', 'he', '', '', '', '', '', '');
   
    //  INSERT INTO `personaje` (`id_personaje`, `id_cuenta`, `id_usuario`, `usuario`,
    //   `nombre_personaje`, `rango`, `nivel`, `monedas`, `notificaciones`, `mensajes`)
    //    VALUES (NULL, '28', '26', 'he', '', '', '', '', '', '');
    
    public function personajes_registro($id_personaje, $id_cuenta, $id_usuario){

        $statement = $this->db->prepare("UPDATE personaje SET id_cuenta = :id_cuenta, id_usuario = :id_usuario WHERE id_personaje = :id_personaje");
        $statement->bindParam(':id_personaje', $id_personaje);
        $statement->bindParam(':id_cuenta', $id_cuenta);
        $statement->bindParam(':id_usuario', $id_usuario);
        
        if($statement->execute()){
            // header('location: ../../index.html');
            echo "Felicitaciones, ya creaste el personaje";
        }

    }

}


?>