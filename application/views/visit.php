<div class="col-md-7 col-md-offset-1 list">
      <div class="panel panel-info">
          <div class="panel-heading">Planned Visits</div>
            <div class="panel-body">
                <div id="list">
                    <ul class="list-group" id="lstSupplier">
                      <li class="list-group-item">
                        <span class="badge">14.00</span>
                        Test</li>
                      <?php if($suppliers): ?>
                        <?php foreach ($suppliers as $supplier) : ?>
                        <li class="list-group-item itemSupplier" data-id="<?php echo $supplier['id'] ?>"><?php echo $supplier['name'] ?></li>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    </ul>
                </div>
                <button type="button" class="btn btn btn-primary btn-sm" id="newVisit">
                    <span class="glyphicon glyphicon-plus-sign"></span> New Visit
                </button>
            </div>
      </div>
  </div>
  <div class="col-md-3">
      <div class="panel panel-success">
          <div class="panel-heading">Notes</div>
            <div class="panel-body">
                Any notes for the day goes here
            </div>
      </div>
  </div>
</div>

<!-- dialogs -->
<?php echo $newSupplierView ?>