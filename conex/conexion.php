<?php
class Conexion {
    public function conectar() {
        $host    = "localhost";
        $user    = "root";
        $pass    = "Tata112823";
        $bd_name = "matronas";

        $link = mysqli_connect($host, $user, $pass, $bd_name);
        if (!$link) {
            die("Error al conectar: " . mysqli_connect_error());
        }
        mysqli_set_charset($link, "utf8");
        return $link;
    }
}
?>