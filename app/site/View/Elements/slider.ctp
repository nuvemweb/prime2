


<script type="text/javascript">
	$(document).ready(function(){
		$("#featured").tabs({fx:[{opacity: "toggle", duration: 'slow'}, {opacity: "toggle", duration: 'normal'}],
			show: function(event, ui){
				$('#featured .ui-tabs-panel .info').hide();
				var infoheight=$('.info', ui.panel).height();
				$('.info', ui.panel).css('height', '0px').animate({ 'height': infoheight }, 500);
			}
		}).tabs("rotate", 5000, true);
		$('#featured').hover(
			function(){ $('#featured').tabs('rotate', 0, true); },
			function(){ $('#featured').tabs('rotate', 5000, true); }
		);
		$('#featured .ui-tabs-panel a.hideshow').click(function(){
			if($(this).text()=='Esconder'){
				$(this).parent('.info').animate({ 'height': '0px' }, 500);
				$(this).text('Mostrar');
			}
			else{
				$(this).parent('.info').animate({ 'height': '70px' }, 500);
				$(this).text('Esconder');
			}
			return false;
		});
	});
</script>


<div id="featured" >
	<ul class="ui-tabs-nav">
	<li class="prime-top"><span>Classificados prime</span></li>
	<?php foreach($Anuncios as $Anuncio):?>
		
		<?php if($Anuncio['Anuncio']['destaque'] == "1") { ?>

	    <li class="ui-tabs-nav-item" id="nav-fragment-<?php echo $Anuncio['Anuncio']['id'] ?>"><a href="#fragment-<?php echo $Anuncio['Anuncio']['id'] ?>"><img src="<?php echo $this->request->base ?>/upload/anuncio/<?php echo $Anuncio['Anuncio']['id'] ?>/250x184-<?php echo $Anuncio['Anuncio']['imagem'] ?>" alt="" /><span><p class="titulo-destaque"><?php echo $Anuncio['Anuncio']['titulo'];?></p><p><?php echo showReadMore($Anuncio['Anuncio']['descricao']);?></p></span></a></li>
	    <!--<li class="ui-tabs-nav-item" id="nav-fragment-2"><a href="#fragment-2"><img src="<?php echo $this->request->webroot;?>img/slider/image2-small.jpg" alt="" /><span>Nome do Item 2</span></a></li>
	    <li class="ui-tabs-nav-item" id="nav-fragment-3"><a href="#fragment-3"><img src="<?php echo $this->request->webroot;?>img/slider/image3-small.jpg" alt="" /><span>Nome do Item 3</span></a></li>
	    <li class="ui-tabs-nav-item" id="nav-fragment-4"><a href="#fragment-4"><img src="<?php echo $this->request->webroot;?>img/slider/image4-small.jpg" alt="" /><span>Nome do Item 4</span></a></li>-->
	     <?php } ?>
	 <?php endforeach;?>
	</ul>

	    <!-- First Content -->
	 <?php foreach($Anuncios as $Anuncio):?>
	 	<?php if($Anuncio['Anuncio']['destaque'] == "1") { ?>
	<div id="fragment-<?php echo $Anuncio['Anuncio']['id'] ?>" class="ui-tabs-panel" style="">
		<?php if($Anuncio['Anuncio']['publicidadeprincipal'] == "0") { ?><a href="http://www.classificadosprime.com.br/var/www/html/classificadosprime.com.br/web/site/galeria/view/<?php echo $Anuncio['Anuncio']['id']?>"><?php } ?><img src="<?php echo $this->request->base ?>/upload/anuncio/<?php echo $Anuncio['Anuncio']['id'] ?>/400x250-<?php echo $Anuncio['Anuncio']['imagem'] ?>" class="img-responsive" alt="" /></a>
	</div>
	<?php } ?>

	 <?php endforeach;?>


	    <!-- Second Content 
	<div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style="">
		<img src="<?php echo $this->request->webroot;?>/img/slider/image2.jpg" class="img-responsive" alt="" />
		<div class="info" >
			<a class="hideshow" href="#" >Esconder</a>
			<h2><a href="#" >Nome do Item 2</a></h2>
			<p>Descrição do item 2<a href="#" > continue lendo</a></p>
		</div>
	</div>

	    <!-- Third Content 
	<div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style="">
		<img src="<?php echo $this->request->webroot;?>/img/slider/image3.jpg" class="img-responsive" alt="" />
		<div class="info" >
			<a class="hideshow" href="#" >Esconder</a>
			<h2><a href="#" >Nome do item 3</a></h2>
			<p>Descrição do item 3<a href="#" > continue lendo</a></p>
	    </div>
	</div>

	    <!-- Fourth Content 
	<div id="fragment-4" class="ui-tabs-panel ui-tabs-hide" style="">
		<img src="<?php echo $this->request->webroot;?>/img/slider/image4.jpg" class="img-responsive" alt="" />
		<div class="info" >
			<a class="hideshow" href="#" >Esconder</a>
			<h2><a href="#" >Nome do item 4</a></h2>
			<p>Descrição do item 4 <a href="#" > continue lendo</a></p>
	    </div>
	</div>

	    <!-- Fourth Content -->


</div>


	

