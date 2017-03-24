<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <?php echo $this->Html->charset(); ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="author" content="Nuvem Desenvolvimento Web">
        <meta name="robots" content="index,follow">
        <link rel="shortcut icon" href="<?php echo $this->request->base ?>/img/icons/favicon.png" type="image/x-icon" />
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

  <?php
    echo $this->Html->css(array('bootstrap', '/fonts/stylesheet', 'style', 'style-slider', 'font-awesome', 'font-awesome.min'));
    echo $this->Html->script(array('jquery','bootstrap.min', 'moveRelogio', 'jquery-1.3.2.min','jquery-ui-1.7.2.custom.min'));

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    echo $this->fetch('fonts');
    ?>
    </head>

    <body onload="moveRelogio()">
    <?php echo $this->Element('header'); ?>
    <?php echo $this->fetch('content'); ?>
    <?php echo $this->Element('footer'); ?>
    </body>

</html>
