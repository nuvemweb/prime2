<header>
    <!-- INICIO HEADER -->

<?php echo $this->Element('header'); ?>

    <!-- FINAL HEADER -->
    <!--<nav class='navbar navbar-default'>
        <a class='navbar-brand' href='http://nuvemdesenvolvimentoweb.com.br' target='_blank' title='Nuvem Desenvolvimento Web' alt='Nuvem Desenvolvimento Web'>
            <img src="<?php echo $this->webroot; ?>/img/logo_.png" title="Nuvem Desenvolvimento Web" alt="Nuvem Desenvolvimento Web" height="60%" style="margin: 0 50px; " />
        </a>
        <!-- Abre e fecha menu -->
        <ul class='nav'>

            <li class='dropdown dark user-menu'>
                <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                    <img src="<?php echo $this->webroot; ?>/upload/users/<?php echo($usuario["id"] . "/s_" . $usuario["imagem"]); ?>" alt="<?php echo $usuario["nome"] ?>" width="23" height="23" />
                    <?php //echo $this->Html->image('/upload/users/' . $this->request->data["User"]["id"] . '/s_' . $this->request->data["User"]["imagem"]); ?>

                    <span class='user-name'>
                        <?php echo($usuario["nome"]); ?>


                    </span>
                    <b class='caret'></b>
                </a>
                <ul class='dropdown-menu'>
                    <li>
                        <?php
                        echo $this->Html->link("<i class='icon-user'> Meus dados</i>", array("controller" => "users",
                            "action" => "edit", $usuario["id"]
                                ), array("escape" => false));
                        ?>

                    </li>
                    <li>
                        <?php
                        echo $this->Html->link("<i class='icon-key'> Alterar senha</i>", array("controller" => "users",
                            "action" => "alterar_senha", $usuario["id"]
                                ), array("escape" => false));
                        ?>

                    </li>
                    <li class='divider'></li>
                    <li>
                        <?php
                        if (!empty($usuario["email"])) {
                            echo $this->Html->link("<i class='icon-signout'>Sair</i>", array("controller" => "users",
                                "action" => "logout"
                                    ), array("escape" => false));
                        }
                        ?>

                    </li>
                </ul>
            </li>                
        </ul>
    <!--</nav>-->
</header>