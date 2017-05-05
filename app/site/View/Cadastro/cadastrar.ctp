<!DOCTYPE html>
    <html>
        <head>
            <title>Entrar | Administração</title>
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
            <meta content='text/html;charset=utf-8' http-equiv='content-type'>
            <meta content='Flat administration template for Twitter Bootstrap. Twitter Bootstrap 3 template with Ruby on Rails support.' name='description'>
            <link href='assets/images/meta_icons/favicon.png' rel='shortcut icon' type='image/x-icon'>
            <link href='assets/images/meta_icons/apple-touch-icon.png' rel='apple-touch-icon-precomposed'>
            <link href='assets/images/meta_icons/apple-touch-icon-57x57.png' rel='apple-touch-icon-precomposed' sizes='57x57'>
            <link href='assets/images/meta_icons/apple-touch-icon-72x72.png' rel='apple-touch-icon-precomposed' sizes='72x72'>
            <link href='assets/images/meta_icons/apple-touch-icon-114x114.png' rel='apple-touch-icon-precomposed' sizes='114x114'>
            <link href='assets/images/meta_icons/apple-touch-icon-144x144.png' rel='apple-touch-icon-precomposed' sizes='144x144'>
        <!-- / START - page related stylesheets [optional] -->

        <!-- / END - page related stylesheets [optional] -->
            <?php echo $this->Html->meta('meta_icons/favicon');
                echo $this->Html->css(
                    array('bootstrap/bootstrap','light-theme','theme-colors.css','/fonts/stylesheet','font-awesome', 'font-awesome.min','style','demo','plugins/select2/select2','plugins/bootstrap_colorpicker/bootstrap-colorpicker.css','plugins/bootstrap_daterangepicker/bootstrap-daterangepicker.css','plugins/bootstrap_datetimepicker/bootstrap-datetimepicker.min.css','plugins/bootstrap_switch/bootstrap-switch.css','plugins/common/bootstrap-wysihtml5.css',
                ));
                echo $this->Html->script(
                    array('jquery/jquery.min','jquery/jquery.mobile.custom.min.js','jquery/jquery-migrate.min.js','jquery/jquery-ui.min.js','plugins/jquery_ui_touch_punch/jquery.ui.touch-punch.min.js','bootstrap/bootstrap.js','plugins/modernizr/modernizr.min.js','plugins/retina/retina.js','theme.js','demo.js',
                ));
                echo $this->fetch('meta');
                echo $this->fetch('css');
                echo $this->fetch('script');
            ?>   
        </head>
        <body class="login">

        <!--HEADER-->

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
                            <a href="http://localhost/prime2/Desenvolvimento/admin">Entrar / Cadastrar</a>  

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
  
                </form>     --> 
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
                        <a href="<?php echo $this->request->base; ?>/home">
                            <div class="col-md-9 texto-logo-header">
                                <span>Classificados Prime <p class="prime">Prime Informática </p> <p class="prime-tel"> (34) 3814-1165/98443-4343</p></span>
                            </div>
                        </a>
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

    <!-- FIM HEADER -->

            <div class='middle-container'>
                <div class='middle-row'>
                    <div class='middle-wrapper'>
                    <!--<div class='login-container-header'>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <div class='text-center'>
                                        <a href="http://nuvemdesenvolvimentoweb.com.br" target="_blank" title="Nuvem Desenvolvimento Web" alt="Nuvem Desenvolvimento Web">
                                            <img src="<?php echo $this->webroot; ?>/img/logo_.png" title="Nuvem Desenvolvimento Web" alt="Nuvem Desenvolvimento Web" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                        <div class='login-container'>
                            <div class='container'>
                                <div class='row'>
                                    <!--<div class='col-sm-4 col-sm-offset-4'>
                                    <!--<div class='text-center'>
                                        <img src="<?php echo $this->webroot; ?>/img/logo.png" title="Paula Mendonça" alt="Paula Mendonça"  /><br/><br/><br/>
                                    </div>
                                        <?php
                                            echo $this->Form->create('User', array('role' => 'form', "inputDefaults" => array(
                                                "before" => '<div class="form-group">',
                                                "between" => '<div class="controls with-icon-over-input text-center">',
                                                "after" => "</div></div>",
                                                "class" => "form-control",
                                                'label' => array("class" => 'col-md-2 control-label')),
                                                "class" => "validate-form",
                                            ));
                                        ?>
                                        <?php
                                            echo $this->Form->input('email', array(
                                                "before" => '<div class="form-group">',
                                                "between" => '<div class="controls with-icon-over-input text-center">',
                                                "after" => "<i class='icon-user text-muted'></i></div></div>",
                                                "class" => 'form-control',
                                                "data-rule-required" => "true",
                                                "data-rule-email" => 'true',
                                                "placeholder" => "E-mail",
                                                'label' => false,
                                            ));
                                            echo $this->Form->input('password', array(
                                                "before" => '<div class="form-group">',
                                                "between" => '<div class="controls with-icon-over-input text-center">',
                                                "after" => "<i class='icon-lock text-muted'></i></div></div>",
                                                "class" => 'form-control',
                                                "data-rule-required" => "true",
                                                "placeholder" => "Senha",
                                                'label' => array('text' => false,),
                                            ));
                                            echo $this->Form->input('Entrar', array(
                                                "type" => 'button',
                                                "class" => "btn btn-block",
                                                "label" => array(
                                                    'class' => '',
                                                    'text' => ''
                                                ),
                                            ));
                                        ?>
                                        <?php echo $this->Form->end(); ?>
                                        <div class="form-group">
                                            <div class="controls with-icon-over-input text-center">
                                                <p class="text-danger">
                                                    <b><?php echo $this->Session->flash(); ?></b>
                                                </p>
                                            </div>
                                        </div>
                                    </div>-->
                                    <div class='col-sm-4 col-sm-offset-4'>
                                        <div class='box'>
                                            <div class='box-content'>
                                                <?php
                                                    echo $this->Form->create('User', $this->FormAdmin->formConfigs);
                                                    echo $this->Form->input('nome', array(
                                                        "data-rule-minlength" => '5',
                                                        "data-rule-required" => 'true',
                                                        "placeholder" => 'Nome'
                                                    ));
                                                    echo $this->Form->input('email', array(
                                                        "data-rule-email" => 'true',
                                                        "data-rule-required" => 'true',
                                                        "placeholder" => 'E-mail'
                                                    ));
                                                    echo $this->Form->input('password');

                //echo $this->Form->input('funcao');
                //echo $this->Form->input('tipo');
                //echo $this->Form->input('status', array('options' => array(1 => "Ativo", 0 => "Inativo"), 'empty' => 'Selecione'));

                //echo $this->Form->input("imagem", array('type' => 'file', "accept" => "image/gif, image/png, image/jpeg"));
                                                ?>
                                                <div class='form-actions form-actions-padding-sm'>
                                                    <div class='row'>
                                                        <div class='col-md-10 col-md-offset-2'>
                                                            <button class='btn btn-primary BtnSubmit' type='submit'>
                                                                <i class='icon-save'></i>
                                                                Salvar
                                                            </button>
                                                            <?php echo $this->Html->link("Cancelar", array('action' => 'index'), array('class' => 'btn'));
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                    echo $this->Form->end();
                                                    echo $this->Html->script(array(
                                                        '/imgadmin/js/ckeditor/ckeditor.js'
                                                        ), array('inline' => false));
                                                ?>
                                            </div>
                                        </div>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    <!-- <div class='login-container-footer'>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <div class='text-center'>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    </div>
                </div>
            </div>

        <!-- FOOTER -->

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
                            <img src="<?php echo $this->request->webroot;?>img/logo2.png">
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
                            </div>
                            <div class="col-md-4 col-xs-4 logo-parceiro">
                                <img src="http://placehold.it/200x200">
                            </div>
                            <div class="col-md-4 col-xs-4 logo-parceiro">
                                <img src="http://placehold.it/200x200">
                            </div>
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

        <!-- FIM FOOTER -->

        </body>
    </html>
