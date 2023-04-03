<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Estilo.css">
    <title>PelisXDF</title>
    
</head>
<body class="hidden" onload="miFuncion();">

    <div class="centrado" id="cargado">
        <div class="lds-facebook">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    
    <nav id="Menu">
        <ul id="Lista-Menu">

                <li id="Bar">
                    <i class="fa-solid fa-bars"></i>
                </li>

                <li id="Home">
                    <a href="#">
                        <i class="fa-solid fa-house"></i>
                    </a>
                </li>

                <div class="tooltip">
                    <a href="#">
                        <li>Peliculas</li>                    
                    </a> 

                </div>
                

                <a href="">
                    <li>Generos</li>
                </a>

                <a href="">
                    <li>Favoritos</li>
                </a>
                
                <a href="">
                    <li>Ayuda</li>
                </a>

                
                    
                <div class="Buscar">

                    <li>

                        <form action="php/Prueba.php" method="post" id="FormularioVoz">

                            <!----->
                            <div class="Barra">

                                <input type="text" id="input"  name="Pelicula" placeholder="Buscar" required value="" >
                                
                                <div id="Micro">
                                    <i class="fa-solid fa-microphone"></i>
                                </div>
                                
                            </div>
                            <!----->
                            
                            

                            <button type="image" class="BotonBuscar">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>

                        </form>

                    </li>

                    <li>
                        <div > 
                            <a href="{{ route('index')}}"><i class="fa-solid fa-user"></i></a>
                        </div>
                       

                    </li>
                    
                </div>
                    


                

        </ul>
    </nav>

    <nav id="MenuLateral">
        
        <ul>


            <li  id="cerrar">
                <i class="fa-solid fa-rectangle-xmark"></i>
            </li>

            <li class="Opciones">
                <img src="img/Logo.png" alt="" width="20%" height="80%">
            </li>

            <li class="Opciones">
                <a href="">Peliculas</a>
            </li>


            <li class="Opciones">
                <a href="">Series</a>
            </li>

            <li class="Opciones">
                <a href="">Novelas</a>
            </li>

            <li class="Opciones">
                <a href="">Documentales</a>
            </li>



        </ul>

    </nav>




    <div class="Encabezado">
                
            <ul id="ListaImagenes">
            
                <li><img id="Imagen-Slider" src="img/Imagen-Fondo-4.jpeg" alt="" width="100%" height="100%"></li>    
            
                <li><img id="Imagen-Slider2" src="img/Imagen-Fondo-3.jpg" alt="" width="100%" height="100%"></li>  
            
            </ul>
            
            
            <h3 id="Texto-Encabezado">Bienvenido a <br> PELISXDF</h3> 

            <div id="FlechaDerecha">
                <i class="fa-solid fa-chevron-right"></i>
            </div>


            <div id="FlechaIzquierda">
                <i class="fa-solid fa-chevron-left"></i>
            </div>


    </div>


    <div class="VentanaMicro">

        <div id="CerrarMicro">
            <i class="fa-sharp fa-solid fa-xmark"></i>
        </div>
        

        <div class="contenedor">
            <i class="fa-solid fa-microphone"></i>
            
        </div>

        <p id="Texto">Escuchando....</p>

    </div>

    <div id="sesion">

    </div>

    <div class="VentanaSesion" style=" display: none; ">
        
        <div class="LogoCine">
            <img src="img/Logo.png" alt="" width="30%" height="100%">
        </div>


        <div class="VentanaLogeo">

            <div id="CerrarInicio">
                <i class="fa-sharp fa-solid fa-xmark"></i>
            </div>

            <h1>Iniciar Sesion</h1>

            <h4>Por favor ingresa tu usuario y contraseña</h4>

            <form action="Funciones/VerificarUsuario.php" method="post">

            <input class="InputVentana" type="text" name="Usuario"  placeholder="Usuario" required> <br>
            <input class="InputVentana" type="password" name="Contraseña" placeholder="Contraseña" required>

            <button id="ButtonIniciar" type="submit">Ingresar</button>

            </form>

        </div>

    </div>


    
        <article id="Recomendaciones">
            
            
            <h2>Recomendaciones</h2>

            

                <div class="Peliculas">
                    
                    <img src="img/Peliculas/Aquaman.jpg" alt="" width="100%" height="65%">

                    

                    <div class="InfoPelicula">



                        
                        <h1 class="TituloPelicula">Aquaman</h1>
                        <a href="https://www.youtube.com/watch?v=nDxAQ9FUhr8" target="_blank"><button class="botonVer"> Ver</button></a>
                        
                        <p class="Genero">Genero:Accion</p>


                    </div>
                    
                </div>
                    

                <div class="Peliculas">

                    <img src="img/Peliculas/BlackAdam.jpg" alt="" width="100%" height="65%">

                    <div class="InfoPelicula">


                        
                       
                        <p class="TituloPelicula">Black Adam</p>
                        <a href="https://www.youtube.com/watch?v=kOFTZWyaOgc" target="_blank"><button class="botonVer"> Ver</button></a>
                         <p class="Genero" >Genero:Accion</p>

                        

                    </div>
                    
                </div>
                    

                <div class="Peliculas">

                    <img src="img/Peliculas/Naruto.jpg" alt="" width="100%" height="65%">

                    <div class="InfoPelicula">


                        
                        
                        <p class="TituloPelicula">Naruto</p>
                        <a href="https://www.youtube.com/watch?v=QczGoCmX-pI" target="_blank"><button class="botonVer"> Ver</button></a>
                        <p class="Genero">Genero:Anime</p>



                    </div>

                </div>

 
                
                

        </article>

    <br><br>
        

    <div id="capa">

        

    </div>

    <script src="https://kit.fontawesome.com/05dc881a1f.js" crossorigin="anonymous"></script>
    <script src="../js/jsIndex.js"></script>

</body>
</html>