<?php
    
   function registrar(){
    
    $conexion = mysqli_connect("localhost", "root", "", "cedula") or
    die("Problemas con la conexión");

    mysqli_query($conexion, "insert into datos_cedu (id, nombre, apellido, lugar_nacimiento, nacionalidad, ocupacion, fecha_nacimiento, estado_civil, tipo_sangre, sexo) values 
                       ('$_REQUEST[cedula]','$_REQUEST[user_name_nom]','$_REQUEST[apellido]','$_REQUEST[naci]','$_REQUEST[nacion]','$_REQUEST[ocupac]','$_REQUEST[nacim]','$_REQUEST[user_name]','$_REQUEST[select_sangre]','$_REQUEST[select_s]');")
    or die("Problemas en el select" . mysqli_error($conexion));

    mysqli_close($conexion);

   echo "Datos ingresados... Adios";
    
   }

  
    


?>