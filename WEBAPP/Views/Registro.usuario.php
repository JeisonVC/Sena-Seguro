<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="Styles/estilos.css">
</head>
<body>
<div>
<form action="../Controller/registrousu.php" method="post">
<label>Rol que Desempeña</label>
<select name="selecion">
	<option value="m">Selecionar</option>
	<option value="Administrador">Administrador</option>
	<option value="vigilante">Vigilante</option>
	<option value="aprendiz">Aprendiz</option>
	<option vallue="instructor">Instructor</option>
</select>
<label>Codigo</label>
<input type="text" name="codigo"/>
<label>Codigo del rol</label>
<input type="text" name="codigo_rol"/>
<label>Documento</label>
<input type="text" name="documento"/>
<label>Nombre</label>
<input type="text" name="nombre"/>
<label>Apellido</label>
<input type="text" name="apellido"/>
<label>Email</label>
<input type="text" name="email"/>
<label>Telefono</label>
<input type="text" name="telefono"/>
<label>Nombre de Usuario</label>
<input type="text" name="nombredeusuario"/>
<label>Contraseña</label>
<input type="password" name="contraseña"/>
<button value="Guardar" name="action">Guardar</button>

</div>


</form>
</body>
</html>