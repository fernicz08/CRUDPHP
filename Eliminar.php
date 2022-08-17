<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/PHPCRUD/eestilos.css"> 
	<div class="Titulo">
		Politecnico internacional Inscripciones de Programacion
		<br>
	</div>
</head>
<body>
<?php
$Cc= $_POST["Cc"];
//$conexion=mysqli_connect("localhost","root","","Practica")or die("Problemas de conexion");
$conexion=mysqli_connect("localhost","root","1234","Practica")or die("Problemas de conexion");
mysqli_query($conexion,"DELETE from Estudiante where Cc=$Cc")
or die ("Error al elminiar");

?>
<br>
 <table>
 <tr>
 	<td>Nombre</td>
 	<td>Cedula</td>
 	<td>Correo electronico</td>
 	<td>Curso</td>
</tr>
<?php
$Cver="select*from Estudiante";
$Resultado=mysqli_query($conexion,$Cver);
while ($Mostrar=mysqli_fetch_array($Resultado)){  
	?>
<tr>
	<td><?php echo $Mostrar['Nombre']  ?> </td>
 	<td><?php echo $Mostrar['Cc']  ?> </td>
 	<td><?php echo $Mostrar['Email']  ?> </td>
 	<td><?php echo $Mostrar['Curso']  ?> </td>

</tr>
<?php
}
 ?>
 </table>



	<form class="botones1" action="Index.html">
	<input type="submit" value="Insertar"></input>
	</form>
</div>

	<form class="botones2" action="Eliminar.html">
	<input type="submit" value="Eliminar" /></input>
</form>

<form class="botones3" action="Editar.html">
	<input type="submit"  name="Editar" value="Editar"></input>
</form>



  
</body>
</html>