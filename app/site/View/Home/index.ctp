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
		<?php foreach($Anunciosultimos as $Anuncio):?>
			<figure class="col-md-3 col-xs-12 anuncio-principal">
				<img class="img-responsive" src="<?php echo $this->request->base ?>/upload/anuncio/<?php echo $Anuncio['Anuncio']['id'] ?>/263x350-<?php echo $Anuncio['Anuncio']['imagem'] ?>"/>
				<figcaption>
					<h4><span><?php echo $Anuncio['Anuncio']['titulo'];?></span></h4><br/>
					<p><?php echo $Anuncio['Anuncio']['descricao'];?></p>
				</figcaption>
			</figure>
		<?php endforeach;?>

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
			<a href="http://localhost/prime2/Desenvolvimento/site/galeria">Ver todos</a>
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
				
						<img src="http://placehold.it/335x270">

						<figcaption>
							<span> Veículos</span>
						</figcaption>
					</figure>
					<div class="anuncio-conteudo-descricao">
						<h4>Lorem ipsum lorem ipsum lorem ipsum lorem ipsum</h4>
						<p class="data-anuncio">balbalbalbal </p>
						<p>orem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.</p>
					</div>
				</div>
				<div class="anuncio-conteudo-secundario col-md-6 col-xs-12">
					<div class="secundario-imagem col-md-5 col-xs-12">
						<img class="imagem-secundario" src="http://placehold.it/200x130">
					</div>
					<div class="secundario-descricao col-md-7 col-xs-12">
						<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
						<p>Lorem ipsum lorem ipsum</p>
					</div>
				</div>
				<div class="anuncio-conteudo-secundario col-md-6 col-xs-12">
					<div class="secundario-imagem col-md-5 col-xs-12">
						<img class="imagem-secundario" src="http://placehold.it/200x130">
					</div>
					<div class="secundario-descricao col-md-7 col-xs-12">
						<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
						<p>Lorem ipsum lorem ipsum</p>
					</div>
				</div>
				<div class="anuncio-conteudo-secundario col-md-6 col-xs-12">
					<div class="secundario-imagem col-md-5 col-xs-12">
						<img class="imagem-secundario" src="http://placehold.it/200x130">
					</div>
					<div class="secundario-descricao col-md-7 col-xs-12">
						<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
						<p>Lorem ipsum lorem ipsum</p>
					</div>
				</div>
				<div class="anuncio-conteudo-secundario col-md-6 col-xs-12">
					<div class="secundario-imagem col-md-5 col-xs-12">
						<img class="imagem-secundario" src="http://placehold.it/200x130">
					</div>
					<div class="secundario-descricao col-md-7 col-xs-12">
						<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
						<p>Lorem ipsum lorem ipsum</p>
					</div>
				</div>
				<div class="anuncio-conteudo-secundario col-md-6 col-xs-12">
					<div class="secundario-imagem col-md-5 col-xs-12">
						<img class="imagem-secundario" src="http://placehold.it/200x130">
					</div>
					<div class="secundario-descricao col-md-7 col-xs-12">
						<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
						<p>Lorem ipsum lorem ipsum</p>
					</div>
				</div>
			</div>

			<div class="galeria-anuncios ofertas col-md-12 col-xs-12">
	<div class="nome-sessao">
		<span>Ofertas</span>
		</div>
	</div>
	<div class="anuncio-conteudo-secundario col-md-12 col-xs-12">
		<div class="secundario-imagem col-md-5 col-xs-12">
			<img class="imagem-secundario" src="http://placehold.it/316x186">
		</div>
		<div class="secundario-descricao col-md-7 col-xs-12">
			<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
			<p>Lorem ipsum lorem ipsum</p>
			<h3>Lorem lorem lorem lorem lorem lorem lorem</h3>
		</div>
	</div>
	<div class="anuncio-conteudo-secundario col-md-12 col-xs-12">
		<div class="secundario-imagem col-md-5 col-xs-12">
			<img class="imagem-secundario" src="http://placehold.it/316x186">
		</div>
		<div class="secundario-descricao col-md-7 col-xs-12">
			<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
			<p>Lorem ipsum lorem ipsum</p>
			<h3>Lorem lorem lorem lorem lorem lorem lorem</h3>
		</div>
	</div>
	<div class="anuncio-conteudo-secundario col-md-12 col-xs-12">
		<div class="secundario-imagem col-md-5 col-xs-12">
			<img class="imagem-secundario" src="http://placehold.it/316x186">
		</div>
		<div class="secundario-descricao col-md-7 col-xs-12">
			<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
			<p>Lorem ipsum lorem ipsum</p>
			<h3>Lorem lorem lorem lorem lorem lorem lorem</h3>
		</div>
	</div>
		</div>
		<div class="logo-anuncio col-md-4 col-xs-12">
			<img src="<?php echo $this->request->webroot;?>img/logo-anuncio.png"/>
			<div class="anuncio-lateral">
				<div class="imagem-anuncio-lateral col-md-12">
					<p>Anúncio<br/> Lateral</p><br/>
					<a href="#">Anunciar</a>
				</div>
			</div>

			<div class="galeria-anuncios anuncios-virtuais">
			<div class="nome-sessao">
			<span>Anuncios Virtuais</span>
			</div>
			<div class="anuncios-virtuais">
				<div class="anuncio-conteudo-secundario col-md-12 col-xs-12">
					<div class="secundario-imagem col-md-5 col-xs-12">
						<img class="imagem-secundario" src="http://placehold.it/200x130">
					</div>
					<div class="secundario-descricao col-md-7 col-xs-12">
						<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
						<p>Lorem ipsum lorem ipsum</p>
					</div>
				</div>
				<div class="anuncio-conteudo-secundario col-md-12 col-xs-12">
					<div class="secundario-imagem col-md-5 col-xs-12">
						<img class="imagem-secundario" src="http://placehold.it/200x130">
					</div>
					<div class="secundario-descricao col-md-7 col-xs-12">
						<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
						<p>Lorem ipsum lorem ipsum</p>
					</div>
				</div>
				<div class="anuncio-conteudo-secundario col-md-12">
					<div class="secundario-imagem col-md-5 col-xs-12">
						<img class="imagem-secundario" src="http://placehold.it/200x130">
					</div>
					<div class="secundario-descricao col-md-7 col-xs-12">
						<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
						<p>Lorem ipsum lorem ipsum</p>
					</div>
				</div>
				<div class="anuncio-conteudo-secundario col-md-12 col-xs-12">
					<div class="secundario-imagem col-md-5 col-xs-12">
						<img class="imagem-secundario" src="http://placehold.it/200x130">
					</div>
					<div class="secundario-descricao col-md-7 col-xs-12">
						<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
						<p>Lorem ipsum lorem ipsum</p>
					</div>
				</div>
				<div class="anuncio-conteudo-secundario col-md-12 col-xs-12">
					<div class="secundario-imagem col-md-5 col-xs-12">
						<img class="imagem-secundario" src="http://placehold.it/200x130">
					</div>
					<div class="secundario-descricao col-md-7 col-xs-12">
						<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
						<p>Lorem ipsum lorem ipsum</p>
					</div>
				</div>
				<div class="anuncio-conteudo-secundario col-md-12 col-xs-12">
					<div class="secundario-imagem col-md-5 col-xs-12">
						<img class="imagem-secundario" src="http://placehold.it/200x130">
					</div>
					<div class="secundario-descricao col-md-7 col-xs-12">
						<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
						<p>Lorem ipsum lorem ipsum</p>
					</div>
				</div>
				
			</div>
		</div>

		</div>


		
	</div>
