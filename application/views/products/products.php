<div class="panel panel-info">
      <div class="panel-heading">List</div>
        <div class="panel-body">
        	<div id="prodList">
                    <?php foreach ($prodList as $prod) : ?>
                      <a href="#" class="list-group-item prodItems" data-id="<?php echo $prod['id']?>" id="list_<?php echo $prod['id'] ?>">
                       <h4 class="list-group-item-heading prodName"><?php echo $prod['name'] ?></h4>
                       <p class="list-group-item-text prodDesc"><span class="prodModel"><?php echo $prod['model'] ;?> </span>: <span class="prodSize"><?php echo $prod['size'] ?></span></p>
                     </a>
                     <?php endforeach ?>
        	</div>	
        </div>
</div>

