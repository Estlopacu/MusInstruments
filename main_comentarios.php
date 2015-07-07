<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<link rel=stylesheet href="stilos_site.css" type="text/css">
</head>

<body>
<p><h2>Bienvenidos!!!</h2></p>
<p><br>Pagina interna de la empresa</p>
<p><br>A continuacion unos review de unos productos.<br>Agregue su comentario <a href="agregar_comentario_f.php" target="_blank">aqui</a></p>
<br>

<center>
<?php	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 		 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	  
 include ("conexion.php");

$result = mysql_query("SELECT usuario,instrumento,comentario FROM comentarios", $link); 
echo"<hr>";
if ($row = mysql_fetch_array($result)){ 
   do { 
      echo "<p><br>".$row["usuario"]." opino sobre el instrumento ".$row["instrumento"].".<br></p>"; 
	  echo "<p><span class=\"comentario\">".$row["comentario"]."</span></p><hr>";
   } while ($row = mysql_fetch_array($result)); 

} else { 

} 
?> 
</center>
<p>&nbsp;</p>
</body>
</html>
