<div class="header-content">
	<div class="container">
		<div class="row">
			<form name="form_relogio" class="form_relogio col-md-3"> 
				<input class="input-data" type="text" disabled name="relogio" size="10"> 
					<?php setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese'); ?>
					<?php date_default_timezone_set('America/Sao_Paulo'); ?> 
					<?php echo utf8_encode(strftime("- %d %B, %Y" ))  ; ?>
			</form>
			<div class="login col-md-2">
				<a href="<?php echo $this->request->base; ?>/cadastro">Entrar / Cadastrar</a>
			</div>
			<div class="redes-sociais col-md-6">
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
	<div class="container">
		<div class="logo col-md-6">
			<img src="<?php echo $this->request->webroot;?>img/logo.png">
			<span>prime informática <p>(34) 3814-1165/98443-4343</p></span>
		</div>
		<div class="anuncio-topo col-md-5 col-md-offset-1">
			<p>Anuncio Topo
			<a href="">Anunciar</a></p>
		</div>
	</div>
	<div class="faixa-menu col-md-12">
		<div class="container">
			<div class="menu col-md-10">
				<ul class="itens-menu">
					<li><a class="active" href="">destaques</a></li>
					<li><a href="<?php echo $this->request->base; ?>/home">home</a></li>
					<li><a href="<?php echo $this->request->base; ?>/galeria">galeria de anúncios</a></li>
					<li><a href="">fale conosco</a></li>
					<li class="botao-chat"><a class="active" href="">chat online</a></li>
				</ul>
			</div>
			
			<div class="pesquisar-menu col-md-2">
				<input type="text" placeholder="pesquisar"><i class="fa fa-search" aria-hidden="true"></i></input>
			</div>
			
		</div>
	</div>
	
</div>



<script type="text/javascript">
    $('#whats').tooltip('toogle');
</script>

<script type="text/javascript">
    $('#snap').tooltip('toogle');
</script>

