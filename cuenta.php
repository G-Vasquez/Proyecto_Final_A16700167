<?php

if (isset($_POST['btncrear'])){
    $dbhost = "localhost:3308";
    $dbuser= "root";
    $dbpass = "";
    $dbname = "registros_estudiantes";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    if ($conn->connect_error) {
        echo "Usuario y/o contraseña no valido";	
        die("No hay conexion:".$conn->connect_error);
    }

    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $correo=$_POST['correo'];
    $password=$_POST['password'];
    $password2=$_POST['password2'];

    $sql = "insert into usuarios (nombres, apellidos, email, password, password2) values ('".$nombre."', '".$apellidos."', '".$correo."', '".$password."', '".$password2."')";

    if(mysqli_query($conn, $sql)){
	echo "Registrado";
    header("Location: Form_Registro.html");
    }
    else{
	echo "Error";
    }
    $conn->close();

}

?>