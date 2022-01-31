<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/global.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css" class="">

    <!-- Ícones -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Animação -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Título e ícone head -->
    <link rel="icon" type="image/x-icon" href="./img/icon-head.svg">
    <title>Home | Queiroz & Lima</title>
</head>

<body>
    <!-- Contato -->
    <div class="contato d-none d-md-block" id="home">
        <div class="container">
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
    <div id="header">
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
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        <a class="nav-link active" href="#services">Serviços</a>
                        <a class="nav-link active" href="#about">Sobre</a>
                        <a class="nav-link active" href="#contact">Contato</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- Light -->
    <div id="topMenu">
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
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        <a class="nav-link active" href="#services">Serviços</a>
                        <a class="nav-link active" href="#about">Sobre</a>
                        <a class="nav-link active" href="#contact">Contato</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- Parte A || BANNER TRANSPARENTE-->
    <div class="position-relative">
        <img src="img/home1.svg" class="img-fluid w-100">
        <div class="banner-transparent justify-content-center align-items-center d-none d-sm-flex d-md-flex d-lg-flex">
            <!-- Texto -->
            <div class="content-banner">
                <h1>Política de qualidade</h1>
                <h5>Para nós, qualidade é obrigação.</h5>
                <a href="./servico.php">
                    <input class="button-banner" type="button" value="Conheça mais">
                </a>
            </div>
        </div>
    </div>

    <!-- Parte B || CARDS CITANDO AS QUALIDADES-->
    <div class="bg-ql-secondary position-relative">
        <div class="position-relative w-100 top-20 bg-ql-transparent">
            <div class="container bg-ql-transparent">
                <!-- Cards -->
                <!-- Card 1 -->
                <div class="row bg-ql-transparent">
                    <div class="col-md-4 col-sm-12 col-xs-12 d-flex justify-content-center m-bottom-28">
                        <div class="ql-card">
                            <div class="content-image d-flex justify-content-center m-bottom-28">
                                <img src="./img/like1.svg" alt="Satisfação do nosso cliente garantida!">
                            </div>
                            <h5>Satisfação do nosso cliente garantida!</h5>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-4 col-sm-12 col-xs-12 d-flex justify-content-center m-bottom-28">
                        <div class="ql-card">
                            <div class="content-image d-flex justify-content-center m-bottom-28">
                                <img src="./img/watch1.svg" alt="Eficiência, entregas no prazo acordado!">
                            </div>
                            <h5>Eficiência, entregas no prazo acordado!</h5>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-4 col-sm-12 col-xs-12 d-flex justify-content-center m-bottom-28">
                        <div class="ql-card">
                            <div class="content-image d-flex justify-content-center m-bottom-28">
                                <img src="./img/greeting1.svg" alt="Respeito, transparência e clareza!">
                            </div>
                            <h5>Respeito, transparência e clareza!</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Parte C || CONHEÇA NOSSOS SERVIÇOS-->
    <div class="position-relative">
        <!-- Foto -->
        <div class="ql-servicos" id="services">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="d-flex justify-content-center align-items-center h-100 col-12 col-sm-12 col-xs-12">
                        <div class="content-banner">
                            <!-- Texto -->
                            <h1>Confira os nossos Serviços!</h1>
                            <a href="servico.php">
                                <input class="button-banner" type="button" value="Conheça mais">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Parte D || SOBRE NÓS-->
    <div class="bg-ql-secondary">
        <div class="container ql-about1" id="about">
            <div class="row">
                <!-- Parte 1 -->
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <h1>Sobre nós</h1>
                    <!-- Texto -->
                    <p>
                        A empresa Queiroz & Lima foi fundada em 13/10/2021, pelos sócios e diretores gerais <b>Ivan de Lima Pastor
                            e William Souto de Queiroz.</b> Nova no mercado, mas com um conhecimento gigantesco no meio da construção
                        civil.
                        <br>
                        <br>
                        Já trabalhamos na área <b>há mais de 25 anos</b> com fundação predial, na companhia de funcionários
                        dedicados, pais de família, capacitados e preparados para execução. Garantindo a entrega no prazo ideal,
                        com <b>ação total, segurança, qualidade e eficiência,</b> com foco de crescer no mercado com exelência!
                        <br>
                        <br>
                        Sócios nordestinos e com um objetivo em comum, <b>atender a demanda dos nossos clientes no prazo acordado.</b>
                    </p>
                </div>

                <!-- Imagem -->
                <div class="col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <img src="./img/ql-about-1.svg" class="w-100 img-ql-about m-top-28" alt="Imagem do Ivan 
                    de Lima Pastor e William Souto de Queiroz fundadores da Queiroz & Lima construção civil">
                </div>
            </div>
        </div>

        <div class="container ql-about2">
            <div class="row">
                <!-- Parte 2 -->
                <!-- Imagem -->
                <div class="col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <img src="./img/ql-about-2.svg" class="w-100 img-ql-about" alt="Imagem dos colaboradores 
                    da Queiroz & Lima construção civil">
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12">
                    <!-- Texto -->
                    <p class="m-top-28">
                        Aqui podemos ver alguns dos nossos colaboradores satisfeitos em trabalhar na nossa empresa e fazem questão
                        de fazer parte da Queiroz & Lima. Todos <b>profissionais capacitados, sempre preocupados com a segurança e em
                            oferecer o melhor serviço para você.</b>
                        <br>
                        <br>
                        Vale a pena ressaltar, que teremos dedicação total a você cliente e perceiro que faz parte da Queiros & Lima,
                        o nosso objetivo é sempre <b>crescer e continuar construindo sonhos com os nossos parceiros e aliados.</b>
                        <br>
                        <br>
                        A Queiroz & Lima aceita sua proposta de braços abertos!
                        <br>
                        <b>Entre em contato, venha fazer parte do nosso grupo e ser feliz!</b>
                    </p>
                </div>
            </div>
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
                    <a href="#services">
                        <h6 class="m-rigth-16">Serviços</h6>
                    </a>
                    <a href="#about">
                        <h6 class="m-rigth-16">Sobre</h6>
                    </a>
                    <a href="#contact">
                        <h6>Contato</h6>
                    </a>
                </div>

                <div class="col-4 d-flex justify-content-end">
                    <div>
                        <!-- Botão âncora -->
                        <a href="#">
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
                    <a class="text-dark" href="">ColdWolf</a>
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
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>