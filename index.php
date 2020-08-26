<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Projeto 01</title>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300,400;1,700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/62ed879477.js" crossorigin="anonymous" href="<?php echo INCLUDE_PATH; ?>"></script>
	<link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"><!--tag do design responsivo--> 
	<meta name="keywords" content="palavras-chave,do,meu,site"><!--Palavras chave do site-->
	<meta name="description" content="Descrição do meu website"><!--Para o google saber a descrição do site.-->
	<meta charset="utf-8" />
</head>
<body>
	<header>
		<div class="center">
			<div class="logo left"><a href="/">Logomarca</a></div><!--logo-->
			<nav class="desktop right"><!--Navegação p/ desktop.Dependendo do tamanho da tela, ela ficará escondida e a mobile aparece.-->
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contatos">Contato</a></li>
				</ul>
			</nav>
			 <nav class="mobile right"><!--Navegação p/ mobile.Dependendo do tamanho da tela, ela ficará escondida e a desktop aparece.-->
			 	<!--O menu dará lugar a esse ícone qdo a tela reduzir p/ 700px-->
			 	<div class="botao-menu-mobile">
			 		<i class="fas fa-bars"></i>
			 	</div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>"sobre>Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>"servicos>Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>"contatos>Contato</a></li>
				</ul>
			</nav>
			<div class="clear"></div><!--Para o background voltar a aparecer-->
		</div><!--center-->
	</header>

	<section class="banner-principal">
		<div class="overlay"></div><!--overlay - vai ter opacidade dem cima da imagem.-->
		<div class="center">
			<form>
				<h2>Qual o seu melho e-mail?</h2>
				<input type="email" name="email" required>
				<input type="submit" name="acao" value="Cadastrar">
			</form>
		</div><!--center-->
	</section><!--banner-principal-->

	<section class="descricao-autor">
		<div class="center">
			<div class="w50 left"><!--w50 sempre no css vai pegar 50% da largura da tela.-->
				<h2>Guilherme C. Grillo</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
			</div><!--w50-->
			<div class="w50 left">
				<img class="right" src="<?php echo INCLUDE_PATH; ?>images/foto.jpg">
			</div><!--w50-->
			<div class="clear"></div><!--Ao utilizar float, a altura ñ é mais calculada e tem q/ limpar. p/ ñ ter problema de espaçamento.-->
		</div><!--center-->
	</section><!--descricao-autor-->

	<section class="especialidades"><!--Ao utilizar float, a altura ñ é mais calculada e tem q/ limpar.-->
		<div class="center">
		<h2 class="title">Especialidades</h2>
			<div class="w33 left box-especialidade">
				<h3><i class="fab fa-css3"></i></h3>
				<h4>CSS3</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
			</div><!--box-especialidade-->
			<div class="w33 left box-especialidade"><!--Será utilizada qdo. tiver 3 box na mesma fileira.-->
				<h3><i class="fab fa-html5"></i></h3>
				<h4>HTML5</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
			</div><!--box-especialidade-->
			<div class="w33 left box-especialidade">
				<h3><i class="fab fa-js-square"></i></h3>
				<h4>JavaScript</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
			</div><!--box-especialidade-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--especialidades-->

	<section class="extras">
		<div class="center">
			<div class="w50 left depoimentos-container">
				<h2 class="title">Depoimentos dos nossos clientes</h2>
				<div class="depoimento-single">
					<p class="depoimento-descricao">"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old."</p>
					<p class="nome-autor">Lorem Ipsum</p>
				</div><!--depoimento-single-->
				<div class="depoimento-single">
					<p class="depoimento-descricao">"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old."</p>
					<p class="nome-autor">Lorem Ipsum</p>
				</div><!--depoimento-single-->
				<div class="depoimento-single">
					<p class="depoimento-descricao">"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old."</p>
					<p class="nome-autor">Lorem Ipsum</p>
				</div><!--depoimento-single-->
			</div><!--w50-->
			<div class="w50 left servicos-container">
				<h2 class="title">Serviços</h2>
				<div class="servicos">
					<ul>
						<li>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</li>
						<li>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</li>
						<li>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</li>
					</ul>
				</div><!--servicos-->
			</div><!--w50-->
			<div class="clear">
		</div><!--center-->
	</section><!--extras-->

	<footer>
		<div class="center">
			<p>Todos os direitos reservados</p>
		</div><!--center-->
	</footer>
	<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
	<!--/Aqui vão ficar todos os códios javaScript.-->
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script><!--está importando arquivos externos-->
</body>
</html>