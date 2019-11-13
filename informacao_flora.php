<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Flora</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Link do CSS -->
    <link rel="stylesheet" type="text/css" href="http://localhost/reflore_se/assets/css/informacao_flora.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/reflore_se/assets/css/menu-2.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/reflore_se/assets/css/style.css"><!-- Style do rodapé -->

    <!-- Link do Icone -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Link do CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



    <!-- Link do Template Story (galeria)-->
    <link rel="stylesheet" href="http://localhost/reflore_se/assets/css/s_css/main.css" />
        <noscript><link rel="stylesheet" href="http://localhost/reflore_se/assets/css/s_css/noscript.css" /></noscript>

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<div class="site-wrap">
	<div class="site-mobile-menu site-navbar-target">
		<div class="site-section-header">
			<div class="site-mobile-menu-close mt-3">
				<span class="icon-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>
	<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-6 col-xl-2">
					<h1 class="mb-0 site-logo"><a href="http://localhost/reflore_se/index.php/principal/" class="h2 mb-0">Reflore</a></h1>
				</div>
				<div class="col-12 col-md-10 d-none d-xl-block">
					<nav class="site-navigation position-relative text-right" role="navigation">
						<ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
							<li><a href="http://localhost/reflore_se/index.php/principal" class="nav-link">Home</a></li>
							<li><a href="http://localhost/reflore_se/index.php/principal/flora" class="nav-link">Mudas</a></li>
                            <li><a href="http://localhost/reflore_se/index.php/principal/pedido" class="nav-link">Fazer Pedido</a></li>
                                <?php
                                    if(isset($_SESSION['usuario logado'])){
                                    echo "
                                    <li class='nav-item'>
                                        <a class='nav-link' href='http://localhost/reflore_se/index.php/principal/minhaconta'>Minha Conta</a>
                                        </li>
                                        <li class='nav-item'>
                                        <a class='nav-link' href='http://localhost/reflore_se/index.php/principal/sair'>Sair</a>
                                        </li>";
                                    }else{
                                    echo "
                                    <li class='nav-item'>
                                        <a class='nav-link' href='http://localhost/reflore_se/index.php/principal/login'>Entrar</a>
                                    </li>";
									}
                                ?>
						</ul>
					</nav>
				</div>
				<div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;">
					<a href="#" class="site-menu-toggle js-menu-toggle text-black float-right">
						<span style="color: white;" class="icon-menu h3"></span>
					</a>
				</div>
			</div>
		</div>
	</header>
</div>
<div class="total">
    <img class="img-fluid float-left" src="http://localhost/reflore_se/assets/img/img_informacao_flora.jpg">
    <div class="desc">
        <h2 class="text">Nome da planta</h2>
        <h5 class="text">Descrição</h5>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type
            specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in 
            the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
            and more recently with desktop publishing software like Aldus PageMaker including
            versions of Lorem Ipsum.    
    </div>
</div>
    <div class="dicas">
            <h5 class="text">Dicas</h5>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type
                specimen book. It has survived not only five centuries, but also the leap into
                electronic typesetting, remaining essentially unchanged. It was popularised in 
                the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                and more recently with desktop publishing software like Aldus PageMaker including
                versions of Lorem Ipsum.

                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in 
                a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked 
                up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and 
                going through the cites of the word in classical literature, discovered the undoubtable 
                source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et 
                Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a 
                treatise on the theory of ethics, very popular during the Renaissance. The first line 
                of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those 
                interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by 
                Cicero are also reproduced in their exact original form, accompanied by English 
                versions from the 1914 translation by H. Rackham.
        </div>
    
<!-- RODAPÉ -->
<div class="footer">
	<div class="row m-3">
		<div class="col logo mt-3">
			<a class="icone" href="http://localhost/reflore_se/index.php/principal/">
				<img src="http://localhost/reflore_se/assets/img/logooficial.png" width="80" height="80" class="d-inline-block align-top" alt="">
			Reflore-se
			</a>
			<div class="slogan mt-4">Slogan.</div>
		</div>

		<div class="col mt-3">
			<h5>Parcerias</h5>
			<a class="parceria" href="#">Borque dos Namorados</a><br>
			<a class="parceria" href="#">IF-Central</a>
		</div>

		<div class="col mt-3">
			<h5>Redes Sociais</h5>
			<a href=""><i class="fab fa-facebook-f rounded-circle"></i></a>
			<a href=""><i class="fab fa-instagram rounded-circle"></i></a>
			<a href=""><i class="fab fa-twitter rounded-circle"></i></a>
			<a href=""><i class="fab fa-youtube rounded-circle"></i></a>
		
		</div>
	</div>
</div>

<div class="copyright p-2 text-center text-white">
	&copy; 2019 - Reflore-se
</div>

</body>
</html>