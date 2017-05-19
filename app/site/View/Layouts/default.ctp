<!DOCTYPE html>
<html>
    <head>
        <title>Classificados Prime</title>
        <?php echo $this->Html->charset(); ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="author" content="Classificados Prime">
        <meta name="robots" content="index,follow">
        <link rel="shortcut icon" href="<?php echo $this->request->base ?>/img/favicon.png" type="image/x-icon" />
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
<script type="text/javascript" src="code.jquery.com/jquery-1.11.3.min.js"></script>
  <?php
    echo $this->Html->css(array('bootstrap', '/fonts/stylesheet', 'style', 'style-slider', 'font-awesome', 'font-awesome.min', 'style-mobile', 'jquery.fancybox'));
    echo $this->Html->script(array('jquery', 'moveRelogio','jquery-ui-1.7.2.custom.min','bootstrap.min','bootstrap', 'js_contato', 'jquery.maskedinput.min', 'jquery.fancybox', 'js_fancybox'));

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    echo $this->fetch('fonts');


    ?>
        <script type="text/javascript">
    $('#whats').tooltip('toogle');
</script>

<script type="text/javascript">
    $('#snap').tooltip('toogle');
</script>

<script type="text/javascript">

    //$(document).ready(function() {
    //  $('#exemplomodal').modal('show');
    //})

    //$(window).load(function(){ $('#exemplomodal').modal('show'); });
</script>
    </head>

    <body onload="moveRelogio()">


    <?php echo $this->Element('header'); ?>
    <?php echo $this->Session->flash(); ?>
    <?php echo $this->fetch('content'); ?>
    <?php echo $this->Element('footer'); ?>
    </body>



</html>
