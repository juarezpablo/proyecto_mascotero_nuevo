<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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