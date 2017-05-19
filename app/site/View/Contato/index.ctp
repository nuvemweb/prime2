<?php 
function showReadMore($string){
    $string = strip_tags($string);

    if (strlen($string) > 70) {

        $stringCut = substr($string, 0, 70);

        $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
    }
    return $string;
}
?>

<?php echo $this->Form->create("Contato", array('url' => array('controller' => 'contato', 'action' => 'index'), "class" => "form")); ?>

<div class="col-md-12 fundo-subpaginas">
	<div class="container">
		<div class="titulo-interna">
			<span class="paginacao">Home / Anúncios </span>
			<p>Fale Conosco</p>			
		</div>
	</div>
</div>

<div class="container">
    <div class="contato retira-padding col-md-12">
        <div class="container-dados retira-padding col-md-8">       <div class="dados retira-padding col-md-6">
                    <img src="<?php echo $this->request->webroot;?>img/tel.gif" />     
                    <div class="telefone retira-padding ">
                        <span>Telefone: </span> (34) 0000-0000 
                    </div>
                </div>
                <div class="dados retira-padding col-md-6">
                <!--<i class="fa fa-whatsapp fa-3x" aria-hidden="true"></i><p>--><br/><br/><br/><span>Whatsapp: </span> (34) 0000-0000
                </div>
                <div class="dados retira-padding col-md-6">
                    <img src="<?php echo $this->request->webroot;?>img/mail.gif" />     
                    <div class="e-mail retira-padding">
                        <span>E-Mail: </span> contato@classificadosprime.com.br
                    </div>
                </div>
                <div class="dados retira-padding col-md-6">
                <!--<i class="fa fa-whatsapp fa-3x" aria-hidden="true"></i><p>--><br/><br/><br/><span>Email 02: </span> blablabla@blabla.com 
                </div>
                <div class="dados retira-padding col-md-6">
                    <img src="<?php echo $this->request->webroot;?>img/local.gif" />     
                    <div class="endereco retira-padding">
                        <span>Endereço: </span> Av. Tomaz de Aquino, 200, 2º andar - <br/>sala 1 - Patos de Minas - MG
                    </div>
                </div>
            
        </div>
        <div class="container-galeria retira-padding col-md-4">
            <div class="galeria-esquerda alinhar-faleconosco col-md-12">
                <div class="bloco-redes-sociais retira-padding col-md-12 col-xs-12">
                   <div class="fb-like" data-href="https://www.facebook.com/primeinforpatos/" data-width="370" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                </div>
            </div>
           <div class="anuncio-lateral col-md-12">
            <?php foreach($Publicidades as $Publicidade):?>
                        <?php if($Publicidade['Publicidade']['local'] == "contatolateral") { ?>
                <div class="imagem-anuncio-lateral col-md-12">
                
                    <a href="<?php echo $Publicidade['Publicidade']['link'] ?>" target="_blank"><img class="img-responsive" title="<?php echo $Publicidade['Publicidade']['nome'] ?>" alt="<?php echo $Publicidade['Publicidade']['nome'] ?>" src="<?php echo $this->request->base ?>/upload/publicidade/<?php echo $Publicidade['Publicidade']['id'] ?>/350x250-<?php echo $Publicidade['Publicidade']['imagem'] ?>"></a>
                
                </div>
            <?php } ?>
                    <?php endforeach;?>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="formulario retira-padding col-md-12">
        <div class="dados-formulario retira-padding col-md-8">  
            <p>Deixe sua Mensagem:</p> 
            <div class="formulario-faleconosco retira-padding-form col-md-12">
            
                <form>
                    <div class="form-group retira-padding-form">
                        <input type="text" class="form-control" name='data[Contato][nome]' id='ContatoNome' required='required' placeholder="Nome:">
                    </div>
                    <div class="form-group retira-padding-form">    
                        <input type="email" class="form-control" name='data[Contato][email]' id='ContatoEmail' required='required' placeholder="E-Mail:">
                    </div>
                    <div class="form-group retira-padding-form">
                        <input type="text" class="form-control" name='data[Contato][telefone]' id='ContatoTelefone' required='required' placeholder="Telefone:">
                    </div>
                    <div class="form-group retira-padding-form">
                        <textarea class="form-control" rows="3" name='data[Contato][mensagem]' id="ContatoMensagem" required='required' placeholder="Mensagem:"></textarea>
                    </div>

                    <div class="botao-fala-conosco retira-padding-form">
                        <button type="submit">Enviar Mensagem</button>
                        <div id="result_validacao"></div>  
                    </div>
                    
                </form>
                 <?php echo $this->Form->end(); ?>
           
            </div>
             <div class="banner-anuncios banner-faleconosco col-md-12">
                <?php foreach($Publicidades as $Publicidade):?>
                        <?php if($Publicidade['Publicidade']['local'] == "contatofim") { ?>
                <div class="col-md-12 anuncio-centro anuncio-centro-ajusta">
                    <a href="<?php echo $Publicidade['Publicidade']['link'] ?>" target="_blank"><img class="img-responsive" title="<?php echo $Publicidade['Publicidade']['nome'] ?>" alt="<?php echo $Publicidade['Publicidade']['nome'] ?>" src="<?php echo $this->request->base ?>/upload/publicidade/<?php echo $Publicidade['Publicidade']['id'] ?>/730x100-<?php echo $Publicidade['Publicidade']['imagem'] ?>"></a>
                </div>
                 <?php } ?>
                    <?php endforeach;?>
            </div>


        </div>
        <div class="mais-vistos col-md-4">
            <div class="galeria-anuncios anuncios-virtuais">
            <div class="nome-sessao">
                <span>Serviços</span>
            </div>
                <div class="anuncios-virtuais">
                    <?php foreach($Anuncios as $Anuncio):?>
                <?php if(($Anuncio['Anuncio']['categoria'] == "servicos") && ($Anuncio['Anuncio']['destaquecategoria'] == "1")) { ?>
                    <div class="anuncio-conteudo-secundario col-md-12">
                        <div class="secundario-imagem col-md-5">
                        <?php if ($Anuncio['Anuncio']['imagem'] != "") {?>
                            <a href="<?php echo $this->request->base ?>/galeria/view/<?php echo $Anuncio['Anuncio']['id']?>"><img class="imagem-secundario" src="<?php echo $this->request->base ?>/upload/anuncio/<?php echo $Anuncio['Anuncio']['id'] ?>/200x200-<?php echo $Anuncio['Anuncio']['imagem'] ?>"></a>
                        <?php } else { ?>
                        <a href="<?php echo $this->request->base ?>/galeria/view/<?php echo $Anuncio['Anuncio']['id']?>"><img class="imagem-secundario" src="<?php echo $this->request->webroot;?>img/logo-anuncio-200.png"></a>
                        <?php } ?>
                        </div>
                        <div class="secundario-descricao col-md-7">
                            <h4><?php echo $Anuncio['Anuncio']['titulo'];?></h4>
                            <p><?php echo showReadMore($Anuncio['Anuncio']['descricao']);?></p>
                        </div>
                    </div>
                <?php } ?>
                <?php endforeach;?>
                    <!--<div class="anuncio-conteudo-secundario col-md-12">
                        <div class="secundario-imagem col-md-5">
                            <img class="imagem-secundario" src="http://placehold.it/200x130">
                        </div>
                        <div class="secundario-descricao col-md-7">
                            <h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
                            <p>Lorem ipsum lorem ipsum</p>
                        </div>
                    </div>
                    <div class="anuncio-conteudo-secundario col-md-12">
                        <div class="secundario-imagem col-md-5">
                            <img class="imagem-secundario" src="http://placehold.it/200x130">
                        </div>
                        <div class="secundario-descricao col-md-7">
                            <h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
                            <p>Lorem ipsum lorem ipsum</p>
                        </div>
                    </div>
                    <div class="anuncio-conteudo-secundario col-md-12">
                        <div class="secundario-imagem col-md-5">
                            <img class="imagem-secundario" src="http://placehold.it/200x130">
                        </div>
                        <div class="secundario-descricao col-md-7">
                            <h4>Lorem ipsum lorem lorem lorem lorem lorem lorem</h4>
                            <p>Lorem ipsum lorem ipsum</p>
                        </div>
                    </div>-->


                </div>
            </div>
        </div>
    </div>
</div>
<div class="mapa-contato col-md-12">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7563.980785357605!2d-46.51988992200527!3d-18.574471865699056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94aef4d4970f76a7%3A0xf31d9349738abcb5!2sPrime+Inform%C3%A1tica!5e0!3m2!1spt-BR!2sbr!4v1490709722191" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>



<?php echo $this->Html->script(array("jquery.maskedinput.min.js", "js_contato.js")); ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>