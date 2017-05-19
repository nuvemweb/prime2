<?php 
function showReadMore($string){
	$string = strip_tags($string);

	if (strlen($string) > 80) {

	    $stringCut = substr($string, 0, 80);

	    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
	}
	return $string;
}
?>

<section class='col-xs-12 col-sm-12 col-md-12 slider'>
	<?php echo $this->Element('slider'); ?>
</section>
<div class="container">
	<div class="row">
		<div class="titulo col-md-12">
			<a href="">Ultimos anúncios</a>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="anuncios-principais">
		<?php for($i = 0; $i <= 3; $i++) { ?>
		
			<figure class="col-md-3 col-xs-12 anuncio-principal">
			<?php if ($Anuncios[$i]['Anuncio']['imagem'] != "") {?>
				<a href="http://www.classificadosprime.com.br/var/www/html/classificadosprime.com.br/web/site/galeria/view/<?php echo $Anuncios[$i]['Anuncio']['id']?>"><img class="img-responsive" src="<?php echo $this->request->base ?>/upload/anuncio/<?php echo $Anuncios[$i]['Anuncio']['id'] ?>/263x350-<?php echo $Anuncios[$i]['Anuncio']['imagem'] ?>"/></a>
			<?php } else { ?>
						<a href="http://www.classificadosprime.com.br/var/www/html/classificadosprime.com.br/web/site/galeria/view/<?php echo $Anuncios[$i]['Anuncio']['id']?>"><img class="img-responsive" src="<?php echo $this->request->webroot;?>/img/logo-anuncio350.png"></a>
						<?php } ?>
				<figcaption>
					<h4><span><?php echo $Anuncios[$i]['Anuncio']['categoria'];?></span></h4><br/>
					<p><?php echo $Anuncios[$i]['Anuncio']['titulo'];?></p>
				</figcaption>
			</figure>
		
		<?php } ?>

			<!--<figure class="col-md-3 col-xs-12 anuncio-principal">
				<img src="http://placehold.it/300x400"/>
				<figcaption>
					<h4><span>Nome</span></h4><br/>
					<p>Descrição curta</p>
				</figcaption>
			</figure>
			<figure class="col-md-3 col-xs-12 anuncio-principal">
				<img src="http://placehold.it/300x400"/>
				<figcaption>
					<h4><span>Nome</span></h4><br/>
					<p>Descrição curta</p>
				</figcaption>
			</figure>
			<figure class="col-md-3 col-xs-12 anuncio-principal">
				<img src="http://placehold.it/300x400"/>
				<figcaption>
					<h4><span>Nome</span></h4><br/>
					<p>Descrição curta</p>
				</figcaption>
			</figure>-->
		</div>
	</div>
