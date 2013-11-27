<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('public/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <style>
        .header{
            background-color: #428bca;
        }
        
       .navbar-default .navbar-text {
            color: #fff;
        }
        .date{
            padding-left: 10px;
        }
        
        .list{
            
        }
        
        .dialogSub{
            background-color: #EAEAEA;
            border-radius: 5px;
            margin-top: 10px;
        }
        
        .textareaSpace{
            padding: 5px;
        }
    </style>
  <body>
      <div class="main">
          <nav class="navbar navbar-default header" role="navigation">
              <div class="navbar-header">
                <p class="navbar-text headertext"><span class="badge pull-left">0/5</span><span class="date"><?php echo date('l, d-M-Y') ?></span></p>
              </div>
          </nav>
         
          <div class="row">
              <div class="col-md-7 col-md-offset-1 list">
                  <div class="panel panel-info">
                      <div class="panel-heading">Planned Visits</div>
                        <div class="panel-body">
                            <div id="list">
                                <ul class="list-group">
                                  <li class="list-group-item">
                                    <span class="badge">14.00</span>
                                    Cras justo odio</li>
                                  <li class="list-group-item">Dapibus ac facilisis in</li>
                                  <li class="list-group-item">Morbi leo risus</li>
                                  <li class="list-group-item">Porta ac consectetur ac</li>
                                  <li class="list-group-item">Vestibulum at eros</li>
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
          
      </div>
      
      <!-- dialogs -->
      <?php echo $newSupplierView ?>
      
    <script src="<?php echo base_url('public/js/jquery.js') ?>"></script>
    <script src="<?php echo base_url('public/bootstrap/js/bootstrap.min.js') ?>"></script>
    
    
    <script>
        var path = '<?php echo base_url(); ?>index.php/';
    $( document ).ready(function() {
        $('#newVisit').click(function () {
           $('#supplier').modal('show');
        });

        $('#supplier').on('show', function(){
            $('#flashMsg').hide();
            $('#frmSupplier')[0].reset();
        });

        
        
         $('#addSupplier').click(function () {
          $(this).button('loading');
           var postedValsArr = $('#frmSupplier').serializeArray();
           $.post(path+"supplier/addSupplier", { elements:JSON.stringify(postedValsArr)},
           function( data ) {
                if(data.status == 1)
                {
                  $('#supplier').modal('hide');
                }
                else
                {
                  $('#flashMsg').html(data.message);
                  $('#flashMsg').fadeIn();
                }
              });
           
           
        });
        

        
});
    
    
    
    </script>
  </body>
</html>