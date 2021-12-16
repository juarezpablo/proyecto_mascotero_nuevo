<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,600&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../resources/css/login.css" type="text/css">
    <title>Inicio de Sesión</title>
</head>
<body>
 
    <div id="formulario">
        <h3>   Inicio de Sesión</h3>
        <form class="" method="POST" >
            @csrf
            <input type="text" placeholder="Ingrese usuario" name="usuario" id="usuario" required>
            <input type="text" placeholder="Ingrese password" name="contraseña"  id="contraseña">
            <button type="submit">Ingresar</button>
            <!--     <p class="message">Not registered? <a href="#">Create an account</a></p> -->
        </form>
    </div>  
</body>
</html>