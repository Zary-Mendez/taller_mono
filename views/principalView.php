<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Salas</title>
    <link rel="stylesheet" href="public/estilos.css">
</head>

<body>
    <h1>INGRESO SALAS DE COMPUTO</h1>
    <div class="cuadro">

            <div class="btn-container">
                <button class="btnPrincipal"><a href="index.php?c=registros&a=ControllerIngreso">Registrar ingreso Estudiante</a></button>
                <button class="btnPrincipal"><a href="index.php?c=registros&a=ControllerSalidas">Registrar salida Estudiante</a></button>
                <button class="btnPrincipal"><a href="index.php?c=registros&a=ControllerRegistrosSalas">Registrar clase Docente</a></button>
                <button class="btnPrincipal"><a href="index.php?c=registros&a=ControllerGetRegistros">Ver registros y salidas</a></button>
            </div>


        <div class="tabla-container">
            <table border="1">
                <thead>
                    <tr>
                        <th>PROGRAMAS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ing. Sistemas</td>
                    </tr>
                    <tr>
                        <td>Ing. Multimedia</td>
                    </tr>
                    <tr>
                        <td>Arquitectura</td>
                    </tr>
                    <tr>
                        <td>Contabilidad</td>
                    </tr>
                </tbody>
            </table>
<br>

            <table border="1">
                <thead>
                    <tr>
                        <th>RESPONSABLES </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Juan Perez</td>
                    </tr>
                    <tr>
                        <td>Ana Lopeez</td>
                    </tr>
                    <tr>
                        <td>Juan Perez</td>
                    </tr>
                    <tr>
                        <td>Ana Lopeez</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table border="1">
                <thead>
                    <tr>
                        <th>SALAS DISPONIBLES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>201G</td>
                    </tr>
                    <tr>
                        <td>202H</td>
                    </tr>
                    <tr>
                        <td>203I</td>
                    </tr>
                    <tr>
                        <td>301G</td>
                    </tr>
                    <tr>
                        <td>302H</td>
                    </tr>
                    <tr>
                        <td>303I</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>