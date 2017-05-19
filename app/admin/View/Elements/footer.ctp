<div class="fundo-footer col-md-12">
	<div class="container">
		<div class="col-md-12 col-xs-12 footer-redessociais">
			<div class="col-md-3 col-xs-3 footer-facebook">
				<a href="https://www.facebook.com/primeinforpatos" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i>
				<span class="footer-redesocial-nome"> Facebook</span></a>
			</div>
			<div class="col-md-3 col-xs-3 footer-instagram">
				<a href="https://www.instagram.com/primeinforpatos/" target="_blank" id="instagram"><i class="fa fa-instagram" aria-hidden="true"></i>
				<span class="footer-redesocial-nome"> Instagram</span></a>
			</div>
			<div class="col-md-3 col-xs-3 footer-snapchat">
				<a id="snap" data-toggle="tooltip" data-placement="bottom" title="primeinforpatos"><i class="fa fa-snapchat-ghost" aria-hidden="true"></i>
				<span class="footer-redesocial-nome"> SnapChat</span></a>
			</div>
			<div class="col-md-3 col-xs-3 footer-whatsapp">
				<a id="whats" data-toggle="tooltip" data-placement="bottom" title="(34) 9 8443-4343"><i class="fa fa-whatsapp" aria-hidden="true"></i>
				<span class="footer-redesocial-nome"> WhatsApp</span></a>
			</div>
		</div>
		<div class="footer-institucional col-md-4 col-xs-12">
			<div class="footer-logo col-md-12">
				<img src="<?php echo $this->request->webroot;?>img/logoprime3.png">
			</div>
			<div class="footer-sobre col-md-12">
				<br/><br/>Fundada em 2016, a Prime Informática especializada em soluções de informática incluso também vendas de hardwares e periféricos de alta qualidade e garantia de todos os produtos e serviços.
			</div>
			<!--<div class="footer-email col-md-12">
				Inscreva-se no nosso site:<br/><br/>
				<p><input type="text" placeholder="Digite seu e-mail"><i class="fa fa-envelope-open-o" aria-hidden="true"></i></input></p>
			</div>-->
		</div>
		<div class="footer-paginas col-md-2 col-xs-6">
			<span>Páginas</span>
			<ul>
				<li><a href="http://www.classificadosprime.com.br/site">Home</a></li>
				<li><a href="http://www.classificadosprime.com.br/admin/users/cadastrar">Cadastrar</a></li>
				<li><a href="http://www.classificadosprime.com.br/site">Chat (em breve)</a></li>
				<li><a href="http://www.classificadosprime.com.br/site/galeria">Galeria</a></li>
				<li><a href="http://www.classificadosprime.com.br/site/contato">Contato</a></li>
			</ul>
		</div>
		<div class="footer-categoria col-md-2 col-xs-6">
			<span>Categorias</span>
			<ul>
				<li><a href="http://www.classificadosprime.com.br/site/galeria/automoveis">Automóveis</a></li>
				<li><a href="http://www.classificadosprime.com.br/site/galeria/celulares">Celulares</a></li>
				<li><a href="http://www.classificadosprime.com.br/site/galeria/computadores">Computadores</a></li>
				<li><a href="http://www.classificadosprime.com.br/site/galeria/diversos">Diversos</a></li>
				<li><a href="http://www.classificadosprime.com.br/site/galeria/servicos">Serviços</a></li>
			</ul>
		</div>
		<div class="footer-parceiro col-md-4 col-xs-12">
			<span>Parceiros</span>
			<div class="footer-parceiros col-md-12">
			<?php foreach($Publicidades as $Publicidade):?>
						<?php if($Publicidade['Publicidade']['local'] == "parceiros") { ?>
				<div class="col-md-4 col-xs-4 logo-parceiro">
					<a href="<?php echo $Publicidade['Publicidade']['link'] ?>" target="_blank"><img title="<?php echo $Publicidade['Publicidade']['nome'] ?>" alt="<?php echo $Publicidade['Publicidade']['nome'] ?>"  src="<?php echo $this->request->base ?>/upload/publicidade/<?php echo $Publicidade['Publicidade']['id'] ?>/200x200-<?php echo $Publicidade['Publicidade']['imagem'] ?>"></a>
				</div>
			<?php } ?>
					<?php endforeach;?>
				<!--<div class="col-md-4 col-xs-4 logo-parceiro">
					<img src="http://placehold.it/200x200">
				</div>
				<div class="col-md-4 col-xs-4 logo-parceiro">
					<img src="http://placehold.it/200x200">
				</div>
				<div class="col-md-4 col-xs-4 logo-parceiro">
					<img src="http://placehold.it/200x200">
				</div>
				<div class="col-md-4 col-xs-4 logo-parceiro">
					<img src="http://placehold.it/200x200">
				</div>
				<div class="col-md-4 col-xs-4 logo-parceiro">
					<img src="http://placehold.it/200x200">
				</div>-->
			</div>
		</div>
	</div>
</div>
<div class="footer-copyright col-md-12">
	<div class="container">
		<div class="copyright">
		 &copy; 2017 - Todos os direitos reservados
		</div>
		<div class="dev-nuvem">
			<img src="<?php echo $this->request->webroot;?>img/nuvempng.png">
		</div>
	</div>
</div>