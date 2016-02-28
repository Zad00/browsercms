<html>
<head>
	<title>Browser Hotel - Crie seu personagem e divirta-se!</title>
	<link rel="stylesheet" type="text/css" href="css/estiloindex.css" />
	<link rel="stylesheet" type="text/css" href="css/animate.css" />
	<script type=”text/javascript” src=”js/js-index.js”></script>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300' rel='stylesheet' type='text/css'>
	<script type=”text/javascript” src=”js/jquery-1.4.2.js”></script>
    <script type=”text/javascript” src=”js/coin-slider.min.js”></script>
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <link rel=”stylesheet” href=”js/coin-slider-styles.css” type=”text/css” />
	<meta charset="utf-8" />
	<meta name="title" content="Browser Hotel">
	<meta name="author" content="Mad,Bender">
	<meta name="description" content="habbo pirata, habbo, browser, hotel">
</head>

<script type="text/javascript">
	function registrar() {
		document.getElementById('botao-registro').style.display = "none";
		document.getElementById('termo-de-uso').style.display = "none";
		document.getElementById('pagina-registro').style.display = "block";
	}

	function faq() {
		document.getElementById('botao-registro').style.display = "none";
		document.getElementById('termo-de-uso').style.display = "none";
		document.getElementById('faq').style.display = "block";
	}

</script>

<body>
<div id="menu-login">
    <div id="logo"></div>
	<div id="login">
		<input type="text" name="usuario" value="" placeholder="Seu usuário">
		<input type="password" name="senha" value="" placeholder="Sua senha">
		<input type="button" name="entrar" class="botao-login" value="Entrar">
	</div>
</div>

<div id="registro">
	<p class="titulo-info">Crie sua conta!</p>
	<h1 class="texto-info">Não perca a festa, entre já!</h1>
	<input type="button" name="registrar" id="botao-registro" value="Criar uma conta" onClick="registrar('botao-registro')">
	<input type="button" name="faq" id="termo-de-uso" value="Leia nosso FAQ" onClick="faq('faq')">

	<div id="pagina-registro" class="escondido animated bounceInRight">
		<input type="text" class="registrando" name="usuario-registro" value="" placeholder="Nome de usuário"><br />
		<input type="text" class="registrando" name="email" value="" placeholder="E-mail"><br />
		<input type="password" class="registrando" name="senha-registro" value="" placeholder="Senha"><br />
		<p class="texto-registro">Digite o código: <b>Browser, o melhor hotel!</b></p>
		<input type="text" class="registrando" name="codigo" value="" placeholder="Digite o código de segurança"><br />
		<input type="button" class="envio-de-registro" name="envio-de-registro" value="Registrar">
	</div>

	<div id="faq" class="escondido animated bounceInRight">
		<p class="texto-faq">O nosso hotel tem conceitos simples de regras: <br /><br /> <b>1.</b> Não ofender usuários. <br /> <b>2.</b> Não divulgar outros hotéis. <br /> <b>3.</b> Não ofender membros da moderação. <br/> <b>4.</b> É proibido quaisquer difamações dirigidas ao hotel. <br /><br /> Siga-as para evitar banimento.</p>
	</div>
</div>


<div id="imagem-index"></div>

<div id="footer">
	<p class="texto-footer">2015 - 2016 © <b>BrowserCMS</b>. Feita por <b>Mad & Bender</b>. <br /> Sem vínculos com a Sulake Oy Corporation. <br /> Tema atual: <b>Browser</b>. Baseada na HeularCMS.</p>
	<p class="navegadores">Recomendamos o uso dos seguintes navegadores: <b>Google Chrome</b> & <b>Opera.</b></p>
</div>


</body>


</html>