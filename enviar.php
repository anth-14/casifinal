<?php
//Declaracion de variables del formulario
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$telefono = $_POST['Telefono'];
$direccion = $_POST['Direccion'];
$email = $_POST['Email'];
$mensajes = $_POST['Mensajes'];

//Datos del Email.
$para = 'mh16022@clases.edu.sv';
$titulo = 'S&S Solicitud de Compras';
$header = 'From:'.$email;
$msjCorreo = "Nombre: $nombre\n Apellido: $apellido\n Telefono: $telefono\n Direccion: $direccion\n E-Mail: $email\n Mensajes:\n $mensajes";
if($_POST['submit']){
    if (mail($para, $titulo, $msjCorreo, $header)){
        echo "<script lenguaje='javascript'>
        alert('Mensaje enviado, muchas gracias por contactar con nosotros.');
        </script>";
    }else{
        echo 'Fallo el envio';
    }
}  
?>