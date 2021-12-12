<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Inicio de Sesion
    <form class="" method="POST" >
        @csrf
        <input type="text" placeholder="usuario" name="usuario" />
        <input type="text" placeholder="password" name="contraseña"  />
        <button type="submit">login</button>
        <!--     <p class="message">Not registered? <a href="#">Create an account</a></p> -->
      </form>
</body>
</html>