</div>
<div class="container">
	<div class="col-md-12 col-xs-12 galeria">
		<div class="galeria-anuncios col-md-8 col-xs-12">
		<div class="nome-sessao nome-sessao-galeria">
			<span>Galeria</span>
			<a href="http://www.classificadosprime.com.br/site/galeria">Ver todos</a>
			<!--<div class="dropdown">
  			<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    			Categorias
    			<span class="caret"></span>
  			</button>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenu3">
				<li><a href="#">Todos</a></li>
				<li><a href="#">Imóveis</a></li>
				<li><a href="#">Automóveis</a></li>
				<li><a href="#">Animais</a></li>
				<li><a href="#">Motos</a></li>
				<li><a href="#">Empregos</a></li>
				<li><a href="#">Serviços</a></li>
				<li><a href="#">Bicicletas</a></li>
				<li><a href="#">Caminhões</a></li>
				<li><a href="#">Celulares</a></li>
				<li><a href="#">Computadores</a></li>
				<li><a href="#">Diversos</a></li>
				<li><a href="#">Eletrodomésticos</a></li>
				<li><a href="#">Máquinas</a></li>
				<li><a href="#">Construção</a></li>
				<li><a href="#">Multimidia</a></li>
			</ul>
			</div>-->
		</div>

			<div class="galeria-anuncios-conteudo col-md-12 col-xs-12">
				<div class="anuncio-conteudo-principal col-md-6 col-xs-12">
					<figure> 
					<?php foreach($Anuncios as $Anuncio):?>
						<?php if(($Anuncio['Anuncio']['categoria'] == "automoveis") && ($Anuncio['Anuncio']['destaquecategoria'] == "1")) { ?>
						<?php if ($Anuncio['Anuncio']['imagem'] != "") {?>
						<a href="http://www.classificadosprime.com.br/var/www/html/classificadosprime.com.br/web/site/galeria/view/<?php echo $Anuncio['Anuncio']['id']?>"><img src="<?php echo $this->request->base ?>/upload/anuncio/<?php echo $Anuncio['Anuncio']['id'] ?>/335x270-<?php echo $Anuncio['Anuncio']['imagem'] ?>"></a>
						<?php } else { ?>
						<a href="http://www.classificadosprime.com.br/var/www/html/classificadosprime.com.br/web/site/galeria/view/<?php echo $Anuncio['Anuncio']['id']?>"><img class="imagem-secundario" src="<?php echo $this->request->webroot;?>/img/logo-anuncio-335.png"></a>
						<?php } ?>
						  <?php } ?>
					<?php endforeach;?>
						<figcaption>
							<span> Automóveis</span>
						</figcaption>
					</figure>
					<div class="anuncio-conteudo-descricao">
					<?php foreach($Anuncios as $Anuncio):?>
					<?php if(($Anuncio['Anuncio']['categoria'] == "automoveis") && ($Anuncio['Anuncio']['destaquecategoria'] == "1")) { ?>
						<h4><?php echo $Anuncio['Anuncio']['titulo'];?></h4>
						<p class="data-anuncio"><?php echo $Anuncio['Anuncio']['created'];?> </p>
						<p><?php echo showReadMore($Anuncio['Anuncio']['descricao']);?></p>
					<?php } ?>
					<?php endforeach;?>
					</div>
				</div>


				<?php foreach($Anuncios as $Anuncio):?>
				<?php if(($Anuncio['Anuncio']['categoria'] != "automoveis") && ($Anuncio['Anuncio']['destaquegaleria'] == "1")) { ?>
				<div class="anuncio-conteudo-secundario col-md-6 col-xs-12">
					<div class="secundario-imagem col-md-5 col-xs-12">
						<?php if ($Anuncio['Anuncio']['imagem'] != "") {?>
						<a href="http://www.classificadosprime.com.br/var/www/html/classificadosprime.com.br/web/site/galeria/view/<?php echo $Anuncio['Anuncio']['id']?>"><img class="imagem-secundario" src="<?php echo $this->request->base ?>/upload/anuncio/<?php echo $Anuncio['Anuncio']['id'] ?>/200x200-<?php echo $Anuncio['Anuncio']['imagem'] ?>"></a>
						<?php } else { ?>
						<a href="http://www.classificadosprime.com.br/var/www/html/classificadosprime.com.br/web/site/galeria/view/<?php echo $Anuncio['Anuncio']['id']?>"><img class="imagem-secundario" src="<?php echo $this->request->webroot;?>/img/logo-anuncio-200.png"></a>
						<?php } ?>
					</div>
					<div class="secundario-descricao col-md-7 col-xs-12">
						<h4><?php echo $Anuncio['Anuncio']['titulo'];?></h4>
						<p class="p-categoria"><?php echo $Anuncio['Anuncio']['categoria'];?></p>
						<p><?php echo showReadMore($Anuncio['Anuncio']['descricao']);?></p>

					</div>
				</div>
				<?php } ?>
				<?php endforeach;?>
					
			
			</div>

			<div class="galeria-anuncios ofertas col-md-12 col-xs-12">
	<div class="nome-sessao">
		<span>Celulares</span>
		</div>
	</div>
			<?php foreach($Anuncios as $Anuncio):?>
				<?php if(($Anuncio['Anuncio']['categoria'] == "celulares") && ($Anuncio['Anuncio']['destaquecategoria'] == "1")) { ?>
	<div class="anuncio-conteudo-secundario col-md-12 col-xs-12">
		<div class="secundario-imagem col-md-5 col-xs-12">
		<?php if ($Anuncio['Anuncio']['imagem'] != "") {?>
			<a href="<http://www.classificadosprime.com.br/var/www/html/classificadosprime.com.br/web/site/galeria/view/<?php echo $Anuncio['Anuncio']['id']?>"><img class="imagem-secundario" src="<?php echo $this->request->base ?>/upload/anuncio/<?php echo $Anuncio['Anuncio']['id'] ?>/316x186-<?php echo $Anuncio['Anuncio']['imagem'] ?>"></a>
		<?php } else { ?>
						<a href="http://www.classificadosprime.com.br/var/www/html/classificadosprime.com.br/web/site/galeria/view/<?php echo $Anuncio['Anuncio']['id']?>"><img class="imagem-secundario" src="<?php echo $this->request->webroot;?>/img/logo-anuncio-316.png"></a>
						<?php } ?>
		</div>
		<div class="secundario-descricao col-md-7 col-xs-12">
			<h4><?php echo $Anuncio['Anuncio']['titulo'];?></h4>
			<p><?php echo $Anuncio['Anuncio']['created'];?></p>
			<h3><?php echo showReadMore($Anuncio['Anuncio']['descricao']);?></h3>
		</div>
	</div>
	<?php } ?>
	<?php endforeach;?>
				
		</div>
		<div class="logo-anuncio col-md-4 col-xs-12">
			<img src="<?php echo $this->request->webroot;?>img/logo-anuncio.png"/>
			<div class="anuncio-lateral col-md-12">
			<?php foreach($Publicidades as $Publicidade):?>
						<?php if($Publicidade['Publicidade']['local'] == "homelateral") { ?>
				<div class="imagem-anuncio-lateral col-md-12">
					<a href="<?php echo $Publicidade['Publicidade']['link'] ?>" target="_blank"><img class="img-responsive" title="<?php echo $Publicidade['Publicidade']['nome'] ?>" alt="<?php echo $Publicidade['Publicidade']['nome'] ?>" src="<?php echo $this->request->base ?>/upload/publicidade/<?php echo $Publicidade['Publicidade']['id'] ?>/350x250-<?php echo $Publicidade['Publicidade']['imagem'] ?>"></a>
				</div>
			<?php } ?>
					<?php endforeach;?>
			</div>

			<div class="galeria-anuncios anuncios-virtuais">
			<div class="nome-sessao">
			<span>Diversos</span>
			</div>
			<div class="anuncios-virtuais">
			<?php foreach($Anuncios as $Anuncio):?>
				<?php if(($Anuncio['Anuncio']['categoria'] == "diversos") && ($Anuncio['Anuncio']['destaquecategoria'] == "1")) { ?>
				<div class="anuncio-conteudo-secundario col-md-12 col-xs-12">
					<div class="secundario-imagem col-md-5 col-xs-12">
					<?php if ($Anuncio['Anuncio']['imagem'] != "") {?>
						<a href="http://www.classificadosprime.com.br/var/www/html/classificadosprime.com.br/web/site/galeria/view/<?php echo $Anuncio['Anuncio']['id']?>"><img class="imagem-secundario" src="<?php echo $this->request->base ?>/upload/anuncio/<?php echo $Anuncio['Anuncio']['id'] ?>/200x200-<?php echo $Anuncio['Anuncio']['imagem'] ?>"></a>
					<?php } else { ?>
						<a href="http://www.classificadosprime.com.br/var/www/html/classificadosprime.com.br/web/site/galeria/view/<?php echo $Anuncio['Anuncio']['id']?>"><img class="imagem-secundario" src="<?php echo $this->request->webroot;?>/img/logo-anuncio-200.png"></a>
						<?php } ?>
					</div>
					<div class="secundario-descricao col-md-7 col-xs-12">
						<h4><?php echo $Anuncio['Anuncio']['titulo'];?></h4>
						<p><?php echo showReadMore($Anuncio['Anuncio']['descricao']);?></p>
					</div>
				</div>
			<?php } ?>
				<?php endforeach;?>
				
				
			</div>
		</div>

		</div>


		
	</div>
