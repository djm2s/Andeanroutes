<?php 
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$adultos=$_POST['adultos'];
$child=$_POST['child'];
$da=$_POST['da'];
$do=$_POST['do'];
$Hotel=$_POST['hotel'];
$mensaje=$_POST['mensaje'];

$ToursElegidos='';
if(isset($_POST['tours'])){
	foreach($_POST['tours'] as $valor){
		$ToursElegidos=$ToursElegidos .' - '. $valor;
	}
}

$ciudadPeru='';
if(isset($_POST['ciudades'])){
	foreach($_POST['ciudades'] as $ciudad){
		$ciudadPeru=$ciudadPeru .' - '. $ciudad;
	}
}

$para='operaciones@andeanexclusive.com';
	$titulo='Pagina web AET';
	$header='FROM: ' . $titulo;
	$msjCorreo = "Nombre: $nombre\n 
	E-Mail: $email\n 
	Adultos: $adultos\n 
	Niños: $child\n 
	Day arrive: $da\n 
	Day Out: $do\n 
	Actividades elegidas: $ToursElegidos\n
	Ciudades elegidas: $ciudadPeru\n
	Tipo de acomodacion preferida: $Hotel\n
	Mensaje: $mensaje";
if($_POST['submit']){
	if(mail($para, $titulo, $msjCorreo, $header)){
		echo "<script language='javascript'>
			alert('Message Sended! - Mensaje enviado!');
			window.location.href = 'https://andeanexclusive.com/formulario.php';
			</script>";
		} 
	else 
		{
			echo 'Falló el envio';
		}
	}
?>

