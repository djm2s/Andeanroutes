<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];

if(isset($_POST['tourType'])){
    $tourType = $_POST['tourType'];
    switch ($tourType) {
        case 'Luxury and Exclusive':
            echo 'Luxury and Exclusive<br/>';
            break;
        case 'Family':
            echo 'Family<br/>';
            break;
		case 'Couple':
            echo 'Couple<br/>';
            break;
		case 'Económico':
            echo 'Económico<br/>';
            break;
        default:
            # code...
            break;
    }
}
$city =$_POST['city'];
$days =$_POST['days'];
$adultos =$_POST['adultos'];
$kids =$_POST['kids'];
$fecha =$_POST['date'];

$mensaje = $_POST['mensaje'];
$para = 'ventas@andeanexclusivetours.com';
$titulo = 'Pagina Web Andean Exclusive Tours';
$header = 'From: ' . $titulo;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Tipo de Tour: $tourType\n Ciudad: $city\n Días: $days\n Adultos: $adultos\n Niños: $kids\n Mensaje: $mensaje";
  
if ($_POST['submit']) 
    {
	if (mail($para, $titulo, $msjCorreo, $header)) 
		{
			echo "<script language='javascript'>
			alert('Message Sended! - Mensaje enviado!');
			window.location.href = 'https://andeanexclusive.com/book.html';
			</script>";
		} 
	else 
		{
			echo 'Falló el envio';
		}
	}
?>