<div class="header-content">
	<div class="container">
		<div class="row">
			<form name="form_relogio" class="form_relogio col-md-3"> 
				<input class="input-data" type="text" disabled name="relogio" size="10"> 
					<?php setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese'); ?>
					<?php date_default_timezone_set('America/Sao_Paulo'); ?> 
					<?php echo utf8_encode(strftime("- %d %B, %Y" ))  ; ?>
			</form>

			<div class="login col-md-5">
				<a href="http://localhost/prime2/Desenvolvimento/admin/users">Entrar </a> | <a href="http://localhost/prime2/Desenvolvimento/site/cadastro"> Cadastrar</a>	

				<!--<form class="form-inline" method="POST" action="login.php">
  					<div class="form-group">
   						<input type="email" class="form-control" id="email" name="email" placeholder="Email">
  					</div>
  					<div class="form-group">
    					<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
  					</div>
  					<div class="checkbox">
    					<input type="checkbox"> Lembrar
    				</div>
  					<button type="submit" id="entrar" name="entrar" class="btn btn-default">Entrar</button>
  
				</form>		-->	
			</div>

			<div class="redes-sociais col-md-4">
				<!--<a class="btn cadastrar-btn" href="<?php echo $this->request->base; ?>/cadastro">Cadastrar</a>-->

				<ul class="lista-social">
					<li><a href="https://www.facebook.com/primeinforpatos" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a id="snap" data-toggle="tooltip" data-placement="bottom" title="primeinforpatos"><i class="fa fa-snapchat-ghost" aria-hidden="true"></i></a></li>
					<li><a id="whats" data-toggle="tooltip" data-placement="bottom" title="(34) 9 8443-4343"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
					<li><a href="https://www.instagram.com/primeinforpatos/" target="_blank" id="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="linha-header">
		</div>
	</div>
	<nav class="navbar navbar-default visible-xs">
		<div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
	            <span class="sr-only"></span> 
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span> 
	        </button>
	    </div>
		<div class="collapse navbar-collapse" id="navbar">
		<div class="container">
	        <ul class="nav navbar-nav itens-menu">
	            <li><a href="<?php echo $this->request->base; ?>/home">home</a></li>
				<li><a href="<?php echo $this->request->base; ?>/galeria">galeria de anúncios</a></li>
				<li><a href="<?php echo $this->request->base; ?>/faleconosco">fale conosco</a></li>

				<li class="botao-chat"><a class="active" href="">chat online</a></li>
	        </ul>
	        <div class="pesquisar-menu col-md-2 hidden-xs">
				<input type="text" placeholder="pesquisar"><i class="fa fa-search" aria-hidden="true"></i></input>
			</div>
	    </div>
	    </div>
	</nav>
	<div class="container">
		<div class="logo col-md-6 col-xs-12">
			<a href="<?php echo $this->request->base; ?>/home"><img class="col-md-3" src="<?php echo $this->request->webroot;?>img/logo2.png"></a>
			<a href="<?php echo $this->request->base; ?>/home"><div class="col-md-9 texto-logo-header">
			<span>Classificados Prime <p class="prime">Prime Informática </p> <p class="prime-tel"> (34) 3814-1165/98443-4343</p></span>
			</div></a>
		</div>
		<div class="anuncio-topo col-md-5 col-md-offset-1">
			<p>Anuncio Topo
			<a href="">Anunciar</a></p>
		</div>
	</div>

	

	<!--<div class="faixa-menu col-md-12">
		<div class="container">
			<div class="menu col-md-10">
				<ul class="itens-menu">
					<li><a href="<?php echo $this->request->base; ?>/home">home</a></li>
					<li><a href="<?php echo $this->request->base; ?>/galeria">galeria de anúncios</a></li>
					<li><a href="<?php echo $this->request->base; ?>/faleconosco">fale conosco</a></li>
					<li class="botao-chat"><a class="active" href="">chat online</a></li>
				</ul>
			</div>
			<div class="pesquisar-menu col-md-2">
				<input type="text" placeholder="pesquisar"><i class="fa fa-search" aria-hidden="true"></i></input>
			</div>
		</div>
	</div>-->
	
</div>

<nav class="navbar navbar-default hidden-xs">
	<div class="navbar-header">
	    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
	        <span class="sr-only"></span> 
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span> 
	    </button>
	</div>
	<div class="collapse navbar-collapse" id="navbar">
		<div class="container">
	        <ul class="nav navbar-nav itens-menu">
	            <li><a href="<?php echo $this->request->base; ?>/home">home</a></li>
				<li><a href="<?php echo $this->request->base; ?>/galeria">galeria de anúncios</a></li>
				<li><a href="<?php echo $this->request->base; ?>/faleconosco">fale conosco</a></li>
				
				<li class="botao-chat"><a class="active" href="">chat online</a></li>
	        </ul>
	        <div class="pesquisar-menu col-md-2 hidden-xs">
				<input type="text" placeholder="pesquisar"><i class="fa fa-search" aria-hidden="true"></i></input>
			</div>
	    </div>
	</div>
</nav>	
<div class="anuncio-topo2 col-md-5 col-md-offset-1 visible-xs">
	<p>Anuncio Topo
	<a href="">Anunciar</a></p>
</div>

<div class="modal fade" id="exemplomodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
    		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title" id="gridSystemModalLabel">CLASSIFICADOS PRIME</h4>
    		</div>
    		<div class="modal-body">
    			<img src="<?php echo $this->request->webroot;?>img/logo2.png">
    			
    		</div>
    		<div class="modal-footer">
    			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    		</div>
  		</div>
	</div>
</div>




