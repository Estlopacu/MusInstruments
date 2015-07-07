<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<?php	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 		 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 
// process form
//conexion bd
$link = mysql_connect("localhost", "root", "esteban"); 
mysql_select_db("so_db", $link);
//conexion bd 

//trae los valores del form
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];

$sql = "INSERT INTO agenda (nombre, direccion, telefono, email) ".
  "VALUES ('$nombre', '$direccion', '$telefono', '$email')";
$result = mysql_query($sql);
echo "¡Gracias! Hemos recibido sus datos.\n";

?>

</body>
</html>
