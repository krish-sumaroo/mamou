<div class="modal fade" id="newProductDialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">New Product</h4>
      </div>
      <div class="modal-body">
        <div class="alert" style="text-align: center" id="flashMsg"></div>
        <form class="form-horizontal" role="form" id="frmProduct" name="frmSupplier">
            <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control input" id="name" name="name" placeholder="Product Name" required>
              </div>
            </div>
            
            <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Model</label>
              <div class="col-sm-10">
                <input type="text" class="form-control input" id="model" name="model" placeholder="Product Model" required>
              </div>
            </div>
            
            <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Size</label>
              <div class="col-sm-10">
                <input type="text" class="form-control input" id="size" name="size" placeholder="Product Size" required>
              </div>
            </div>
            
            <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Notes</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="3" id="notes" name="notes"></textarea>
              </div>
            </div>
         </form> 
      </div>
       
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="addProduct" data-loading-text="Saving ...">Add Product</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