</div>
<div class="container">
	
</div>
<div class="banner-anuncios col-md-12 col-xs-12">
	<div class="col-md-6 col-xs-12 anuncio-centro">
	<?php foreach($Publicidades as $Publicidade):?>
						<?php if($Publicidade['Publicidade']['local'] == "homecentro1") { ?>
		<div class="fundo-anuncio-centro">
			<a href="<?php echo $Publicidade['Publicidade']['link'] ?>" target="_blank"><img class="img-responsive" title="<?php echo $Publicidade['Publicidade']['nome'] ?>" alt="<?php echo $Publicidade['Publicidade']['nome'] ?>" src="<?php echo $this->request->base ?>/upload/publicidade/<?php echo $Publicidade['Publicidade']['id'] ?>/660x100-<?php echo $Publicidade['Publicidade']['imagem'] ?>"></a>
		</div>
	<?php } ?>
				<?php endforeach;?>
	</div>
	<div class="col-md-6 col-xs-12 anuncio-centro1">
	<?php foreach($Publicidades as $Publicidade):?>
						<?php if($Publicidade['Publicidade']['local'] == "homecentro2") { ?>
		<div class="fundo-anuncio-centro">
			<a href="<?php echo $Publicidade['Publicidade']['link'] ?>" target="_blank"><img class="img-responsive" title="<?php echo $Publicidade['Publicidade']['nome'] ?>" alt="<?php echo $Publicidade['Publicidade']['nome'] ?>" src="<?php echo $this->request->base ?>/upload/publicidade/<?php echo $Publicidade['Publicidade']['id'] ?>/660x100-<?php echo $Publicidade['Publicidade']['imagem'] ?>"></a>
		</div>
	<?php } ?>
				<?php endforeach;?>
	</div>
