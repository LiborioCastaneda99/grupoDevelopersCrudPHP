<?php
class Modelo
{
    private $Modelo;
    private $db;
    private $datos;
    public function __construct()
    {
        $this->Modelo = array();
        $this->db = new PDO('mysql:host=localhost;dbname=mvc', "root", "12345");
    }
    public function insertar($tabla, $data)
    {
        // Funciona para agregar los campos de las tablas
        if ($tabla == 'productos') {
            $campos = "nombre, marca, stock, precioEntrada, precioSalida";
        }

        $consulta = "insert into " . $tabla . " (" . $campos . ") values(" . $data . ")";
        $resultado = $this->db->query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    public function mostrar($tabla, $condicion)
    {
        $consul = "select * from " . $tabla . " where " . $condicion . ";";
        $resu = $this->db->query($consul);
        while ($filas = $resu->FETCHALL(PDO::FETCH_ASSOC)) {
            $this->datos[] = $filas;
        }
        return $this->datos;
    }

    public function actualizar($tabla, $data, $condicion)
    {
        $consulta = "update " . $tabla . " set " . $data . " where " . $condicion;
        $resultado = $this->db->query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
    public function eliminar($tabla, $condicion)
    {
        $eli = "delete from " . $tabla . " where " . $condicion;
        $res = $this->db->query($eli);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }
}
