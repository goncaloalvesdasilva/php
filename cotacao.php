<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Data Prevista: ' . $_POST['data_prevista']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Origem: ' . $_POST['origem']);
        // print_r('<br>');
        // print_r('Destino: ' . $_POST['destino']);
         // print_r('<br>');
        // print_r('Itens: ' . $_POST['itens']);
        

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $estado = $_POST['estado'];
        $data_prevista = $_POST['data_prevista'];
        $cidade = $_POST['cidade'];
        $origem = $_POST['origem'];
        $destino = $_POST['destino'];
        $itens = $_POST['itens'];
       

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,estado,data_prevista,cidade,origem,destino,itens) 
        VALUES ('$nome','$senha','$email','$telefone','$estado','$data_prevista','$cidade','$origem','$destino','$itens')");

        header('Location: login.php');
    }

?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>ASFretesemudanças</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="shortcut icon" href="/images/icon.ico">

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  
  <style>
    .whatsapp-link{
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        background-color: #25d366;
        color: #fff;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 1px 1px 2px #888;
        z-index: 1000;
    }
        .fa-whatsapp {
            margin-top: 16px;
        }
        
      .continue-button button {

        background-color: #0066A2;
        color: white;
        border-style: outset;
        border-color: #0066A2;
        height: 50px;
        width: 100px;
        font-size: bold15px arial,sans-serif;
        text-shadow: none;
    }  
     
</style>
  
  
</head>


