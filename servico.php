<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleservico.css">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/global.css">

    <!-- Ícones -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet"/>

    <!-- Animação -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Título e ícone head -->
    <link rel="icon" type="image/x-icon" href="./img/icon-head.svg">
    <title>Serviços | Queiroz & Lima</title>

</head>

<body>
    <style>
        body {
            background-color: #F8F8FF;
        }

        p {
            color: black;
        }

        h5 {
            color: black;
        }
        

        .teste{

           color:#F8F8FF;


}

    </style>

    <!-- Contato -->
    <div class="contato d-none d-md-block" id="top">
        <div class="container" id="top">
            <div class="rol">
                <div class="col-12 d-none d-md-block">
                    <!-- Ícones de número de contato -->
                    <div class="d-flex justify-content-between">
                        <div class="d-flex">
                            <!-- WhatsApp -->
                            <!-- WhatsApp Ivan -->
                            <div class="d-flex align-items-center m-rigth-16">
                                <i class="ri-whatsapp-line m-right-4"></i>
                                <label>(11) 9 6491-9326</label>
                            </div>

                            <!-- WhatsApp Willian -->
                            <div class="d-flex align-items-center">
                                <i class="ri-whatsapp-line m-right-4"></i>
                                <label>(11) 9 3089-3325</label>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="d-flex align-items-center">
                            <i class="ri-mail-line m-right-4"></i>
                            <label>quirozlima.construcaocivil@gmail.com</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- NavBar -->
    <!-- Light -->
    <div id="header" id="top">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Foto -->
                <a class="navbar-brand" href="./index.php">
                    <img class="img animate-logo" src="./img/Logo4.png" alt="Logo queiroz & lima construção civil">
                </a>

                <!-- Toggle -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menus -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav animate-menu">
                        <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                        <a class="nav-link active" href="./servico.php">Serviços</a>
                        <a class="nav-link active" href="./index.php">Sobre</a>
                        <a class="nav-link active" href="#contact">Contato</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- Light -->
    <div id="topMenu" id="top">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <!-- Foto -->
                <a class="navbar-brand" href="./index.php">
                    <img class="img animate-logo" src="./img/Logo-light.png" alt="Logo queiroz & lima construção civil">
                </a>

                <!-- Toggle -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menus -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav animate-menu">
                        <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                        <a class="nav-link active" href="./servico.php">Serviços</a>
                        <a class="nav-link active" href="./index.php">Sobre</a>
                        <a class="nav-link active" href="#contact">Contato</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!--Inicio do Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <!-- Inicio do Carousel 1-->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img-servico/bg-services.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>

            <!-- Carousel 2--->
            <div class="carousel-item">
                <img src="img-servico/cartao3.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 >"Não é sobre construir coisas, mas sim, executar sonhos"</h5>
                    <p>(Leonardo Alves)</p>
                </div>
            </div>
            <!-- Carousel 3--->
            <div class="carousel-item">
                <img src="img-servico/carro6.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="teste">Aquele serviço que você merece, feito com dedicação!</h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container mb-5 mt-5">
        <div class="row">
            <!-- Card 1-->
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img class="img-fluid" src="img-servico/foto1.jpeg" class="img-fluid hover-shadow" width="220">

                    </div>
                </div>
            </div>
            <!--Card 1 termina aqui-->
            <!-- Card 2-->
            <div class="col-md-4 ">
                <div class="card mt-3">
                    <div class="product-2 align-items-center p-4 text-center">
                        <img src="img-servico/foto32.jpg"  class="img-fluid hover-shadow"  width="360">

                    </div>
                </div>
            </div>
            <!--Card 2 termina aqui-->
            <!-- Card 3-->
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="img-servico/foto4.jpeg"  class="img-fluid hover-shadow"  width="290">

                    </div>
                </div>
            </div>
            <!--Card 3 termina aqui-->
            <!-- Card 4-->
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="img-servico/foto5.jpeg"  class="img-fluid hover-shadow"  width="300">

                    </div>
                </div>
            </div>
            <!--Card 4 termina aqui-->
            <!-- Card 5-->
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="img-servico/foto6.jpeg" class="img-fluid hover-shadow"  width="300">

                    </div>
                </div>
            </div>
            <!--Card 5 termina aqui-->
            <!-- Card 6-->
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="img-servico/foto7.jpeg"  class="img-fluid hover-shadow"  width="300">

                    </div>
                </div>
            </div>
            <!--Card 6 termina aqui-->
            <!-- Card 7-->
            <div class="col-md-4">
                <div class="card mt-4">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="img-servico/foto34.jpg"  class="img-fluid hover-shadow"  width="300">

                    </div>
                </div>
            </div>
            <!--Card 7 termina aqui-->
            <!-- Card 8-->
            <div class="col-md-4">
                <div class="card mt-4">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="img-servico/foto9.jpeg"  class="img-fluid hover-shadow"  width="300">

                    </div>
                </div>
            </div>
            <!--Card 8 termina aqui-->
            <!-- Card 9-->
            <div class="col-md-4">
                <div class="card mt-4">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="img-servico/foto20.jpeg"  class="img-fluid hover-shadow"  width="300">

                    </div>
                </div>
            </div>
            <!--Card 9 termina aqui-->
            <!-- Card 10-->
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="img-servico/foto24.jpeg"  class="img-fluid hover-shadow"  width="300">

                    </div>
                </div>
            </div>
            <!-- Card 10 termina aqui-->
            <!-- Card 11-->
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="img-servico/foto10.jpeg"  class="img-fluid hover-shadow"  width="300">

                    </div>
                </div>
            </div>
            <!--Card 11 termina aqui-->
            <!--Card 12 -->
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="img-servico/foto14.jpeg"  class="img-fluid hover-shadow"  width="300">

                    </div>
                </div>
            </div>
            <!--Card 12 termina aqui-->
            <!-- Card 13-->
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="img-servico/foto2.jpeg"  class="img-fluid hover-shadow"  width="240">

                    </div>
                </div>
            </div>
            <!--Card 13 termina aqui-->
            <!-- Card 14 -->
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="img-servico/foto02.jpeg"  class="img-fluid hover-shadow"  width="320">

                    </div>
                </div>
            </div>
            <!--Card 14 termina aqui-->
            <!--Card 15-->
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="img-servico/foto21.jpeg"  class="img-fluid hover-shadow"  width="320">

                    </div>
                </div>
            </div>
            <!--Card 15 termina aqui-->
            <!-- Card 16-->
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="img-servico/foto17.jpeg"  class="img-fluid hover-shadow"  width="330">

                    </div>
                </div>
            </div>
            <!--Card 16 termina aqui-->
            <!-- Card 17-->
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="img-servico/foto19.jpeg"  class="img-fluid hover-shadow"  width="330">

                    </div>
                </div>
            </div>
            <!--Card 17 termina aqui-->
            <!-- Card 18 -->
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="img-servico/foto11.jpeg"  class="img-fluid hover-shadow"  width="330">

                    </div>
                </div>
            </div>
            <!--Card 18 termina aqui-->
            <!-- Card 19-->
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="img-servico/foto15.jpeg"  class="img-fluid hover-shadow"  width="225">

                    </div>
                </div>
            </div>
            <!--Card 19 termina aqui-->
            <!-- Card 20-->
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center">
                    <img src="img-servico/foto35.jpeg" class="img-fluid hover-shadow"  width="253" />

                        
                    </div>
                </div>
            </div>
            <!--Card 20 termina aqui-->

             <!-- Card 21-->
             <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center">
                    <img src="img-servico/foto16.jpeg"  class="img-fluid hover-shadow" width="300">

                    </div>
                </div>
            </div>
            <!--Card 21 termina aqui-->
            
        </div>
    </div>

    <!-- Parte E || CONTATO -->
    <div class="qb-contact">
        <div class="container h-100 w-100" id="contact">
            <div class="row d-flex align-items-center h-100">
                <div class="col-12 col-sm-12 col-xs-12">
                    <h1>Contato</h1>
                    <!-- WhatsApp Ivan -->
                    <div class="d-flex align-items-center justify-content-center m-rigth-16">
                        <i class="ri-whatsapp-line m-right-4"></i>
                        <label>(11) 9 6491-9326 <b>Ivan</b></label>
                    </div>

                    <!-- WhatsApp Willian -->
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="ri-whatsapp-line m-right-4"></i>
                        <label>(11) 9 3089-3325 <b>William</b></label>
                    </div>

                    <!-- Email -->
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="ri-mail-line m-right-4"></i>
                        <label>quirozlima.construcaocivil@gmail.com</label>
                    </div>

                    <!-- Botões WhatsApp -->
                    <div class="rol d-flex top-16">
                        <div class="col-6 d-flex justify-content-end pd-16">
                            <a href="https://wa.me/5511964919326">
                                <button class="qlButton-Wpp">
                                    <img class="qb-icon-button m-right-4" src="./img/whatsapp-symbol.svg" alt="Logotipo WhatsApp">
                                    <label>Falar com Ivan</label>
                                </button>
                            </a>
                        </div>

                        <div class="col-6 d-flex justify-content-start pd-16">
                            <a href="https://wa.me/5511930893325">
                                <button class="qlButton-Wpp">
                                    <img class="qb-icon-button m-right-4" src="./img/whatsapp-symbol.svg" alt="Logotipo WhatsApp">
                                    <label>Falar com Willian</label>
                                </button>
                            </a>
                        </div>
                    </div>

                    <!-- Local -->
                    <div class="d-flex align-items-center justify-content-center m-top-28">
                        <i class="ri-map-pin-2-line m-right-4"></i>
                        <label>Rua Sete de Abril, Nº223 - Sala 06, Nº235</label>
                    </div>
                    <div>
                        <label>CEP: 01043-000 - Bairro Republica</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Parte F || MAPS -->
    <div class="ql-maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1776.7452405496804!2d-46.642022171747726!3d-23.54632430418632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce585201c0c185%3A0x1cd8ac43abee6547!2sR.%20Sete%20de%20Abril%20-%20Rep%C3%BAblica%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2013150-005!5e0!3m2!1spt-BR!2sbr!4v1638807880543!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <!-- Parte G || FOOTER -->
    <div class="ql-footer">
        <div class="container">
            <div class="rol d-flex">
                <div class="col-8 d-flex">
                    <!-- Menus -->
                    <a href="./index.php">
                        <h6 class="m-rigth-16">Home</h6>
                    </a>
                    <a href="./servico.php">
                        <h6 class="m-rigth-16">Serviços</h6>
                    </a>
                    <a href="./index.php">
                        <h6 class="m-rigth-16">Sobre</h6>
                    </a>
                    <a href="#contact">
                        <h6>Contato</h6>
                    </a>
                </div>

                <div class="col-4 d-flex justify-content-end">
                    <div>
                        <!-- Botão âncora -->
                        <a href="#top">
                            <button class="ql-button-ancora"><i class="ri-arrow-up-line"></i></button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="rol m-top-28">
                <div class="col-12 col-sm-12 col-xs-12">
                    <div class="ql-line  m-bottom-28"></div>
                    <!-- Nome e CNPJ empresa -->
                    <div class="ql-copy">
                        <p>Queiroz & Lima Construção Civil LTDA | CNPJ 40O5992/0001-06</p>
                    </div>
                    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © 2020 Copyright:
                    <a class="text-dark">ColdWolf</a>
                </div>
                 <!-- Copyright -->
                </div>
            </div>
        </div>
    </div>

    <!------------ link javascript ---------->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>


    <!-- Optional JavaScript; choose one of the two! -->
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>