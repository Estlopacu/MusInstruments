<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<link rel=stylesheet href="stilos_site.css" type="text/css">
</head>

<body>
<center>
<?php	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 		 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	  
include ("conexion.php");

$buscar=$_POST['T1'];
echo"<h1>Agregar instrumento</h1>";
if ($buscar==""){//Isset busca valores nulos!!!!!!! 
      echo "<p>Debe especificar un id de inventario para buscar</p>"; 
      echo "?></html></body> \n"; 
      exit; 
} 
else
{echo "<p>La busqueda para el id  ".$buscar." arrojo la siguiente seleccion.</p>";}

$result = mysql_query("SELECT * FROM inventario WHERE id LIKE '%$buscar%' ORDER BY id", $link); 
if ($row = mysql_fetch_array($result))	{ 
      echo "<table border = '1'>"; 
//Mostramos los nombres de las tablas 
echo "<tr>"; 
while ($field = mysql_fetch_field($result)){ 
            echo "<td>$field->name</td> \n"; 
} 
      echo "</tr>"; 
do { 
            echo "<tr>"; 
            echo "<td>".$row["id"]."</td> \n"; 
            echo "<td>".$row["nombre"]."</td> \n"; 
            echo "<td>".$row["marca"]."</td> \n"; 
            echo "<td>".$row["cantidad"]."</td> \n"; 
			echo "<td>".$row["costo"]."</td> \n";
			echo "<td>".$row["proveedor"]."</td> \n"; 
            echo "</tr> \n"; 
      } while ($row = mysql_fetch_array($result)); 
            echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?> 
</center
</body>
</html>
