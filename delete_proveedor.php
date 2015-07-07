<html>
<link rel=stylesheet href="stilos_site.css" type="text/css">

<body>
<center>

<?php	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 		 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	  
include ("conexion.php");
$id=$_POST['id']; 

//ver si esta el dato echo "ID: ".mysql_result($result, 0, "id")."<br>"; 
   $sql = "SELECT id from proveedores WHERE id=$id";
   $result = mysql_query($sql);
	if($result=="")
	{
		echo "<p>Ingrese un id.<br></p>";
		exit;
		}

if (isset($id)){	
   // Delete si hay dato 
   $sql = "DELETE from proveedores WHERE id=$id";
   $result = mysql_query($sql);
 echo "<p>El proveedor con id ".$id." ha sido sido eliminado</p>" ;      
}
else{
   echo "<p>Debe especificar un 'id'.\n</p>";
}
?>

</center>
</body>
</html>