<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 102 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('public/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

  <?php if(isset($styles)) : ?>
	<?php foreach($styles as $style): ?>
	           <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/styles/<?php echo $style ?>.css" >
	<?php endforeach; ?>
	<?php endif; ?>

    <script src="<?php echo base_url('public/js/jquery.js') ?>"></script>
    <script src="<?php echo base_url('public/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('public/js/utils') ?>"></script>

	<?php if(isset($scripts)) : ?>
	<?php      foreach($scripts as $script): ?>
	           <script type="text/javascript" src="<?php echo base_url(); ?>public/js/<?php echo $script ?>.js" ></script>
	 <?php endforeach; ?>
	<?php endif; ?>

	<script>
    	var mam = {'path': '<?php echo base_url(); ?>index.php/'};
	</script>
  </head>

  <body>
  	<div class="main">
  		<?php //echo $topBar; ?>

  		<div class="row">
  			<?php echo $view; ?>
  		</div>
  	</div>
  </body>
</html>