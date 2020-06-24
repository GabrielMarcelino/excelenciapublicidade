<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contato - Excelência Publicidade</title>
    <link rel="shortcut icon" href="img/favicon.png" />

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fuelux.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">
    <link href="css/demais-pages.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <header id="home">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="index.html"><img alt="" title="" class="loogo" src="img/logo.jpg" /></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="index.html">HOME</a>
                    </li>
                    <!--<li>
                        <a class="page-scroll dropdown" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#services">NOSSOS SERVIÇOS <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"> <i class="fa fa-print" aria-hidden="true"></i> &nbsp; GRÁFICA</a></li>
                            <li><a href="#"> <i class="fa fa-picture-o" aria-hidden="true"></i> &nbsp; COMUNICAÇÃO VISUAL</a></li>
                            <li><a href="#"> <i class="fa fa-paint-brush" aria-hidden="true"></i> &nbsp; PERSONALIZADO</a></li>
                        </ul>
                    </li>-->
                    <li>
                        <a class="page-scroll" href="grafica.html">GRÁFICA</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="comunicacao-visual.html">COMUNICAÇÃO VISUAL</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="personalizado.html">PERSONALIZADO</a>
                    </li>
                    <li>
                        <a style="text-decoration: underline;" class="page-scroll" href="contato.php">CONTATO</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1><span class="sp">Excelência</span><br><span class="ss"><i>Publicidade</i></span></h1>
                        <h3>Criando sua identidade visual.</h3>
                        <hr class="intro-divider">
                        
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    </header>
    <!-- /.intro-header -->
<!--  CONTATO  -->
    <section id="contato" class="contato">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 sub-title-div">
                    <h2 class="sub-title">Contato <i class="fa fa-sign-in" aria-hidden="true"></i></h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 contatos-total">
                    <div class="col-md-4 info-contatos">
                        <h3>Informações de Contato:</h3>
                        <br>
                        <ul>
                            <li><i style="color: #fe6400;" class="fa fa-map-marker"></i> <b> Local:</b> Rio de Janeiro, Brasil.</li><br>
                            <li><i style="color: #fe6400;" class="fa fa-calendar"></i> <b> Atendimento:</b> <br>Segunda à Sexta, de 08:00 às 18:00 hrs.</li><br>
                            <li><i style="color: #fe6400;" class="fa fa-envelope"></i> <b> E-mail:</b> contato@excelenciapublicidade.com.br</li><br>
                            <li><i style="color: #fe6400; font-size: 1.4em;" class="fa fa-phone"></i> <b> Telefone:</b> (21) 99999-8888</li><br>
                            <li><i style="color: #2cc866; font-size: 1.4em;" class="fa fa-whatsapp"></i> <b> WhatsApp:</b> (21) 99999-8888</li><br>
                        </ul>
                    </div>
                    <div class="col-md-8 deixe-mensagem">
                        <h3>Deixe sua Mensagem:</h3>
                        
                           
                           <!--  SCRIPT ENVIO DE EMAILS -->
					
					
					<?php if (isset($_POST['BTEnvia'])){
 
	                     //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
 	                     //====================================================
	                     $email_remetente = "contato@mclweb.com.br"; // deve ser um email do dominio
	                     //====================================================
 
 
	                     //Configurações do email, ajustar conforme necessidade
	                     //====================================================
	                     $email_destinatario = "excelencia.setordevendas@gmail.com"; // qualquer email pode receber os dados
	                     $email_reply = "$email";
	                     $email_assunto = "Contato do Site - Via Formulário.";
	                     //====================================================
 
 
	                     //Variaveis de POST, Alterar somente se necessário
	                     //====================================================
	                     $nome = $_POST['nome'];
	                     $email = $_POST['email'];
	                     $telefone = $_POST['phone'];
                         $servico = $_POST['servico'];
 	                     $mensagem = $_POST['mensagem'];
	                     //====================================================
 
	                     //Monta o Corpo da Mensagem
	                     //====================================================
	                     $email_conteudo = "Nome = $nome \n"; 
	                     $email_conteudo .= "Email = $email \n"; 
	                     $email_conteudo .=  "Telefone = $telefone \n";
                         $email_conteudo .=  "Serviço de Interesse = $servico \n";
	                     $email_conteudo .=  "Mensagem = $mensagem \n";
 	                     //====================================================
 
	                     //Seta os Headers (Alerar somente caso necessario)
	                     //====================================================
	                     $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Subject: $email_assunto","Return-Path:  $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	                     //====================================================
 
 
	                     //Enviando o email
	                     //====================================================
	                     if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){
		                     
                             echo "<script>alert('Foi enviado com sucesso $nome, em breve lhe responderemos ... Obrigado !');</script>";

	                    }
  	                    else{
		                     echo "</b>Falha no envio do E-Mail!</b>";
	                    }
	                     //====================================================
                        }	
                    ?>
                                                
                        
                            <form class="form" action="<? $PHP_SELF; ?>" method="post" >
                            
			                <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input name="nome" placeholder="Nome" type="text" class="form-control" id="nome" required>
                            </div>
                            <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input name="email" placeholder="E-mail" type="email" class="form-control" id="email" required>
                            </div>
                            <div class="form-group">
                            <label for="telefone">Telefone:</label>
                            <input name="telefone" placeholder="Telefone" type="tel" class="form-control" id="telefone" required>
                            </div>
                            <div class="form-group">
                            <label for="servico">Serviço:</label>
                            <input name="servico" placeholder="Escreva o serviço de interesse" type="text" class="form-control" id="servico" required>
                            </div>
                            <div class="form-group">
                            <label for="mensagem">Mensagem:</label>
                            <textarea name="mensagem" placeholder="Mensagem" type="text" class="form-control" id="mensagem" required></textarea>
                            </div>
				            <input class="submit-btn btn" name="BTEnvia" type="submit" value="Enviar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><br>

