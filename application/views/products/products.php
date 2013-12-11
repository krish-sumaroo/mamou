<div class="panel panel-info">
      <div class="panel-heading">List</div>
        <div class="panel-body">
        	<div id="prodList">
           <?php foreach ($prodList as $prod) : ?>
        		<a href="#" class="list-group-item prodItems" data-id="<?php echo $prod['id']?>">
              <h4 class="list-group-item-heading"><?php echo $prod['name'] ?></h4>
              <p class="list-group-item-text"><?php echo $prod['model'] ;?> : <?php echo $prod['size'] ?></p>
            </a>
            <?php endforeach ?>
        	</div>	
        </div>
</div>

