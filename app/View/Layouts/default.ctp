<!DOCTYPE html>
<html>
  <head>
  	<?php echo $this->Html->charset(); ?>
    <title><?php echo $title_for_layout; ?></title>
    <?php echo $this->Html->meta('icon'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <?php 
    	echo $this->Html->css('bootstrap.min'); 
    	echo $this->fetch('meta');
		echo $this->fetch('css');
    ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    	<?php echo $this->Html->script('html5shiv'); ?>
    	<?php echo $this->Html->script('respond.min'); ?>
    <![endif]-->
  </head>
  <body>

	<div class="container flash">
		<?php echo $this->Session->flash(); ?>
    </div><!-- /.container -->

	<div class="container">
		<?php echo $this->fetch('content'); ?>
    </div><!-- /.container -->

    <?php 
    	echo $this->Html->script('jquery.min');
    	echo $this->Html->script('bootstrap.min');
    	echo $this->fetch('script');
     ?>
  </body>
</html>
