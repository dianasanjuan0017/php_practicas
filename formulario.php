<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $usuario = $_POST['usuario'];
   $password = $_POST['password'];
   $edad = $_POST['edad'];
   
  
   if (empty($usuario) || empty($password) || empty($edad)) {
       echo  "Todos los campos son obligatorios";
   }

   if (!is_numeric($edad) || $edad < 18) {
       echo "Debe ser mayor de edad, la edad debe ser un número";
   }

   if ($usuario !== "luis" || $password !== "mendoza") {
      echo "Usuario o contraseña incorrectos";
   }
   else
   {
      echo "bienvenido";
   }


}

?>