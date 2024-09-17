<?php
include 'conexion.php';
class Poste {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function obtenerPoste($id)
    {
        // Realiza una consulta SQL
        $query = "SELECT * FROM poste where id=".$id."";
        $resultado = $this->conexion->query($query);

        if ($resultado)
         {
            $usuario = $resultado->fetch_assoc();
            $resultado->free(); // Liberar el resultado
            return $usuario;
        }
         else {
            echo "Error al listar poste: " . $this->conexion->error;
            return null;
        }

       
    }
    public function listarUsuarios() {
        $poste = array();

        // Realiza una consulta SQL
        $query = "SELECT * FROM poste";
        $resultado = $this->conexion->query($query);

        if ($resultado) {
            while ($fila = $resultado->fetch_assoc()) {
                $poste[] = $fila;
            }
            $resultado->free(); // Liberar el resultado
        } else {
            echo "Error al listar poste: " . $this->conexion->error;
        }

        return $poste;
    }

    public function agregarPoste($direccion, $departamento, $municipio, $referencia, $longitud) {
        $query = "INSERT INTO poste (direccion, departamento, municipio, referencia, longitud) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conexion->prepare($query);
    
        $stmt->bind_param("sssss", $direccion, $departamento, $municipio, $referencia, $longitud);
    
        if ($stmt->execute()) {
            return true;
        } else {
            echo "Error al agregar poste: " . $stmt->error;
            return false;
        }
    }
    
}
?>
