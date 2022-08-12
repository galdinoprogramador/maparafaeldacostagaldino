<?php
	include("dados.php");
	//var_dump($tutoriais);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>



<body>
	<header>
		<nav>
			<ul>
				<li><a href="#" title="Promoções" alt="Tutoriais">Contato</a></li>
				<li><a href="#" title="Artigos" alt="Artigos">Quem somos</a></li>
				<li><a href="#" title="Suporte" alt="Suporte">Localização</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		<div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
                        <h1> La Rita Mucha Hambre </h1>
                    </header>
                    <p> Marmitaria </p>
                    <p><a href="#" class="btn">Faça seu pedido online</a></p>
                </div>
            </article>
        </div>
		<section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1>Os mais pedidos da semana:</h1>
				<p>Duvidas em qual prato pedir? Veja abaixo os mais pedidos da semana!</p>
			</header>
			<?php
				foreach($tutoriais as $key => $value){
			?>
			<article>
				<a href="prato1.php?id=<?=$value['id'];?>"><img src=<?=$value['imagem'];?>></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=substr($value['descricao'], 0, 150);?>...</p>
			</article>
			<?php
				}
			?>
			
		</section>
		<!--suport -->
        <article class="main_suport">
            <div class="main_suport_content">
                <header>
                    <h1>Quer receber todas as novidades em seu e-mail?</h1>
                    <p>Informe seu nome e o melhor e-mail no campo ao lado e clique em ok!</p>
                </header>
                <form>
                    <input type="text" placeholder="Seu nome">
                    <input type="email" placeholder="Seu e-mail">
                    <button>OK!</button>
                </form>
            </div>
        </article>
        <!--3ª dobra-->
	</main>

	<footer>

	<footer>

	<h1>Todos os Direitos Reservados a Rafael da Costa Galdino - RA - 21000682-5</h1>

	</footer>


</body>
</html>