<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap/boostrap.min.css">
    <title>formulario</title>
</head>
<body>
    <form action="registro.php" method="POST">
        <div class="mb-3">
            <label for="cc" class="form-label">Cedula: </label>
            <input type="number>0" class="form-control" id="cedula">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nombre: </label>
            <input type="txt" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="email">E-mail: </label>
            <input type="emal" id="email">
        </div>
        <div class="mb-3">
            <label for="movil">Movil: </label>
            <input type="number>0" id="movil">
        </div>
        <div class="gap-4 col-6 mx-auto">
            <button class="btn btn-primary" type="button">Registrar</button>
        </div>
    </form>
</body>
</html>