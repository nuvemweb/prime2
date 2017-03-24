<ul class='nav nav-stacked'>
    <li id='Home'>
        <?php
        echo $this->Html->link("<i class='icon-home'></i>Home", array("controller" => "Home",
            "action" => "index"), array("escape" => false));
        ?>

    </li>
    <!--<li class='conteudos' id="conteudos">
        <?php
     //   echo $this->Html->link("<i class='icon-list'></i>Conteudo", array("controller" => "Conteudos",
          //  "action" => "index"), array("escape" => false));
        ?>
    </li>-->
    <li class='destaques' id="destaques">
        <?php
        echo $this->Html->link("<i class='icon-picture'></i>Player", array("controller" => "Destaques",
            "action" => "index"), array("escape" => false));
        ?>
    </li>
    <li class='animais' id="animais">
        <?php
        echo $this->Html->link("<i class='icon-cog'></i>Animais à venda", array("controller" => "animais",
            "action" => "index"), array("escape" => false));
        ?>
    </li>
   <!-- <li class='videos' id="videos">
        <?php
       // echo $this->Html->link("<i class='icon-play'></i>Vídeo animais à venda", array("controller" => "Videos",
         //   "action" => "index"), array("escape" => false));
        ?>
    </li> -->
    <li class='albuns' id="alguns">
        <?php
        echo $this->Html->link("<i class='icon-picture'></i>Galeria de fotos", array("controller" => "albuns",
            "action" => "index"), array("escape" => false));
        ?>
    </li>
    <li id="users">
        <?php
        echo $this->Html->link("<i class='icon-user'></i>Usuários", array("controller" => "Users",
            "action" => "index"), array("escape" => false));
        ?>

    </li>
</ul>

