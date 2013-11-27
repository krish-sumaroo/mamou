<div class="modal fade" id="supplier">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">New Supplier</h4>
      </div>
      <div class="modal-body">
        <div class="alert" style="text-align: center" id="flashMsg"></div>
        <form class="form-horizontal" role="form" id="frmSupplier" name="frmSupplier">
            <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control input-lg" id="name" name="name" placeholder="Company Name" required>
              </div>
            </div>
            <div class="form-group">
              <label for="dayVisit" class="col-sm-2 control-label">Visit Day</label>
              <div class="col-sm-10">
                  <select id="dayVisit" name="dayVisit" class="form-control">
                     <?php foreach ($days as $key => $value) : ?>
                      <option value="<?php echo $key ?>"><?php echo $value ?></option>
                      <?php endforeach; ?>
                   
                  </select>
              </div>
            </div>            
      
        
          <ul class="nav nav-pills">
            <li class="active"><a href="#contacts" data-toggle="tab">Contacts</a></li>
            <li><a href="#address" data-toggle="tab">Address</a></li>
            <li><a href="#notes" data-toggle="tab">Notes</a></li>
          </ul>
          
          <div class="tab-content">
            <div class="tab-pane fade in active dialogSub" id="contacts">
                <table class="table table-hover">
                        <thead>
                            <th>Title</th>
                            <th>Name</th>
                            <th>Telephone</th>
                        </thead>
                        
                        <tr>
                            <td>
                                <input type="text" class="form-control" id="title1" name="title1" placeholder="Title1">
                            </td>
                            <td>
                                <input type="text" class="form-control" id="contact1" name="contact1" placeholder="Name 1">
                            </td>
                            <td>
                                <input type="text" class="form-control" id="fone1" name="fone1" placeholder="Phone 1">
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <input type="text" class="form-control" id="title2" name="title2" placeholder="Title 2">
                            </td>
                            <td>
                                <input type="text" class="form-control" id="contact2" name="contact2" placeholder="Company Name">
                            </td>
                            <td>
                                <input type="text" class="form-control" id="fone2" name="fone2" placeholder="Phone 2">
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <input type="text" class="form-control" id="title3" name="title3" placeholder="Title 3">
                            </td>
                            <td>
                                <input type="text" class="form-control" id="contact3" name="contact3" placeholder="Name 2">
                            </td>
                            <td>
                                <input type="text" class="form-control" id="fone3" name="fone3" placeholder="Phone 3">
                            </td>
                        </tr>
                    </table>       
            </div>
            <div class="tab-pane fade dialogSub textareaSpace" id="address">
                
                    <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" rows="3" id="address" name="address"></textarea>
                    </div>
                  </div>
                
            </div>
            <div class="tab-pane fade dialogSub textareaSpace" id="notes">
               
                    <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Notes</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" rows="3" id="notes" name="notes"></textarea>
                    </div>
                  </div>
               
            </div>
          </div>
         </form> 
      </div>
       
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="addSupplier" data-loading-text="Saving ...">Add Supplier</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->