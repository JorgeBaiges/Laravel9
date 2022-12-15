<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignatura</title>
</head>
<body>
    <h2>TE ESTOY DANDO INFORMACION DE LA ASIGNATURA</h2>
    <br>
    <table>
        <tr>
            <th>Nombre</th>
            <td>{{ $nombremodulo }}</td>
        </tr>
        <tr>
            <th>Ciclo</th>
            <td>{{ $ciclo }}</td>
        </tr>
    </table>

    @if ( $nombremodulo == "dwes" )

        <p>Estoy en Entorno Servidor</p>

        @else

            <p>Estoy en entorno Cliente</p>
            
    @endif

    <br>

    @foreach($departamentos as $dpto)
    
        {{ $dpto }}

    @endforeach

</body>
</html>