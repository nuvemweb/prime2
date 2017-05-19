<ul class='nav nav-stacked'>

    <li id='Home'>
        <?php
        echo $this->Html->link("<i class='fa fa-location-arrow' aria-hidden='true'></i> Inicio", array("controller" => "Home",
            "action" => "index"), array("escape" => false));
        ?>

    </li>

      <li class='cursos' id="cursos">
        <?php
        echo $this->Html->link("<i class='fa fa-clone' aria-hidden='true'></i> Anunciar", array("controller" => "Anuncios",
            "action" => "add"), array("escape" => false));
        ?>
    </li>

     


  
    
   
   
    <!--<li class='destaques' id="destaques">
        <?php
        echo $this->Html->link("<i class='icon-picture'></i>Player", array("controller" => "Destaques",
            "action" => "index"), array("escape" => false));
        ?>
    </li>-->
  
    <?php if($usuario["categoria"]) { ?>

     <li class='cursos' id="cursos">
        <?php
        echo $this->Html->link("<i class='fa fa-thumbs-o-up' aria-hidden='true'></i> Aprovar Anuncios", array("controller" => "Anuncios",
            "action" => "index"), array("escape" => false));
        ?>
    </li>

    <li class='depoimentos' id="depoimentos">
        <?php
        echo $this->Html->link("<i class='fa fa-globe' aria-hidden='true'></i> Anuncios no site", array("controller" => "Anuncios",
            "action" => "index2"), array("escape" => false));
        ?>
    </li>


    <li class='depoimentos' id="depoimentos">
        <?php
        echo $this->Html->link("<i class='fa fa-address-card-o' aria-hidden='true'></i> Publicidade", array("controller" => "Publicidades",
            "action" => "index"), array("escape" => false));
        ?>
    </li>

    <li id="users">
        <?php
        echo $this->Html->link("<i class='fa fa-user-circle-o' aria-hidden='true'></i> Usuários", array("controller" => "Users",
            "action" => "index"), array("escape" => false));
        ?>

    </li>

    

    <!--<li class='depoimentos' id="depoimentos">
        <?php
        echo $this->Html->link("<i class='icon-group'></i>Aprovar Anuncios", array("controller" => "Depoimentos",
            "action" => "index"), array("escape" => false));
        ?>
    </li>-->

    

    

  <?php } ?>
  <li class='cursos' id="cursos">
          <?php
                        if (!empty($usuario["email"])) {
                            echo $this->Html->link("<i class='fa fa-sign-out' aria-hidden='true'></i> Sair", array("controller" => "users",
                                "action" => "logout"
                                    ), array("escape" => false));
                        }
                        ?>
    </li>
</ul>

