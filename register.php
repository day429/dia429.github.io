<?php

  $conexion = mysqli_connect("localhost","root","","base_alumnos");


  if (!$conexion) {
    die("ERROR DE CONEXION: " . mysqli_connect_error());
  }


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $edad = $_POST["edad"];
    $identidad = $_POST["identidad"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $sexo = $_POST["sexo"];
	$ciclo = $_POST["ciclo"];
	$carrera = $_POST["carrera"];
	$jornada = $_POST["jornada"];
	$seccion = $_POST["seccion"];  
	$nombre_padre = $_POST["nombre_padre"];
	$apellido_padre = $_POST["apellido_padre"];
	$telefono_padre = $_POST["telefono_padre"];
	$identidad_padre = $_POST["identidad_padre"];
	$profesion_padre = $_POST["profesion_padre"];  
	$nombre_madre = $_POST["nombre_madre"];
	$apellido_madre = $_POST["apellido_madre"];
	$telefono_madre = $_POST["telefono_madre"];
	$identidad_madre = $_POST["identidad_madre"]; 
	$profesion_madre = $_POST["profesion_madre"]; 

    $sql = "INSERT INTO pre_matricula (nombre, apellido, edad, identidad, fecha_nacimiento, sexo,ciclo,carrera,jornada,seccion,nombre_padre,apellido_padre,telefono_padre,identidad_padre,profesion_padre,nombre_madre,apellido_madre,telefono_madre,identidad_madre,profesion_madre)
    VALUES ('$nombre', '$apellido', '$edad', '$identidad', '$fecha_nacimiento', '$sexo','$ciclo','$carrera','$jornada','$seccion','$nombre_padre','$apellido_padre','$telefono_padre','$identidad_padre','$profesion_padre','$nombre_madre','$apellido_madre','$telefono_madre','$identidad_madre','$profesion_madre')";

  mysqli_query($conexion, $sql);
	  
	  
  echo "REGISTRO CON EXITO";	  
	 
	  } 
	  

mysqli_close($conexion);

?>
