<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<link rel=stylesheet href="stilos_site.css" type="text/css">


</head>
<body>
<p><center><h2>Agregue su comentario, no nos hacemos responsables de los q ponga!!<h2></center><br></p>
<center>
<form method="post" action="agregar_comentario.php">
  <table width="200" border="0">
    <tr>
    <td>Usuario:</td>
    <td><input type="text" name="usuario" /></td>
  </tr>
   
   <tr><td>Instrumento</td>
  <td> 
    	<?php	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 		 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 
include ("conexion.php");

$collumn = "nombre"; // Set which collumn to be retrieved.

$table = "inventario"; // Set which table to retrieve collumn from.

$query="SELECT $collumn FROM $table";

$result = mysql_query($query);

// echo the select tag:

echo "<select name=\"instrumento\">";

// Lets loop through the result:

while($row = mysql_fetch_array($result)) {

  echo "<option value=\"$row[nombre]\">$row[nombre]</option><br/>\r\n";

}

// echo the closure of the select tag:

echo "</select>"; 
?>
</td>
  </tr>
<tr>
    <td>Comentario</td>
    <td><textarea name="comentario" rows="5" cols="60">
</textarea></td>
  </tr>
  
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="enviar" value="Aceptar información" /></td>
  </tr>
</table>
<p>&nbsp;</p>
</form>
</center>

</body>
</html>
