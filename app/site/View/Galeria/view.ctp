<div class="container">
	<div class="col-md-12 galeriaview">
		<div class="col-md-6">
			<?php if ($Anuncio['Anuncio']['imagem'] != "") {?>
			<a class="fancybox-thumb" rel="fancybox-thumb" href="<?php echo $this->request->base ?>/upload/anuncio/<?php echo $Anuncio['Anuncio']['id'] ?>/800x600-<?php echo $Anuncio['Anuncio']['imagem'] ?>"><img src="<?php echo $this->request->base ?>/upload/anuncio/<?php echo $Anuncio['Anuncio']['id'] ?>/400x250-<?php echo $Anuncio['Anuncio']['imagem'] ?>"></a>
			<?php } else { ?>
			<img class="imagem-secundario" src="<?php echo $this->request->webroot;?>/img/logo-anuncio-22.png">
			<?php } ?>
		</div>
		<div class="col-md-6">
		<br/><h2 class="tituloview"><?php echo $Anuncio['Anuncio']['titulo'];?></h2>
		<br/><h4 class="tituloview"><?php echo $Anuncio['Anuncio']['tiponegocio'];?></h4>
		</div>
		<div class="col-md-3">
			
			<p><span class="camposview">Data de postagem:</span> <?php echo $Anuncio['Anuncio']['created'];?></p>
			<p><span class="camposview">Categoria:</span> <?php echo $Anuncio['Anuncio']['categoria'];?></p>
			<p><span class="camposview">Descrição:</span> <?php echo $Anuncio['Anuncio']['descricao'];?></p>
		</div>
		<div class="col-md-3">	
			<p><span class="camposview">Anunciante:</span> <?php echo $Anuncio['Anuncio']['anunciante'];?></p>
			<p><span class="camposview">Facebook:</span> <a href="<?php echo $Anuncio['Anuncio']['facebook'];?>" target="_blank"><?php echo $Anuncio['Anuncio']['facebook'];?></a></p>
			<p><span class="camposview">Telefone:</span> <?php echo $Anuncio['Anuncio']['telefone'];?></p>
			<?php if(($Anuncio['Anuncio']['preco']) != "") {?>
			<br/><p><span class="camposview">Preço:</span> <?php echo $Anuncio['Anuncio']['preco'];?></p>
			<?php } ?>
		</div>
	</div>
</div>


<?php 
echo $this->Html->css(array('jquery.fancybox'));
echo $this->Html->script(array('jquery.fancybox', 'js_fancybox'));

?>