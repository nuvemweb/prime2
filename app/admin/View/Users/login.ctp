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

           <?php echo $this->element('header'); ?>

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

                    <div class="col-md-12 fundo-subpaginas">
    <div class="container">
        <div class="titulo-interna">
            <span class="paginacao">Home / Entrar </span>
            <p>Entrar</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="formularios-cadastro col-md-12 col-xs-12">
        <!--<div class="formulario-login col-md-6 col-xs-12">
            <span>Já tem cadastro</span>
            <form>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email:">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha:">
                </div>
                <div class="botao-formularios">
                    <button type="submit">Entrar</button>
                </div>
            </form>
            <div class="esquecer-senha col-md-12 col-xs-12">
                <a href="#">*Esqueci minha senha</a>
            </div>
        </div>-->
        <div class="formulario-signin col-md-6 col-md-offset-3  col-xs-12">
            <span>Entre e anuncie agora! Grátis!<br/><br/></span>

                        <div class='login-container'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-sm-12 '>
                                    <!--<div class='text-center'>
                                        <img src="<?php echo $this->webroot; ?>/img/logo.png" title="Paula Mendonça" alt="Paula Mendonça"  /><br/><br/><br/>
                                    </div>-->
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
                                    </div>
                                    <!--<div class='col-sm-5 col-sm-offset-2'>
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
            </div>
                </div>
            </div>

        <!-- FOOTER -->

           <?php echo $this->element('footer'); ?>

        <!-- FIM FOOTER -->

        </body>
    </html>
