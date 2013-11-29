<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('public/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <?php if(isset($styles)) : ?>
	<?php foreach($styles as $style): ?>
	           <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/<?php echo $style ?>.css" >
	<?php endforeach; ?>
	<?php endif; ?>

    <script src="<?php echo base_url('public/js/jquery.js') ?>"></script>
    <script src="<?php echo base_url('public/bootstrap/js/bootstrap.min.js') ?>"></script>

	<?php if(isset($scripts)) : ?>
	<?php      foreach($scripts as $script): ?>
	           <script type="text/javascript" src="<?php echo base_url(); ?>public/js/<?php echo $script ?>.js" ></script>
	 <?php endforeach; ?>
	<?php endif; ?>

	<script>
    	var CI = {'base_url': '<?php echo base_url(); ?>'};
	</script>
  </head>
  
  <body>
  	<div class="main">
  		<?php echo $topBar; ?>
  		
  		<div class="row">
  			<?php echo $body; ?>
  		</div>	
  	</div>	
  </body>
</html>    