<!-- Começo "Footer" -->
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <img alt="" title="" class="" src="img/logo-quad.png" />
                </div>
                <div class="col-lg-6">
                    <h3>Sobre a Excelência Publicidade</h3>
                    <p>Somos uma equipe que atua há anos no mercado de Publicidade para os mais diversos tipos de empresa. Baseado nessa experiência, decidimos oferecer qualidade e funcionalidade para clientes de todo o Brasil. Desenvolvemos uma linha para soluciona necessidades de forma rápida, acessível, e sem deixar o mais importante de fora: o bom gosto.
                    <br><br>
                    Também temos soluções para sua empresa de forma personalizada, pois sabemos como é importante a impressão de um estilo próprio no mercado de hoje.
                    Podemos ajudar e sabemos como fazer isso da melhor forma possível.</p>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->
    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4 footer-item">
                        <div class="fb-page" data-href="https://www.facebook.com/excelenciaartesgraficas/" data-width="270px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/excelenciaartesgraficas/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/excelenciaartesgraficas/">Excelência Publicidade</a></blockquote></div>
                    </div>
                    <div class="col-md-4 footer-item footer-meio">
                        <h4>Excelência Publicidade</h4>
                        <p><i class="fa fa-calendar" aria-hidden="true"></i> Segunda-feira à Sexta-feira<br>
                           <i class="fa fa-clock-o" aria-hidden="true"></i> 08:00 às 17:00 horas <br> 
                           <i class="fa fa-envelope" aria-hidden="true"></i> contato@excelenciapublicidade.com.br<br>
                           <i class="fa fa-whatsapp" aria-hidden="true"></i> 21 97389-9471</p>
                    </div>
                    <div class="col-md-4 footer-item footer-terceiro">
                        <h4>Redes Sociais:</h4>
                        <a target="_blank" href="https://www.facebook.com/excelenciaartesgraficas/"><div class="footer-face">
                            <span>Facebook</span>
                        </div></a>
                        <a target="_blank" href="https://www.instagram.com/excelencia.setordevendas/"><div class="footer-twitter">
                            <span>Instagram</span>
                        </div></a>
                    </div>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="copyright text-muted small">Copyright &copy; Excelência Publicidade 2017. Developer By: <a href="http://mclweb.com.br" target="_blank">Mcl - Soluções Web</a></p>
                </div>        
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/scroll.js" type="text/javascript"></script>
    
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

</body>

</html>
