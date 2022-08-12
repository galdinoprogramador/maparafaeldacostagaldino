<?php
	include("dados.php");

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
				<li><a href="#" title="Tutoriais" alt="Tutoriais">Contato</a></li>
				<li><a href="#" title="Artigos" alt="Artigos">Quem somos</a></li>
				<li><a href="#" title="Suporte" alt="Suporte">Localização</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		
		<section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1>El Matador</h1>
				<p>O prato ideal para você que está com fome de matar!</p>
			</header>
			<?php
                $id = $_GET['id'];
                echo 
				"
				- Carne de Primeira 
				- Arroz
				- Batata frita
				- Salada 
				- Feijão
				- Farofa 
				- Preço: R$24,90 (fixo, sem balança)

				" 
				. $id;

				foreach($tutoriais as $key => $value){
                    if($value['id'] == $id){
			?>
			<article>
				<a href="#"><img src=<?=$value['imagem'];?>></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=$value['descricao'];?></p>
			</article>
			<?php
                    }
				}
			?>
			
		</section>


       
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

	</main>

	<footer>

	<p>Todos os Direitos Reservados a Rafael da Costa Galdino - RA - 21000682-5</p>

	</footer>

</body>
</html>