<ul class='nav nav-stacked'>

    <li id='Home'>
        <?php
        echo $this->Html->link("<i class='icon-home'></i>Home", array("controller" => "Home",
            "action" => "index"), array("escape" => false));
        ?>

    </li>

      <li class='cursos' id="cursos">
        <?php
        echo $this->Html->link("<i class='icon-list'></i>Anunciar", array("controller" => "Anuncios",
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
    <li id="users">
        <?php
        echo $this->Html->link("<i class='icon-user'></i>Usuários", array("controller" => "Users",
            "action" => "index"), array("escape" => false));
        ?>

    </li>

     <li class='cursos' id="cursos">
        <?php
        echo $this->Html->link("<i class='icon-list'></i>Aprovar Anuncios", array("controller" => "Anuncios",
            "action" => "index"), array("escape" => false));
        ?>
    </li>

    <!--<li class='depoimentos' id="depoimentos">
        <?php
        echo $this->Html->link("<i class='icon-group'></i>Aprovar Anuncios", array("controller" => "Depoimentos",
            "action" => "index"), array("escape" => false));
        ?>
    </li>-->

    <li class='depoimentos' id="depoimentos">
        <?php
        echo $this->Html->link("<i class='icon-group'></i>Anuncios no site", array("controller" => "Anuncios",
            "action" => "index2"), array("escape" => false));
        ?>
    </li>

  <?php } ?>
</ul>