<body>
  <div class="hero_area custom_page-height">
    <!-- header section strats -->
    <section class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container d-lg-none">
          <a class="navbar-brand" href="#">
            <div class="logo-box">
              <img src="images/logo.png" alt="">
              <span>
                ASFretesemudanças
              </span>
            </div>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li> <!--
              <li class="nav-item">
                <a class="nav-link" href="about.html"> Sobre </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.html"> Serviço</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="cotacao.php"> Cotação <span class="sr-only">(current)</span></a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="header_container ">
          <div class="logo-box">
            <img src="images/logo.png" alt="">
            <span>
              ASFretesemudanças
            </span>
          </div>
          <div>
            <div class="header_top">
              <div class="header_top-contact">

                <a href="" class="ml-4">
                  <div>
                    <img src="images/phone.png" alt="" />
                  </div>
                  <span>
                    (11)958042678
                  </span>
                </a>
                <a href="" class="ml-4">
                  <div>
                    <img src="images/mail.png" alt="" />
                  </div>
                  <span>
                    asfretesemudancas@gmail.com
                  </span>
                </a>
              </div>
              <div class="header_top-social">
                <div>
                  <a href="https://www.facebook.com/profile.php?id=100085636276197">
                    <img src="images/fb.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="images/twitter.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="images/g-plus.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="images/linkedin.png" alt="">
                  </a>
                </div>
              </div>
            </div>
            <div class="header_btm">
              <nav class="navbar navbar-expand-lg custom_nav-container pt-3">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav  ">
                      <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                      </li> <!--
                      <li class="nav-item">
                        <a class="nav-link" href="about.html"> Sobre </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="service.html"> Serviço</a>
                      </li> -->
                      <li class="nav-item">
                        <a class="nav-link" href="cotacao.php"> Cotação </a>
                      </li>
                    </ul>

                  </div>

                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end header section -->


  </div>


  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="d-flex justify-content-center">
      <h2 class="heading_style">
        Empresa de Fretes e Mudanças
      </h2>
    </div>
   
        <div class="container layout_padding2-top">
      <div class="row">
        <div class="col-md-6">
          <div id="map" class="w-100 h-100"></div>
        </div>
        <div class="col-md-6">
          <div class="contact_form-container">
            <div style='text-align:right'><a href="home.php">Área restrita</a></div>
            <div class="box">
                <form action="formulario.php" method="POST">
                    <fieldset>
                        <legend><b>Fórmulário de Clientes</b></legend>
                        <br>
                        <div class="inputBox">
                        	<label for="nome" class="labelInput">Nome completo:</label>
                            <input type="text" name="nome" id="nome" class="inputUser" required>                  
                        </div>
                        <br>
                        <!--<div class="inputBox">
                            <input type="password" name="senha" id="senha" class="inputUser" required>
                            <label for="senha" class="labelInput">Senha</label>
                        </div> -->
                        <br>
                        <div class="inputBox">
                        	<label for="email" class="labelInput">Email:</label>
                            <input type="text" name="email" id="email" class="inputUser" required>              
                        </div>
                        <br>
                        <div class="inputBox">
                        	<label for="telefone" class="labelInput">Telefone:</label> 
                            <input type="tel" name="telefone" id="telefone" class="inputUser" required>                                 
                        </div>
                        <br>
                        <div class="inputBox">                   
                            <label for="estado" class="labelInput">Estado:</label>
                            <br>
                            <select name="estado" id="estado">
                              <option>Selecione...</option>
                              <option value="AC">AC</option>
                              <option value="AL">AL</option>
                              <option value="AP">AP</option>
                              <option value="AM">AM</option>
                              <option value="BA">BA</option>
                              <option value="CE">CE</option>
                              <option value="ES">ES</option>
                              <option value="DF">DF</option>
                              <option value="MA">MA</option>
                              <option value="MT">MT</option>
                              <option value="MS">MS</option>
                              <option value="MG">MG</option>
                              <option value="PA">PA</option>
                              <option value="PB">PB</option>
                              <option value="PR">PR</option>
                              <option value="PE">PE</option>
                              <option value="PI">PI</option>
                              <option value="RJ">RJ</option>
                              <option value="RN">RN</option>
                              <option value="RS">RS</option>
                              <option value="RO">RO</option>
                              <option value="RR">RR</option>
                              <option value="SC">SC</option>
                              <option value="SP">SP</option>
                              <option value="SE">SE</option>
                              <option value="TO">TO</option>
                            </select>
                        </div>
                        <br>
                        <label for="data_nascimento"><b>Data Prevista:</b></label>
                        <input type="date" name="data_prevista" id="data_prevista" required>
                        <br><br>
                        <div class="inputBox">
                        	<label for="cidade" class="labelInput">Cidade:</label>
                            <input type="text" name="cidade" id="cidade" class="inputUser" required>                  
                        </div>
                        <br>
                        <div class="inputBox">
                        	<label for="origem" class="labelInput">Origem - rua, nº, bairro:</label>
                            <input type="text" name="origem" id="origem" class="inputUser" required>                    
                        </div>
                        <br>
                        <div class="inputBox">
                        	<label for="destino" class="labelInput">Destino - rua, nº, bairro:</label>
                            <input type="text" name="destino" id="destino" class="inputUser" required>                    
                        </div>
                        <br>
                        <div class="inputBox">
                            <label for="destino" class="labelInput">Itens:</label> 
                            <br>
                            <textarea name="itens" id="itens" type="text" class="inputUser" required cols="27" rows="5" placeholder="Listar os itens!"></textarea>                                                      
                        </div>
                        <br>
                        <input type="submit" name="submit" id="submit">
                        <input name="limpar" type="reset" id="limpar" value="Limpar Campos!" style="width:210px"/><br />
                    </fieldset>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->



  <!-- info section -->
  <section class="info_section ">
    <div class="container ">
      <div class="row  mb-3 pb-4">
        <div class="col-md-3 info_logo">
          <div class="logo-box">
            <img src="images/logo-white.fw.png" alt="">
            <span>
              ASFreteMudança
            </span>
          </div>
          <p>
            Com o constante crescimento no mercado, a demanda por qualidade e tecnologia,
             alavancaram a empresa que hoje conta com veículos modernos e equipados.
          </p>
          <div class="info_social">
            <div>
              <a href="https://www.facebook.com/profile.php?id=100085636276197">
                <img src="images/fb.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/g-plus.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3 info_address">
          <h5>
            Endereço
          </h5>
          <p>
            Rua Calil Jorge Calixto, 56 Jardim Germânia,
            São Paulo-SP, CEP: 05848-010
          </p>
          <p>
            (11) 95804-2678
          </p>
          <p>
            <a href="">
              asfretesemudancas@gmail.com
            </a>
          </p>
        </div>
        <div class="col-md-3 info_links">

          <div class="info_nav ">
            <nav class="">
              <ul>
                <h5>
                  Links
                </h5>
                <li>
                  <a href="index.html"> Home</a>
                </li>
                <li> <!--
                  <a href="about.html">Sobre</a>
                </li>
                <li>
                  <a href="service.html">Serviço</a>
                </li>
                <li>
                  <a href="shop.html">Shooping</a>
                </li> -->
                <li>
                  <a href="cotacao.php">Cotação</a>
                </li>
                
              </ul>
            </nav>
          </div>
        </div>
        <div class="col-md-3 info_news">
          <h5>
            Newsletter
          </h5>
          <form "">
            <div>
              <input  placeholder="Seu nome" name="nome" type="text"  id="nome" size="70" maxlength="60">
            </div>
            <div>
              <input  placeholder="Email"   name="email" type="text"  id="email" size="70" maxlength="60">
            </div>
            <div class="d-flex justify-content-end">
              <button type="submit">
               Inscrição
              </button>
            </div>
          </form>
        </div>
      </div>


    </div>
  </section>
  <!-- end info section -->

    <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2022 Todos os direitos reservados
      <a href="https://html.design/">AS fretes e mudanças</a>
    </p>
    </section>
  <!-- footer section -->

      <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.js"></script>
       <a class="whatsapp-link" href="https://api.whatsapp.com/send?phone=5511958042678" target="_blank">
           <i class="fa fa-whatsapp"></i>
   <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
          lat: 40.645037,
          lng: -73.880224
        },
      });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 40.645037,
          lng: -73.880224
        },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- google map js -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <!-- end google map js -->   
 </body>
</html>