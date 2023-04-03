<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modo Admin</title>
    <link rel="stylesheet" href="../CSS/EstiloCrudUsuario.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/53a1e25c12.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@300&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
    
    <nav id="menu" >
        <ul id="Bar">

            <li id="alinear" id="Bar" >  <i class="fa-solid fa-house"></i> </li>
        </ul>

        <ul id="Lista">


            <li> 
                <span >
                <a id="btnCerrar" href="{{ url('api/logout') }}">
                        <i class="fa-solid fa-right-from-bracket"></i>
                </a>
                </span> 
            </li>

        </ul>
    </nav>

    <div id="Contenido">

        
        <div id="Titulo">
            Bienvenido usuario: {{ auth()->user()->nombre }} 
            
        </div>
    
        <br>
                <table class="table table-sm">
                    <thead id="Bar">
                        <tr>
            
                            <th scope="col">
                                Nombre
                            </th scope="col">
            
                            <th scope="col">
                                Apellido
                            </th>
            
                            <th scope="col">
                                correo
                            </th>
            


                            <th>

                            </th>

                            <th>
                                
                            </th>
                        </tr>
            
                    </thead>
            
                    <tbody class="table-group-divider">
                        @foreach($datos as $campo)
                        <tr>
            
                            <td>{{$campo->nombre}}</td>
                            <td>{{$campo->apellido}}</td>
                            <td>{{$campo->email}}</td>
  
            
                            <td>
            
                                <a href="#" data-bs-toggle="modal" data-bs-target="#ModalEditar{{$campo->id}}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
            
                                                <!--Modal de modificar-->
                                                <div class="modal fade" id="ModalEditar{{$campo->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                                    <div class="modal-dialog">
                                                      <div class="modal-content" id="ModalModificar" >
                                                        <div class="modal-header">
                                                            <span><img src="../img/LogoCine.jpg" alt="" width="40px" height="40px" id="Logo2"></span>
                                                          <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar Usuario</h1>
                                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btnCerrar"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                          
                                                            <form action='usuario/{{$campo->id}}'  method="POST">
            
                                                                @csrf
                                                                @method('PUT')
            
            
                                                                <div class="mb-4" style='font-size: 13px;'>
                                                                  <label for="exampleInputPassword1" class="form-label">Nombre</label>
                                                                  <input type="text" class="form-control" id="exampleInputPassword1 "
                                                                  name="nombre" value="{{$campo->nombre}}">
                                                                </div>
            
                                                                <div class="mb-4" style='font-size: 13px;'>
                                                                    <label for="exampleInputPassword1" class="form-label">Apellido</label>
                                                                    <input type="text" class="form-control" id="exampleInputPassword1 "
                                                                    name="apellido" value="{{$campo->apellido}}">
                                                                  </div>
                
                                                                  <div class="mb-4" style='font-size: 13px;'>
                                                                    <label for="exampleInputPassword1" class="form-label">Correo</label>
                                                                    <input type="text" class="form-control" id="exampleInputPassword1 " required
                                                                    name="email" value="{{$campo->email}}">
                                                                  </div>
            
                                                                  <div class="mb-4" style='font-size: 13px;'>
                                                                  <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                                                                  <input type="password" class="form-control" id="exampleInputPassword1 " required
                                                                   name="password" value="">
                                                                </div>
            
                                                                </div>
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                                <button type="submit" class="btn btn-success">Guardar cambios</button>
                                                                </div>
                                                            </form>
                                                      </div>
                                                    </div>
                                                  </div>
                                                <div class="modal-dialog modal-lg">
                                
                                </td>
            
                                <td>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalEliminar{{$campo->id}}" >
                                        <i class="fa-solid fa-trash"></i>
                                    </button>

                                    <div class="modal fade" id="ModalEliminar{{$campo->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Advertencia</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                
                                            Estas seguro de eliminar este usuario

                                            <form action='/api/usuario/{{$campo->id}}'  method="POST">
                                                @csrf
                                                @method('DELETE')


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                    

            
                                </td>
            
                        </tr>
                        
            
                        @endforeach
                    </tbody>
            
                </table>   
    







    
    
    </div>





   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>  
    </div>
</body>
</html>