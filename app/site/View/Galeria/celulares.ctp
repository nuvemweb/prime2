<?php 
function showReadMore($string){
	$string = strip_tags($string);

	if (strlen($string) > 250) {

	    $stringCut = substr($string, 0, 250);

	    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
	}
	return $string;
}
?>
<div class="col-md-12 fundo-subpaginas">
	<div class="container">
		<div class="titulo-interna">
			<span class="paginacao">Home / Anúncios / Celulares</span>
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
			
			<li><a href="<?php echo $this->request->base ?>/galeria/animais">Animais</a></li>
			<li><a href="<?php echo $this->request->base ?>/galeria/automoveis">Automóveis</a></li>
			<li><a href="<?php echo $this->request->base ?>/galeria/bicicletas">Bicicletas</a></li>
			<li><a href="<?php echo $this->request->base ?>/galeria/caminhoes">Caminhões</a></li>
			<li><a href="<?php echo $this->request->base ?>/galeria/celulares">Celulares</a></li>
			<li><a href="<?php echo $this->request->base ?>/galeria/computadores">Computadores</a></li>
			<li><a href="<?php echo $this->request->base ?>/galeria/construcao">Construção</a></li>
			<li><a href="<?php echo $this->request->base ?>/galeria/diversos">Diversos</a></li>
			<li><a href="<?php echo $this->request->base ?>/galeria/eletrodomesticos">Eletrodomésticos</a></li>
			<li><a href="<?php echo $this->request->base ?>/galeria/empregos">Empregos</a></li>
			<li><a href="<?php echo $this->request->base ?>/galeria/imoveisalugar">Imóveis Alugar</a></li>
			<li><a href="<?php echo $this->request->base ?>/galeria/imoveisvenda">Imóveis Vender/Comprar</a></li>
			<li><a href="<?php echo $this->request->base ?>/galeria/maquinas">Máquinas</a></li>
			<li><a href="<?php echo $this->request->base ?>/galeria/motos">Motos</a></li>
			<li><a href="<?php echo $this->request->base ?>/galeria/multimidia">Multimidia</a></li>
			<li><a href="<?php echo $this->request->base ?>/galeria/servicos">Serviços</a></li>
			
		</ul>
		</div>
		<?php foreach($Anuncios as $Anuncio):?>
			<?php if($Anuncio['Anuncio']['categoria'] == "celulares") {?>
			<div class="anuncio-conteudo-secundario col-md-12">
				<div class="secundario-imagem col-md-5">
				<?php if ($Anuncio['Anuncio']['imagem'] != "") {?>
					<a href="<?php echo $this->request->base ?>/galeria/view/<?php echo $Anuncio['Anuncio']['id']?>"><img class="imagem-secundario" src="<?php echo $this->request->base ?>/upload/anuncio/<?php echo $Anuncio['Anuncio']['id'] ?>/316x186-<?php echo $Anuncio['Anuncio']['imagem'] ?>"></a>
				<?php } else { ?>
						<a href="<?php echo $this->request->base ?>/galeria/view/<?php echo $Anuncio['Anuncio']['id']?>"><img class="imagem-secundario" src="<?php echo $this->request->webroot;?>/img/logo-anuncio-316.png"></a>
						<?php } ?>
				</div>
				<div class="secundario-descricao col-md-7">
						<h4><?php echo $Anuncio['Anuncio']['titulo'];?></h4>
						<p><?php echo $Anuncio['Anuncio']['categoria'];?></p>
						<a href="<?php echo $this->request->base ?>/galeria/view/<?php echo $Anuncio['Anuncio']['id']?>"><h3 class="galeria-linhas"><?php echo showReadMore($Anuncio['Anuncio']['descricao']);?></h3></a>
				</div>
			</div>
			<?php } ?>
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
						<a href="<?php echo $this->request->base ?>/galeria/view/<?php echo $Anuncio['Anuncio']['id']?>"><img class="imagem-secundario" src="<?php echo $this->request->base ?>/upload/anuncio/<?php echo $Anuncio['Anuncio']['id'] ?>/200x200-<?php echo $Anuncio['Anuncio']['imagem'] ?>"></a>
					<?php } else { ?>
						<a href="<?php echo $this->request->base ?>/galeria/view/<?php echo $Anuncio['Anuncio']['id']?>"><img class="imagem-secundario" src="<?php echo $this->request->webroot;?>/img/logo-anuncio-200.png"></a>
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
			<a href="<?php echo $this->request->base ?>/galeria/view/<?php echo $Anuncio['Anuncio']['id']?>"><p><span><?php echo $Anuncio['Anuncio']['titulo'];?></span> <?php echo showReadMore($Anuncio['Anuncio']['descricao']);?></p></a>
			</div>
			<?php } ?>
			<?php endforeach;?>

			<div class="bloco-redes-sociais col-md-12 col-xs-12">
				<div class="fb-like" data-href="https://www.facebook.com/primeinforpatos/" data-width="345" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
			</div>

			<div class="anuncio-lateral col-xs-12">
			<?php foreach($Publicidades as $Publicidade):?>
						<?php if($Publicidade['Publicidade']['local'] == "galeria") { ?>
				<div class="imagem-anuncio-lateral col-md-12">
				
					<a href="<?php echo $Publicidade['Publicidade']['link'] ?>" target="_blank"><img class="img-responsive" title="<?php echo $Publicidade['Publicidade']['nome'] ?>" alt="<?php echo $Publicidade['Publicidade']['nome'] ?>" src="<?php echo $this->request->base ?>/upload/publicidade/<?php echo $Publicidade['Publicidade']['id'] ?>/350x250-<?php echo $Publicidade['Publicidade']['imagem'] ?>"></a>
				
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
