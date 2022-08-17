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

$Nombre= $_POST["Nombre"];
$Cc= $_POST["Cc"];
$Email= $_POST["Email"];   
$Curso =$_POST["Curso"];
//$conexion=mysqli_connect("localhost","root","","Practica")or die("Problemas de conexion");
$conexion=mysqli_connect("localhost","root","1234","Practica")or die("Problemas de conexion");

//mysqli_query($conexion,"UPDATE Estudiante set Nombre='$_POST[Nombre]',Email='$_POST[Email]',Curso='$_POST[Curso]' where Cc=$Cc"or die("Error"));
//mysqli_query($conexion,"UPDATE Estudiante set Nombre='$Nombre',Email='$Email' where Cc='$Cc'"or die("Error"));
mysqli_query($conexion,"UPDATE Estudiante set Nombre='$Nombre',Email='$Email',Curso='$Curso' where Cc=$Cc") OR die("Erro al editar"); 
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
<?php   mysqli_close($conexion);?>

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