</div>

<div class="container">
	<div class="outros-anuncios col-md-12 col-xs-12">
		<div class="outros-anuncios-1 col-md-8 col-xs-12">
			<div class="galeria-anuncios titulo-outros">
			<div class="nome-sessao">
				<span>Imóveis</span>
			</div>
			</div>

			<div class="col-md-6 alinha-coluna">
				<div class="anuncio-conteudo-principal">
					<figure>
					<?php foreach($Anuncios as $Anuncio):?>
						<?php if(($Anuncio['Anuncio']['categoria'] == "imoveisalugar") && ($Anuncio['Anuncio']['destaquecategoria'] == "1")) { ?>
						<?php if ($Anuncio['Anuncio']['imagem'] != "") {?>
						<a href="http://www.classificadosprime.com.br/var/www/html/classificadosprime.com.br/web/site/galeria/view/<?php echo $Anuncio['Anuncio']['id']?>"><img src="<?php echo $this->request->base ?>/upload/anuncio/<?php echo $Anuncio['Anuncio']['id'] ?>/352x284-<?php echo $Anuncio['Anuncio']['imagem'] ?>"></a>
						<?php } else { ?>
						<a href="http://www.classificadosprime.com.br/var/www/html/classificadosprime.com.br/web/site/galeria/view/<?php echo $Anuncio['Anuncio']['id']?>"><img class="imagem-secundario" src="<?php echo $this->request->webroot;?>/img/logo-anuncio-352.png"></a>
						<?php } ?>
						  <?php } ?>

					<?php endforeach;?>
						<figcaption>
							<span> Imóveis Aluguel</span>
						</figcaption>
					</figure>
					<div class="anuncio-conteudo-descricao">
					<?php foreach($Anuncios as $Anuncio):?>
					<?php if(($Anuncio['Anuncio']['categoria'] == "imoveisalugar") && ($Anuncio['Anuncio']['destaquecategoria'] == "1")) { ?>
						<h4><?php echo $Anuncio['Anuncio']['titulo'];?></h4>
						<p class="data-anuncio"><?php echo $Anuncio['Anuncio']['created'];?></p>
						<p><?php echo showReadMore($Anuncio['Anuncio']['descricao']);?></p>
						<?php } ?>

					<?php endforeach;?>
					</div>
				</div>
				<?php foreach($Anuncios as $Anuncio):?>
					<?php if(($Anuncio['Anuncio']['categoria'] == "imoveisalugar") && ($Anuncio['Anuncio']['destaquecategoria'] == "0") && ($Anuncio['Anuncio']['subdestaque'] == "1")) { ?>
				<div class="anuncio-conteudo-secundario col-md-12">
					<div class="secundario-imagem col-md-5 col-xs-12">
					<?php if ($Anuncio['Anuncio']['imagem'] != "") {?>
						<a href="http://www.classificadosprime.com.br/var/www/html/classificadosprime.com.br/web/site/galeria/view/<?php echo $Anuncio['Anuncio']['id']?>"><img class="imagem-secundario" src="<?php echo $this->request->base ?>/upload/anuncio/<?php echo $Anuncio['Anuncio']['id'] ?>/131x131-<?php echo $Anuncio['Anuncio']['imagem'] ?>"></a>
					<?php } else { ?>
						<a href="http://www.classificadosprime.com.br/var/www/html/classificadosprime.com.br/web/site/galeria/view/<?php echo $Anuncio['Anuncio']['id']?>"><img class="imagem-secundario imagem-imoveis-secundario" src="<?php echo $this->request->webroot;?>/img/logo-anuncio-131.png"></a>
						<?php } ?>
						  
					</div>
					<div class="secundario-descricao col-md-7 col-xs-12">
						<h4><?php echo $Anuncio['Anuncio']['titulo'];?></h4>
						<p><?php echo showReadMore($Anuncio['Anuncio']['descricao']);?></p>
					</div>
				</div>
				<?php } ?>
				<?php endforeach;?>
				<!--<div class="anuncio-conteudo-secundario col-md-12">
					<div class="secundario-imagem col-md-5 col-xs-12">
						<img class="imagem-secundario" src="http://placehold.it/200x130">
					</div>
					<div class="secundario-descricao col-md-7 col-xs-12">
						<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
						<p>Lorem lorem lorem lorem lorem lorem</p>
						
					</div>
				</div>
				<div class="anuncio-conteudo-secundario col-md-12 col-xs-12">
					<div class="secundario-imagem col-md-5 col-xs-12">
						<img class="imagem-secundario" src="http://placehold.it/200x130">
					</div>
					<div class="secundario-descricao col-md-7 col-xs-12">
						<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
						<p>Lorem lorem lorem lorem lorem lorem</p>	
					</div>
				</div>-->
				
			</div>
			<div class="col-md-6 col-xs-12 alinha-coluna1">
				<div class="anuncio-conteudo-principal">
					<figure>
					<?php foreach($Anuncios as $Anuncio):?>
						<?php if(($Anuncio['Anuncio']['categoria'] == "imoveisvenda") && ($Anuncio['Anuncio']['destaquecategoria'] == "1")) { ?>
						<?php if ($Anuncio['Anuncio']['imagem'] != "") {?>
						<a href="http://www.classificadosprime.com.br/var/www/html/classificadosprime.com.br/web/site/galeria/view/<?php echo $Anuncio['Anuncio']['id']?>"><img src="<?php echo $this->request->base ?>/upload/anuncio/<?php echo $Anuncio['Anuncio']['id'] ?>/352x284-<?php echo $Anuncio['Anuncio']['imagem'] ?>"></a>
						<?php } else { ?>
						<a href="http://www.classificadosprime.com.br/var/www/html/classificadosprime.com.br/web/site/galeria/view/<?php echo $Anuncio['Anuncio']['id']?>"><img class="imagem-secundario" src="<?php echo $this->request->webroot;?>/img/logo-anuncio-352.png"></a>
						<?php } ?>
						  <?php } ?>

					<?php endforeach;?>
						<figcaption>
							<span> Imóveis Vender/Comprar</span>
						</figcaption>
					</figure>
					<div class="anuncio-conteudo-descricao">
					<?php foreach($Anuncios as $Anuncio):?>
					<?php if(($Anuncio['Anuncio']['categoria'] == "imoveisvenda") && ($Anuncio['Anuncio']['destaquecategoria'] == "1")) { ?>
						<h4><?php echo $Anuncio['Anuncio']['titulo'];?></h4>
						<p class="data-anuncio"><?php echo $Anuncio['Anuncio']['created'];?></p>
						<p><?php echo showReadMore($Anuncio['Anuncio']['descricao']);?></p>
						<?php } ?>

					<?php endforeach;?>
					</div>
				</div>

				<?php foreach($Anuncios as $Anuncio):?>
					<?php if(($Anuncio['Anuncio']['categoria'] == "imoveisvenda") && ($Anuncio['Anuncio']['destaquecategoria'] == "0") && ($Anuncio['Anuncio']['subdestaque'] == "1")) { ?>
				<div class="anuncio-conteudo-secundario col-md-12">
					<div class="secundario-imagem col-md-5 col-xs-12">
					<?php if ($Anuncio['Anuncio']['imagem'] != "") {?>
						<a href="http://www.classificadosprime.com.br/var/www/html/classificadosprime.com.br/web/site/galeria/view/<?php echo $Anuncio['Anuncio']['id']?>"><img class="imagem-secundario" src="<?php echo $this->request->base ?>/upload/anuncio/<?php echo $Anuncio['Anuncio']['id'] ?>/131x131-<?php echo $Anuncio['Anuncio']['imagem'] ?>"></a>
					<?php } else { ?>
						<a href="http://www.classificadosprime.com.br/var/www/html/classificadosprime.com.br/web/site/galeria/view/<?php echo $Anuncio['Anuncio']['id']?>"><img class="imagem-secundario imagem-imoveis-secundario" src="<?php echo $this->request->webroot;?>/img/logo-anuncio-131.png"></a>
						<?php } ?>
						  
					</div>
					<div class="secundario-descricao col-md-7 col-xs-12">
						<h4><?php echo $Anuncio['Anuncio']['titulo'];?></h4>
						<p><?php echo showReadMore($Anuncio['Anuncio']['descricao']);?></p>
					</div>
				</div>
				<?php } ?>
				<?php endforeach;?>
				
			</div>
		</div>
		<div class="outros-anuncios-2 col-md-4 col-xs-12">
			<div class="galeria-anuncios titulo-outros">
			<div class="nome-sessao">
				<span>Motos</span>
			</div>
			</div>

				<?php foreach($Anuncios as $Anuncio):?>
					<?php if(($Anuncio['Anuncio']['categoria'] == "motos") && ($Anuncio['Anuncio']['destaquecategoria'] == "1")) { ?>
				<div class="anuncio-conteudo-secundario col-md-12">
					<div class="secundario-imagem col-md-5 col-xs-12">
					<?php if ($Anuncio['Anuncio']['imagem'] != "") {?>
						<a href="http://www.classificadosprime.com.br/var/www/html/classificadosprime.com.br/web/site/galeria/view/<?php echo $Anuncio['Anuncio']['id']?>"><img class="imagem-secundario" src="<?php echo $this->request->base ?>/upload/anuncio/<?php echo $Anuncio['Anuncio']['id'] ?>/131x131-<?php echo $Anuncio['Anuncio']['imagem'] ?>"></a>
					<?php } else { ?>
						<a href="http://www.classificadosprime.com.br/var/www/html/classificadosprime.com.br/web/site/galeria/view/<?php echo $Anuncio['Anuncio']['id']?>"><img class="imagem-secundario" src="<?php echo $this->request->webroot;?>/img/logo-anuncio-131.png"></a>
						<?php } ?>
					</div>
					<div class="secundario-descricao col-md-7 col-xs-12">
						<h4><?php echo $Anuncio['Anuncio']['titulo'];?></h4>
						<p><?php echo showReadMore($Anuncio['Anuncio']['descricao']);?></p>
						
					</div>
				</div>
				<?php } ?>
				<?php endforeach;?>
				<!--<div class="anuncio-conteudo-secundario col-md-12">
					<div class="secundario-imagem col-md-5 col-xs-12">
						<img class="imagem-secundario" src="http://placehold.it/200x130">
					</div>
					<div class="secundario-descricao col-md-7 col-xs-12">
						<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
						
					</div>
				</div>
				<div class="anuncio-conteudo-secundario col-md-12">
					<div class="secundario-imagem col-md-5 col-xs-12">
						<img class="imagem-secundario" src="http://placehold.it/200x130">
					</div>
					<div class="secundario-descricao col-md-7 col-xs-12">
						<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
						
					</div>
				</div>-->
				<div class="outros-redesocial col-md-12">
					<div class="fb-page" data-href="https://www.facebook.com/primeinforpatos" data-tabs="timeline" data-width="345" data-height="468" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/primeinforpatos" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/primeinforpatos">Prime Informática</a></blockquote></div>
				</div>
		</div>
	</div>
</div>
<!--<div class="banner-chat col-md-12">
	<div class="fundo-banner-chat">
		<span class="ajuda">Precisa de ajuda?
		<p>Converse com nossos consultores!</p></span>
		<a class="banner-chat-botao"> Chat Online</a>
	</div>
</div>-->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>