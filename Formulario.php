<!DOCTYPE html>
<html>
<head>
	<title></title>
	<div class="Titulo">
		Politecnico internacional Inscripciones de Programacion
		<br>
	</div>
<link rel="stylesheet" type="text/css" href="/PHPCRUD/eestilos.css">
</head>
<body>
<?php 
$Nombre= $_POST["Nombre"];
$Cc= $_POST["Cc"];
$Email= $_POST["Email"];   
$Curso =$_POST["Curso"];
//$conexion=mysqli_connect("Localhost:8081","Usuario","Contraseña","BaseDeDatos")or die("Problemas de conexion");
$conexion=mysqli_connect("localhost","root","1234","Practica")or die("Problemas de conexion");
//$conexion=mysqli_connect("localhost","root","","Practica")or die("Problemas de conexion");
// Añadir registro
mysqli_query($conexion,"insert into Estudiante (Nombre,Cc,Email,Curso) values ('$_POST[Nombre]',$_POST[Cc],'$_POST[Email]','$_POST[Curso]')")
//Mostrar errores los ingresos de datos
or die ("Problemas al ingresar datos".mysqli_error($conexion));
// cerrar conexion mysql
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
