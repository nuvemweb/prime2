
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
		<li class="prime-top"><span>Prime Informática</span></li>
	    <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-1"><a href="#fragment-1"><img src="<?php echo $this->request->webroot;?>img/slider/image1-small.jpg" alt="" /><span>Nome do Item 1</span></a></li>
	    <li class="ui-tabs-nav-item" id="nav-fragment-2"><a href="#fragment-2"><img src="<?php echo $this->request->webroot;?>img/slider/image2-small.jpg" alt="" /><span>Nome do Item 2</span></a></li>
	    <li class="ui-tabs-nav-item" id="nav-fragment-3"><a href="#fragment-3"><img src="<?php echo $this->request->webroot;?>img/slider/image3-small.jpg" alt="" /><span>Nome do Item 3</span></a></li>
	    <li class="ui-tabs-nav-item" id="nav-fragment-4"><a href="#fragment-4"><img src="<?php echo $this->request->webroot;?>img/slider/image4-small.jpg" alt="" /><span>Nome do Item 4</span></a></li>
	    
	</ul>

	    <!-- First Content -->
	<div id="fragment-1" class="ui-tabs-panel" style="">
		<img src="<?php echo $this->request->webroot;?>/img/slider/image1.jpg" class="img-responsive" alt="" />
		<div class="info" >
			<a class="hideshow" href="#" >Esconder</a>
			<h2><a href="#" >Nome do Item 1</a></h2>
			<p>Descrição do item 1</a></p>
		</div>
	</div>

	    <!-- Second Content -->
	<div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style="">
		<img src="<?php echo $this->request->webroot;?>/img/slider/image2.jpg" class="img-responsive" alt="" />
		<div class="info" >
			<a class="hideshow" href="#" >Esconder</a>
			<h2><a href="#" >Nome do Item 2</a></h2>
			<p>Descrição do item 2<a href="#" > continue lendo</a></p>
		</div>
	</div>

	    <!-- Third Content -->
	<div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style="">
		<img src="<?php echo $this->request->webroot;?>/img/slider/image3.jpg" class="img-responsive" alt="" />
		<div class="info" >
			<a class="hideshow" href="#" >Esconder</a>
			<h2><a href="#" >Nome do item 3</a></h2>
			<p>Descrição do item 3<a href="#" > continue lendo</a></p>
	    </div>
	</div>

	    <!-- Fourth Content -->
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


	
