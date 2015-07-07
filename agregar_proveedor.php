<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<link rel=stylesheet href="stilos_site.css" type="text/css">
</head>

<body bgcolor="#FFFFFF">
<center>
<?php	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 		 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 
// process form
//Conexion a MySQL
include ("conexion.php");
//Conexion a MySQL

//trae los valores del form
$nombre=$_POST['nombre'];
$tipo=$_POST['tipo'];
$producto=$_POST['producto'];
$provincia=$_POST['provincia'];

//Crear id
$result = mysql_query("SELECT id FROM proveedores WHERE ID = (SELECT MAX( ID )FROM proveedores)", $link); 
$row = mysql_fetch_array($result);
$id = $row["id"] + 1;
//select top 1

echo "<p>Proveedor agregado satisfactorimente: <br> ID: ".$id."<br>Nombre: ".$nombre."<br> Provincia: ".$provincia."</p>";

//select top 1 
$sql="";
$sql = "INSERT INTO proveedores (id, nombre, tipo, producto, ubicacion) VALUES ('$id', '$nombre', '$tipo', '$producto', '$provincia')";
$result=mysql_query($sql);

?>
</center>
</body>
</html>
