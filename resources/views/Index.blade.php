<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body class="m-1 vh-100 row justify-content-center align-content-lg-around">


    
    <div class="col-4 p-5 border shadow-lg p-3 mb-5 bg-white rounded">
        
        <h3 >Iniciar sesion</h3>
        <br>
        <form action="{{ url('api/login') }}" method="POST">
            @csrf

            <div class="form-group">
            <label for="exampleInputEmail1">Email </label>
            <input  name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <br>
            <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>

            <br>
            <label class="form-check-label" for="exampleCheck1">No tienes cuenta aun <a href="register">Registrate aqui</a></label>
            <br>
            <br>
            <button type="submit" class="btn btn-primary">Iniciar</button>
            
        </form>

    </div>
    
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
      
</body>
</html>