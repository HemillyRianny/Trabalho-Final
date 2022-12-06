<!DOCTYPE html>
<html lang="en">

<head>
    <title>ORGANIZADOR DE ESTUDOS </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

    <style>
       #praBaixo{
        margin-top: 5px;
       }
       #pRabaixo{
        margin-top: 5px;
       }
    </style>

</head>


<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">




    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

            <div class="container-fluid">
                <div class="d-flex align-items-center">
                    <div class="site-logo mr-auto w-25"><a href="index.html">Organizador de Estudos</a></div>

                    <div class="mx-auto text-center">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">

                            </ul>
                        </nav>
                    </div>

                    <div class="ml-auto w-25">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                              
                            </ul>
                        </nav>
                        <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
                    </div>
                </div>
            </div>

        </header>

        <div class="intro-section" id="home-section">

            <div class="slide-1" style="background-image: url('images/hero_1.jpg');" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="row align-items-center">
                                <div class="col-lg-6 mb-4">
                                    <h1 data-aos="fade-up" data-aos-delay="100">Gostaria de organizar seus estudos?</h1>
                                    <p class="mb-4" data-aos="fade-up" data-aos-delay="200">Está no lugar certo, nosso site é perfeito para isso.</p>
                                    
                                </div>

                                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                                    <form action="" method="post" class="form-box">
                                        <h3 class="h4 text-black mb-4">Log in</h3>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Email" name="name">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Senha" name= "senha">
                                        </div>
                                        
                                        <div>
                                            <!--Botão de entrar-->

                                            <input type="submit" data-aos="fade-up" data-aos-delay="300" class="btn btn-primary py-3 px-5 btn-pill" value="Entrar" name="entrar"> 
                                            <a href="registro.php" data-aos="fade-up" data-aos-delay="300" class="btn btn-primary py-3 px-5 btn-pill">Registro</a> 
                                            <a href="Deletar.php" data-aos="fade-up" data-aos-delay="300" class="btn btn-primary py-3 px-5 btn-pill " id="praBaixo" >Deletar </a>  
                                            <a href="atualizar.php" data-aos="fade-up" data-aos-delay="300" class="btn btn-primary py-3 px-5 btn-pill" id="pRabaixo">Atualizar </a> 
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
                 

     
    </div>
    <!-- .site-wrap -->

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>


    <script src="js/main.js"></script>

     <!--conexão banco de dados -->
     <?php
     $servername = "localhost";
     $username = "root";
     $password = "root";
     $dbname = "site";
     
     // define as variáveis a usar e as deixa em branco
     $nome = $senha = "";
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $name = valida($_POST["name"]);
     $senha = valida($_POST["senha"]);
     $conn =  mysqli_connect ($servername, $username, $password, $dbname);

     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
       }
          
          $sql = "SELECT * FROM estudante WHERE estudante.nome = $name AND estudante.senha = $senha";
          $result = $conn->query($sql);

          if (mysql_num_rows($result)<=0){
            echo"ERRO";
          }else{
            header("Location:Materias.php");
          }
        }
     ?>
   

</body>

</html>