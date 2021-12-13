<?php

if (isset($_POST['btningresar'])){
    $dbhost = "localhost:3308";
    $dbuser= "root";
    $dbpass = "";
    $dbname = "registros_estudiantes";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        if (!$conn) {
	        die("No hay conexion:".mysqli_connect_error());
        }
    $nombre = $_POST['txtusuario'];
    $pass = $_POST['txtpassword'];

    $query = mysqli_query($conn, "select * from usuarios where email='".$nombre."' and password='".$pass."'");
    $nr = mysqli_num_rows($query);

        if ($nr==1) {
	        header("Location: Pagina_pre-registro.html");
	        echo "Bienvenido:".$nombre;
        }
        elseif ($nr==0) {
	    echo "Usuario y/o contraseña no valido";
	    header("Location: Login.html");
        }

}

if (isset($_POST['btnregistrar'])){
    header("Location: Form_Registro.html");
}



?>