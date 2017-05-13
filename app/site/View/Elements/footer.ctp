<div class="fundo-footer col-md-12">
	<div class="container">
		<div class="col-md-12 col-xs-12 footer-redessociais">
			<div class="col-md-3 col-xs-3 footer-facebook">
				<i class="fa fa-facebook" aria-hidden="true"></i>
				<span class="footer-redesocial-nome"> Facebook</span>
			</div>
			<div class="col-md-3 col-xs-3 footer-instagram">
				<i class="fa fa-instagram" aria-hidden="true"></i>
				<span class="footer-redesocial-nome"> Instagram</span>
			</div>
			<div class="col-md-3 col-xs-3 footer-snapchat">
				<i class="fa fa-snapchat-ghost" aria-hidden="true"></i>
				<span class="footer-redesocial-nome"> SnapChat</span>
			</div>
			<div class="col-md-3 col-xs-3 footer-whatsapp">
				<i class="fa fa-whatsapp" aria-hidden="true"></i>
				<span class="footer-redesocial-nome"> WhatsApp</span>
			</div>
		</div>
		<div class="footer-institucional col-md-4 col-xs-12">
			<div class="footer-logo col-md-12">
				<img src="<?php echo $this->request->webroot;?>img/logo.png">
			</div>
			<div class="footer-sobre col-md-12">
				Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
				Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum 
			</div>
			<div class="footer-email col-md-12">
				Inscreva-se no nosso site:<br/><br/>
				<p><input type="text" placeholder="Digite seu e-mail"><i class="fa fa-envelope-open-o" aria-hidden="true"></i></input></p>
			</div>
		</div>
		<div class="footer-paginas col-md-2 col-xs-6">
			<span>Páginas</span>
			<ul>
				<li><a href="<?php echo $this->request->base; ?>/home">Home</a></li>
				<li><a href="<?php echo $this->request->base; ?>/cadastro">Cadastrar</a></li>
				<li><a href="<?php echo $this->request->base; ?>/home">Chat</a></li>
				<li><a href="<?php echo $this->request->base; ?>/galeria">Galeria</a></li>
				<li><a href="<?php echo $this->request->base; ?>/faleconosco">Contato</a></li>
			</ul>
		</div>
		<div class="footer-categoria col-md-2 col-xs-6">
			<span>Categorias</span>
			<ul>
				<li>Comida</li>
				<li>Veículos</li>
				<li>Sports</li>
				<li>Imóveis</li>
				<li>Outros</li>
			</ul>
		</div>
		<div class="footer-parceiro col-md-4 col-xs-12">
			<span>Parceiros</span>
			<div class="footer-parceiros col-md-12">
			<?php foreach($Publicidades as $Publicidade):?>
						<?php if($Publicidade['Publicidade']['local'] == "parceiros") { ?>
				<div class="col-md-4 col-xs-4 logo-parceiro">
					<img src="<?php echo $this->request->base ?>/upload/publicidade/<?php echo $Publicidade['Publicidade']['id'] ?>/200x200-<?php echo $Publicidade['Publicidade']['imagem'] ?>">
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