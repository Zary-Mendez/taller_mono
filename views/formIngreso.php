
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Ingreso</title>
</head>

<body> 
    <fieldset>
    <form id="formIngreso" name="formIngreso" action="index.php?c=registros&a=ControllerGuardar" method="POST">

<label>Ingresar codigo:</label>
<input id="codigo" name="codigo" type="number" placeholder="Ingrese codigo estudiante" required>

<br>
<br>

<label>Ingresar nombre:</label>
<input id="nombre" name="nombre" type="text" placeholder="Ingrese nombre estudiante" required>

<br>
<br>

<label>Ingresar programa:</label>
<input id="programa" name="programa" type="text" placeholder="Ingrese nombre estudiante" required>


<br>
<br>

<label>Ingresar una fecha</label>
<input id="fecha" name="fecha" type="date" placeholder="Ingrese fecha" required>

<br>
<br>

<label>Ingresar hora:</label>
<input id="hora" name="hora" type="time" placeholder="Ingrese hora de ingreso" required>

<br>
<br>

<label>Ingresar sala:</label>
<input id="sala" name="sala" type="text" placeholder="Ingrese sala a ingresar" required>

<br>
<br>

<label>Ingresar nombre responsable:</label>
<input id="responsable" name="responsable" type="text" placeholder="Ingrese nombre del responsable" required>

<br>
<br>
<button type="submit">Registrar</button>
</form>

</fieldset>
    

</body>

<link rel="stylesheet" href="public/estilos.css">

</html>