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
$cantidad=$_POST['cantidad'];
$nombre=$_POST['nombre'];
$marca=$_POST['marca'];
$costo=$_POST['costo'];
$proveedor=$_POST['proveedor'];


//Crear id
$result = mysql_query("SELECT id FROM inventario WHERE ID = (SELECT MAX( ID )FROM inventario)", $link); 
$row = mysql_fetch_array($result);
$id = $row["id"] + 1;
//select top 1
 
$sql = "INSERT INTO inventario (id, nombre, cantidad, marca, costo, proveedor) VALUES ('$id', '$nombre', '$cantidad', '$marca', '$costo', '$proveedor')";
$result = mysql_query($sql);
echo "<h1>Instrumentro agregado satisfactorimente</h1>";
echo "<p><br> ID: ".$id."<br><br> Nombre: ".$nombre."<br><br> Marca: ".$marca."<br><br> Cantidad: ".$cantidad."<br><br> Costo: ".$costo."<br><br>Proveedor: ".$proveedor."</p>";
?>
</center>
</body>
</html>
