<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/login.css">
    <title>login</title>
</head>

<body>
    <div class="contenedor">
        <div class="formulario">
            <form action="validacion.php" method="post">
                <label for="user">Usuario</label><br>
                <input type="text" name="user"><br><br>
                <label for="password">Contraseña</label><br>
                <input type="password" name="password"><br><br>
                <input type="submit" value="Ingresar">
            </form>

        </div>
    </div>

</body>

</html>