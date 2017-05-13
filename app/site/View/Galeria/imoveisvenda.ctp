<div class="col-md-12 fundo-subpaginas">
	<div class="container">
		<div class="titulo-interna">
			<span class="paginacao">Home / Anúncios / Imóveis Vender/Comprar</span>
			<p>Galeria de Anúncios</p>
			<!--<div class="dropdown">
  				<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    				Categorias
    				<span class="caret"></span>
  				</button>
  				<ul class="dropdown-menu" aria-labelledby="dLabel">
    				<li>&nbsp; Recentes</li>
    				<li>&nbsp; Mais vistos</li>
    				<li>&nbsp; Todos</li>
  				</ul>
			</div>-->
		</div>
	</div>
</div>
<div class="container">
	<div class="galeria-conteudo col-md-12">
		<div class="galeria-direita col-md-8">
		<div class="dropdown">
  			<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    			Categorias
    			<span class="caret"></span>
  			</button>
		<ul class="lista-galeria dropdown-menu" aria-labelledby="dropdownMenu3">
			
			<li><a href="http://localhost/prime2/Desenvolvimento/site/galeria/animais">Animais</a></li>
			<li><a href="http://localhost/prime2/Desenvolvimento/site/galeria/automoveis">Automóveis</a></li>
			<li><a href="http://localhost/prime2/Desenvolvimento/site/galeria/bicicletas">Bicicletas</a></li>
			<li><a href="http://localhost/prime2/Desenvolvimento/site/galeria/caminhoes">Caminhões</a></li>
			<li><a href="http://localhost/prime2/Desenvolvimento/site/galeria/celulares">Celulares</a></li>
			<li><a href="http://localhost/prime2/Desenvolvimento/site/galeria/computadores">Computadores</a></li>
			<li><a href="http://localhost/prime2/Desenvolvimento/site/galeria/construcao">Construção</a></li>
			<li><a href="http://localhost/prime2/Desenvolvimento/site/galeria/diversos">Diversos</a></li>
			<li><a href="http://localhost/prime2/Desenvolvimento/site/galeria/eletrodomesticos">Eletrodomésticos</a></li>
			<li><a href="http://localhost/prime2/Desenvolvimento/site/galeria/empregos">Empregos</a></li>
			<li><a href="http://localhost/prime2/Desenvolvimento/site/galeria/imoveisalugar">Imóveis Alugar</a></li>
			<li><a href="http://localhost/prime2/Desenvolvimento/site/galeria/imoveisvenda">Imóveis Vender/Comprar</a></li>
			<li><a href="http://localhost/prime2/Desenvolvimento/site/galeria/maquinas">Máquinas</a></li>
			<li><a href="http://localhost/prime2/Desenvolvimento/site/galeria/motos">Motos</a></li>
			<li><a href="http://localhost/prime2/Desenvolvimento/site/galeria/multimidia">Multimidia</a></li>
			<li><a href="http://localhost/prime2/Desenvolvimento/site/galeria/servicos">Serviços</a></li>
			
		</ul>
		</div>
		<?php foreach($Anuncios as $Anuncio):?>
			<?php if($Anuncio['Anuncio']['categoria'] == "imoveisvenda") {?>
			<div class="anuncio-conteudo-secundario col-md-12">
				<div class="secundario-imagem col-md-5">
				<?php if ($Anuncio['Anuncio']['imagem'] != "") {?>
					<img class="imagem-secundario" src="<?php echo $this->request->base ?>/upload/anuncio/<?php echo $Anuncio['Anuncio']['id'] ?>/316x186-<?php echo $Anuncio['Anuncio']['imagem'] ?>">
				<?php } else { ?>
						<img class="imagem-secundario" src="<?php echo $this->request->webroot;?>/img/logo-anuncio-galeria.png">
						<?php } ?>
				</div>
				<div class="secundario-descricao col-md-7">
						<h4><?php echo $Anuncio['Anuncio']['titulo'];?></h4>
						<p><?php echo $Anuncio['Anuncio']['categoria'];?></p>
						<h3><?php echo $Anuncio['Anuncio']['descricao'];?></h3>
				</div>
			</div>
			<?php }?>
			<?php endforeach;?>
			
			<!--<div class="anuncio-conteudo-secundario col-md-12">
				<div class="secundario-imagem col-md-5">
					<img class="imagem-secundario" src="http://placehold.it/316x186">
				</div>
				<div class="secundario-descricao col-md-7">
						<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
						<p>Lorem ipsum lorem ipsum</p>
						<h3>Lorem lorem lorem lorem lorem lorem lorem</h3>
				</div>
			</div>
			<div class="anuncio-conteudo-secundario col-md-12">
				<div class="secundario-imagem col-md-5">
					<img class="imagem-secundario" src="http://placehold.it/316x186">
				</div>
				<div class="secundario-descricao col-md-7">
						<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
						<p>Lorem ipsum lorem ipsum</p>
						<h3>Lorem lorem lorem lorem lorem lorem lorem</h3>
				</div>
			</div>
			<div class="anuncio-conteudo-secundario col-md-12">
				<div class="secundario-imagem col-md-5">
					<img class="imagem-secundario" src="http://placehold.it/316x186">
				</div>
				<div class="secundario-descricao col-md-7">
						<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
						<p>Lorem ipsum lorem ipsum</p>
						<h3>Lorem lorem lorem lorem lorem lorem lorem</h3>
				</div>
			</div>
			<div class="anuncio-conteudo-secundario col-md-12">
				<div class="secundario-imagem col-md-5">
					<img class="imagem-secundario" src="http://placehold.it/316x186">
				</div>
				<div class="secundario-descricao col-md-7">
						<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
						<p>Lorem ipsum lorem ipsum</p>
						<h3>Lorem lorem lorem lorem lorem lorem lorem</h3>
				</div>
			</div>
			<div class="anuncio-conteudo-secundario col-md-12">
				<div class="secundario-imagem col-md-5">
					<img class="imagem-secundario" src="http://placehold.it/316x186">
				</div>
				<div class="secundario-descricao col-md-7">
						<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
						<p>Lorem ipsum lorem ipsum</p>
						<h3>Lorem lorem lorem lorem lorem lorem lorem</h3>
				</div>
			</div>
			<div class="anuncio-conteudo-secundario col-md-12">
				<div class="secundario-imagem col-md-5">
					<img class="imagem-secundario" src="http://placehold.it/316x186">
				</div>
				<div class="secundario-descricao col-md-7">
						<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
						<p>Lorem ipsum lorem ipsum</p>
						<h3>Lorem lorem lorem lorem lorem lorem lorem</h3>
				</div>
			</div>
			<div class="anuncio-conteudo-secundario col-md-12">
				<div class="secundario-imagem col-md-5">
					<img class="imagem-secundario" src="http://placehold.it/316x186">
				</div>
				<div class="secundario-descricao col-md-7">
						<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
						<p>Lorem ipsum lorem ipsum</p>
						<h3>Lorem lorem lorem lorem lorem lorem lorem</h3>
				</div>
			</div>-->
		</div>
		<div class="galeria-esquerda col-md-4">
			<!--<div class="bloco-redes-sociais col-md-12 col-xs-12">
				<div class="galeria-facebook col-md-6 col-xs-6">
					<i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
					<p>4.000</p>
					<p class="seguidores">Fans</p>
				</div>
				<div class="galeria-instagram col-md-6 col-xs-6">
					<img src="<?php echo $this->request->webroot;?>img/icons/instagram.png">
					<p>2.000</p>
					<p class="seguidores">Seguidores</p>
				</div>
			</div>-->

			<!--<div class="anuncio-lateral col-md-12 col-xs-12">
				<div class="imagem-anuncio-lateral col-md-12 col-xs-12">
					<p>Anúncio<br/> Lateral</p><br/>
					<a href="#">Anunciar</a>
				</div>
			</div>-->

			<!--<div class="galeria-anuncios col-md-12 col-xs-12">
			<div class="nome-sessao">
				<span>Motos</span>
			</div>
			</div>-->
			<?php foreach($Computadores as $Anuncio):?>
				<?php if(($Anuncio['Anuncio']['categoria'] == "computadores") && ($Anuncio['Anuncio']['destaquecategoria'] == "1")) { ?>
			<div class="anuncio-conteudo-secundario col-md-12">
					<div class="secundario-imagem col-md-5">
					<?php if ($Anuncio['Anuncio']['imagem'] != "") {?>
						<img class="imagem-secundario" src="<?php echo $this->request->base ?>/upload/anuncio/<?php echo $Anuncio['Anuncio']['id'] ?>/200x200-<?php echo $Anuncio['Anuncio']['imagem'] ?>">
					<?php } else { ?>
						<img class="imagem-secundario" src="<?php echo $this->request->webroot;?>/img/logo-anuncio.png">
						<?php } ?>
					</div>
					<div class="secundario-descricao col-md-7">
						<h4><?php echo $Anuncio['Anuncio']['titulo'];?></h4>
						<p><?php echo $Anuncio['Anuncio']['categoria'];?></p>
					</div>
			</div>
			<?php } ?>
			<?php endforeach;?>
			

			<?php foreach($Computadores as $Anuncio):?>
				<?php if(($Anuncio['Anuncio']['categoria'] == "empregos") && ($Anuncio['Anuncio']['destaquecategoria'] == "1")) { ?>
			<div class="anuncio-conteudo-outros col-md-12">
			<p><span><?php echo $Anuncio['Anuncio']['anunciante'];?></span> <?php echo $Anuncio['Anuncio']['descricao'];?></p>
			</div>
			<?php } ?>
			<?php endforeach;?>

			<div class="bloco-redes-sociais col-md-12 col-xs-12">
				<div class="fb-like" data-href="https://www.facebook.com/primeinforpatos/" data-width="345" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
			</div>

			<div class="anuncio-lateral">
			<?php foreach($Publicidades as $Publicidade):?>
						<?php if($Publicidade['Publicidade']['local'] == "galeria") { ?>
				<div class="imagem-anuncio-lateral col-md-12">
				
					<img class="img-responsive" src="<?php echo $this->request->base ?>/upload/publicidade/<?php echo $Publicidade['Publicidade']['id'] ?>/350x250-<?php echo $Publicidade['Publicidade']['imagem'] ?>">
				
				</div>
			<?php } ?>
					<?php endforeach;?>
			</div>
		</div>
		<?php  echo $this->element('paginacao'); ?>
	</div>
</div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>