<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- CSS -->
    <link rel="stylesheet" href="style/index_style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;700&display=swap" rel="stylesheet">
    <title>Dropper - Sneakers Personalizados</title>
  </head>
  <body>
    <!-- Barra de navegação -->
    <header>
        <div class="menu-bar">
            <nav class="navbar navbar-expand-lg navbar-dark container">
                <button class="navbar-toggler mr-1 mb-2" type="button" data-toggle="collapse" data-target="#navbar-site">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brad mr-2 text-decoration-none" href="index.html"><h2 class="logo">Dropper</h2></a>               
                <div class="collapse navbar-collapse" id="navbar-site">
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a href="#sneakers" class="nav-link">SNEAKERS</a>
                        </li>
                        <li class="nav-item">
                            <a href="#sobre" class="nav-link">SOBRE</a>
                        </li>
                    </ul>                                    
                </div> 
                <a class="btn bar-btn ml-auto" href="src/login.html" role="button"><i class="fas fa-user-circle" style="font-size: 2em;"></i></a>
                <a class="btn bar-btn" href="src/carrinho.html" role="button"><i class="fas fa-shopping-cart" style="font-size: 2em;"></i></a> 
            </nav>
        </div>
    </header>
    <!-- FIM/ Barra de navegação -->

    <!-- Carousel -->
    <div class="container mt-3">
        <div id="mainCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#mainCarousel" data-slide-to="1"></li>
                <li data-target="#mainCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="#sobre"><div class="overlay-image" style="background-image: url(img/img_04.jpeg);"></div></a>
                    <div class="container">
                        <div class="slideText">
                            <h1>Um Pouco sobre nós</h1>                            
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <a href="#sneakers" class="overlay-image" style="background-image: url(img/bannerProdutos.jpeg);"></a>
                    <div class="container">
                        <div class="slideText text-center">
                            <h1>!!! Confira nossos Sneakers !!!</h1>                                                        
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="overlay-image" style="background-image: url(img/tenis-slide.jpeg);"></div>
                    <div class="container">
                        <div class="slideText">
                            <h1>Sneakers Persoanlizados</h1>                            
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div> 
                    </div>
                </div>
            </div>
            <a href="#mainCarousel" class="carousel-control-prev" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="sr-only">anterior</span>
            </a>
            <a href="#mainCarousel" class="carousel-control-next" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="sr-only">proximo</span>
            </a>
        </div>
    </div>
    <!-- FIM/ Carousel -->

    <!-- Conteudo -->
    <main>
        <!-- produtos slider -->
        <div class="container mt-5 mb-4">
            <h1 class="titulos" id="sneakers">sneakers</h1>
            <hr>                    
        </div>

        <div class="container" >
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="img/new.gif" style="position: absolute; width: 100px; right: -30px;">
                                <a href="produtos/nike-air-force-yellow.html"><img src="img/tenis_09.jpg" class="card-img-top productImg"></a>
                                <div class="card-body">                                                
                                    <a href="produtos/nike-air-force-yellow.html" class="text-decoration-none"><h5 class="card-title">Air Force 1 Yellow</h5></a>
                                    <h1>R$899,90</h1>
                                    <hr>
                                    <a href="produtos/nike-air-force-yellow.html" class="btn btn-success">Comprar</a>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-4 mb-4">
                            <div class="card" >
                                <a href="produtos/adidas-son-goku.html"><img src="img/tenis_02.jpg" class="card-img-top productImg"></a>
                                <div class="card-body">                                                
                                    <a href="produtos/adidas-son-goku.html" class="text-decoration-none"><h5 class="card-title">Adidas Dragon Ball Z</h5></a>
                                    <h1>R$799,90</h1>
                                    <hr>
                                    <a href="produtos/adidas-son-goku.html" class="btn btn-success">Comprar</a>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-4 mb-4">
                            <div class="card" >
                                <a href="produtos/adidas-Pharrell-Williams.html"><img src="img/tenis_03.jpg" class="card-img-top productImg"></a>
                                <div class="card-body">                                                
                                    <a href="produtos/adidas-Pharrell-Williams.html" class="text-decoration-none"><h5 class="card-title">adidas x Pharrell Williams</h5></a>
                                    <h1>R$799,90</h1>
                                    <hr>
                                    <a href="produtos/adidas-Pharrell-Williams.html" class="btn btn-success">Comprar</a>
                                </div>
                            </div>
                        </div>                                                      
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card" >
                        <a href="produtos/nike-dragon-ball-z-custom.html"><img src="img/tenis_04.jpg" class="card-img-top productImg"></a>
                        <div class="card-body">                                                
                            <a href="produtos/nike-dragon-ball-z-custom.html" class="text-decoration-none"><h5 class="card-title">Nike Dragon Ball Z Custom</h5></a>
                            <h1>R$799,90</h1>
                            <hr>
                            <a href="produtos/nike-dragon-ball-z-custom.html" class="btn btn-success">Comprar</a>
                        </div>
                    </div>
                </div> 
                <div class="col-md-4 mb-4">
                    <div class="card" >
                        <a href="produtos/converse-g4-hight-top.html"><img src="img/tenis_05.jpg" class="card-img-top productImg"></a>
                        <div class="card-body">                                                
                            <a href="produtos/converse-g4-hight-top.html" class="text-decoration-none"><h5 class="card-title">Converse G4 Hight Top</h5></a>
                            <h1>R$799,90</h1>
                            <hr>
                            <a href="produtos/converse-g4-hight-top.html" class="btn btn-success">Comprar</a>
                        </div>
                    </div>
                </div> 
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <a href="produtos/Converse-G4-Soundwave-Low-Top.html"><img src="img/tenis_06.jpg" class="card-img-top productImg"></a>
                        <div class="card-body">                                                
                            <a href="produtos/Converse-G4-Soundwave-Low-Top.html" class="text-decoration-none"><h5 class="card-title">Converse G4 Soundwave</h5></a>
                            <h1>R$799,90</h1>
                            <hr>
                            <a href="produtos/Converse-G4-Soundwave-Low-Top.html" class="btn btn-success">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card" >
                        <a href="produtos/air-jordan-cano-alto.html"><img src="img/tenis_07.jpg" class="card-img-top productImg"></a>
                        <div class="card-body">                                                
                            <a href="produtos/air-jordan-cano-alto.html" class="text-decoration-none"><h5 class="card-title">Air Jordan Cano Alto</h5></a>
                            <h1>R$799,90</h1>
                            <hr>
                            <a href="produtos/air-jordan-cano-alto.html" class="btn btn-success">Comprar</a>
                        </div>
                    </div>
                </div> 
                <div class="col-md-4 mb-4">
                    <div class="card" >
                        <a href="produtos/converse-g4-heart-of-the-city.html"><img src="img/tenis_08.jpg" class="card-img-top productImg"></a>
                        <div class="card-body">                                                
                            <a href="produtos/converse-g4-heart-of-the-city.html" class="text-decoration-none"><h5 class="card-title">Converse G4 HTC</h5></a>
                            <h1>R$799,90</h1>
                            <hr>
                            <a href="produtos/converse-g4-heart-of-the-city.html" class="btn btn-success">Comprar</a>
                        </div>
                    </div>
                </div> 
                <div class="col-md-4 mb-4">
                    <div class="card" >
                        <a href="produtos/air-force-1-custom.html"><img src="img/tenis_01.jpg" class="card-img-top productImg"></a>
                        <div class="card-body">                                                
                            <a href="../produtos/air-force-1-custom.html" class="text-decoration-none"><h5 class="card-title">Air Force 1 Custom</h5></a>
                            <h1>R$799,90</h1>
                            <hr>
                            <a href="produtos/air-force-1-custom.html" class="btn btn-success">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <!-- FIM/ produtos slider -->    

        <!-- Sobre -->
        <div class="container mt-5 ">
            <h1 class="titulos" id="sobre">Sobre</h1>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <h2>Sneakers Persoanlizados</h2>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    </p>
                    <h2>Melhor Qualidade do Mercado!!!</h2>
                    <p>
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <a href="#sneakers"><h4>!!! Confira nossos Sneakers !!!</h4></a>
                </div>
                <div class="col-md-6">
                    <img class="aboutImg" src="img/git_tenis.gif" alt="">
                </div>
            </div>

        </div>
        <!-- FIM/ Sobre -->
    </main>
    <!-- FIM/ Conteudo -->

    <!-- Footer -->
    <footer class="page-footer">
        <div class="bg-Dark">
            <div class="container">
                <div class="row py-4 d-flex align-items-center footerIcons">
                    <div class="col-md-12 text-center">
                        <a href="#"><i class="fab fa-facebook-square text-white mr-4"></i></a>
                        <a href="#"><i class="fab fa-instagram text-white mr-4"></i></i></a>
                        <a href="#"><i class="fab fa-google text-white mr-4"></i></a>
                        <a href="#"><i class="fab fa-twitter text-white mr-4"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center text-md-left mt-5">
            <div class="row text-center">
                <div class="col-md-4 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold text-light">Fornecedores</h6>
                    <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 150px; height: 2px;">
                    <ul class="list-unstyled text-light">
                        <li>Nike</li>
                        <li>Adidas</li>
                        <li>Converse</li>
                        <li>Vans</li>        
                        <li>New Balance</li>
                    </ul>
                </div>

                <div class="col-md-4 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold text-light">Membros do Grupo</h6>
                    <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 200px; height: 2px;">
                    <ul class="list-unstyled text-light">
                        <li>Ademir henrique dos Santos - RA: 1201320</li>
                        <li>Diego Ferreira Chaves - RA: 2496180</li>
                        <li>Lais Souza de Assunção - RA: 1201320</li>
                        <li>Thiago Marques - RA: 770449</li>                        
                    </ul>
                </div>      
                
                <div class="col-md-4 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold text-light">Links Úteis</h6>
                    <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 125px; height: 2px;">
                    <ul class="list-unstyled text-light">
                        <li><a href="index.html" class="footerLinks" >Home</a></li>
                        <li><a href="#sobre" class="footerLinks">Sobre</a></li>
                        <li><a href="#" class="footerLinks">Contato</a></li>
                        <li><a href="#" class="footerLinks">Ajuda</a></li>        
                        <li><a href="#" class="footerLinks">Suporte</a></li>
                    </ul>
                </div>                
            </div>
            <div class="footer-copyright text-center py-3 text-light">
                <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 100%; height: 2px;">
                <p>&copy; Direitos Cópia
                    <p>Disigned By FMU N2 Project</p>
                </p>
                
            </div>
        </div>
    </footer>
    <!-- FIM/ Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
    </script>
  </body>
</html>