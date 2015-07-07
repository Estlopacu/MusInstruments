<html>
<link rel=stylesheet href="stilos_site.css" type="text/css">

<body>
<center>

<?php	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 		 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	  
include ("conexion.php");

$id=$_POST['id']; 

//ver si esta el dato echo "ID: ".mysql_result($result, 0, "id")."<br>"; 
   $sql = "SELECT id from inventario WHERE id=$id";
   $result = mysql_query($sql);
	if(mysql_num_rows($result)==0)
	{
		echo "<p>No existe el producto en el inventario con id ".$id."<br></p>";
		exit;
		}

if (isset($id)){	
   // Delete si hay dato 
   $sql = "DELETE from inventario WHERE id=$id";
   $result = mysql_query($sql);
 echo "<p>El producto del inventario con id ".$id." ha sido sido eliminado</p>" ;      
}
else{
   echo "<p>Debe especificar un 'id'.\n</p>";
}
?>

</center>
</body>
</html>