</div>
<div class="container">
	
</div>
<div class="banner-anuncios col-md-12 col-xs-12">
	<div class="col-md-6 col-xs-12 anuncio-centro">
		<div class="fundo-anuncio-centro">
			<span>anuncio</span>
		</div>
	</div>
	<div class="col-md-6 col-xs-12 anuncio-centro1">
		<div class="fundo-anuncio-centro">
			<span>anuncio</span>
		</div>
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
						<img src="http://placehold.it/352x284">
						<figcaption>
							<span> Veículos</span>
						</figcaption>
					</figure>
					<div class="anuncio-conteudo-descricao">
						<h4>Lorem ipsum lorem ipsum lorem ipsum lorem ipsum</h4>
						<p class="data-anuncio">balbalbalbal </p>
						<p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.</p>
					</div>
				</div>
				<div class="anuncio-conteudo-secundario col-md-12">
					<div class="secundario-imagem col-md-5 col-xs-12">
						<img class="imagem-secundario" src="http://placehold.it/200x130">
					</div>
					<div class="secundario-descricao col-md-7 col-xs-12">
						<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
						<p>Lorem lorem lorem lorem lorem lorem</p>
					</div>
				</div>
				<div class="anuncio-conteudo-secundario col-md-12">
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
				</div>
				
			</div>
			<div class="col-md-6 col-xs-12 alinha-coluna1">
				<div class="anuncio-conteudo-principal">
					<figure>
						<img src="http://placehold.it/352x284">
						<figcaption>
							<span> Veículos</span>
						</figcaption>
					</figure>
					<div class="anuncio-conteudo-descricao">
						<h4>Lorem ipsum lorem ipsum lorem ipsum lorem ipsum</h4>
						<p class="data-anuncio">balbalbalbal </p>
						<p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.</p>
					</div>
				</div>

				<div class="anuncio-conteudo-secundario col-md-12">
					<div class="secundario-imagem col-md-5 col-xs-12">
						<img class="imagem-secundario" src="http://placehold.it/200x130">
					</div>
					<div class="secundario-descricao col-md-7 col-xs-12">
						<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
						<p>Lorem lorem lorem lorem lorem lorem</p>
					</div>
				</div>
				<div class="anuncio-conteudo-secundario col-md-12">
					<div class="secundario-imagem col-md-5 col-xs-12">
						<img class="imagem-secundario" src="http://placehold.it/200x130">
					</div>
					<div class="secundario-descricao col-md-7 col-xs-12">
						<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
						<p>Lorem lorem lorem lorem lorem lorem</p>
						
					</div>
				</div>
				<div class="anuncio-conteudo-secundario col-md-12">
					<div class="secundario-imagem col-md-5 col-xs-12">
						<img class="imagem-secundario" src="http://placehold.it/200x130">
					</div>
					<div class="secundario-descricao col-md-7 col-xs-12">
						<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
						<p>Lorem lorem lorem lorem lorem lorem</p>	
					</div>
				</div>
			</div>
		</div>
		<div class="outros-anuncios-2 col-md-4 col-xs-12">
			<div class="galeria-anuncios titulo-outros">
			<div class="nome-sessao">
				<span>Serviços domésticos</span>
			</div>
			</div>

				<div class="anuncio-conteudo-secundario col-md-12">
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
				</div>
				<div class="anuncio-conteudo-secundario col-md-12">
					<div class="secundario-imagem col-md-5 col-xs-12">
						<img class="imagem-secundario" src="http://placehold.it/200x130">
					</div>
					<div class="secundario-descricao col-md-7 col-xs-12">
						<h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
						
					</div>
				</div>
				<div class="outros-redesocial col-md-12">
					<img src="<?php echo $this->request->webroot;?>img/instagram.jpg">
				</div>
		</div>
	</div>
</div>
<div class="banner-chat col-md-12">
	<div class="fundo-banner-chat">
		<span class="ajuda">Precisa de ajuda?
		<p>Converse com nossos consultores!</p></span>
		<a class="banner-chat-botao"> Chat Online</a>
	</div>
</div>