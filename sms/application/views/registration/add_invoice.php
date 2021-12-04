<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/grocery_crud/themes/bootstrap/css/bootstrap/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/grocery_crud/themes/bootstrap/css/elusive-icons/css/elusive-icons.min.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/grocery_crud/themes/bootstrap/css/common.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/grocery_crud/themes/bootstrap/css/general.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/grocery_crud/themes/bootstrap/css/add-edit-form.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/grocery_crud/themes/bootstrap/css/main.css" />

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">



    <section class = "content-header">
        <div class = "container-fluid">
            <div class = "row mb-2">
                <div class = "col-sm-6">
                    <h4>New Invoice</h4>
                </div>
                <div class = "col-sm-6">
                    <ol class = "breadcrumb float-sm-right">
                        <li class = "breadcrumb-item">Payment Managment</li>
                        <li class = "breadcrumb-item active">New Invoice</li>
                    </ol>
                </div>
            </div>
        </div><!--/.container-fluid-->
    </section>



    <!-- Page content -->
    <div class="w3-container w3-padding w3-white">

        <div class="crud-form">
            <div class="container gc-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-label">


                            <div class="clear"></div>
                        </div>
                        <div class="form-container table-container">

                        <form action="add_invoice_entry" method="post">

                        <div class="form-group" id="hOne">
    <label for="studentName">Student Name:</label>
    <select class="form-control" id="studentName" name="studentName" required>
    <option selected>Select</option>

                        <?php  
                        
                        foreach ($reg_data as $record) {
                            
                            $student_id = $record->toArray()['id'];
                            $student_full_name = $record->toArray()['student_first_name']." ".$record->toArray()['student_middle_name']." ".$record->toArray()['student_last_name']; ?>
                            
                            <option value="<?php echo $student_id;?>">
											<?php echo $student_full_name;?>
							</option>

                            <?php } ?>

    </select>
  </div>


  <div class="form-group">
    <label for="studentId">Student ID</label>
    <input readonly type="text" class="form-control" id="studentId" name="studentId" required>
  </div>
  
  <div class="form-group">
    <label for="studentPaid">Amount Paid</label>
    <input type="number" class="form-control" id="studentPaid" name="studentPaid" required>
    
  </div> 

  <div class="form-group">
    <label for="studentDue">Amount Due</label>
    <input type="number" class="form-control" id="studentDue" name="studentDue" required>
    
  </div>
  
 

  

  <button type="submit" class="btn btn-secondary btn-success">Submit</button>
</form>
<br>



<?php if($this->session->flashdata('message')){ ?>

<div id="report-error" class="report-div error bg-danger" style=""><p><?php echo $this->session->flashdata('message');?></p>
</div>

<?php }?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.content -->
</div>

<script src="<?php echo base_url(); ?>assets/grocery_crud/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/grocery_crud/themes/bootstrap/build/js/global-libs.min.js"></script>
<script src="<?php echo base_url(); ?>assets/grocery_crud/themes/bootstrap/js/form/add.min.js"></script>

<script>

$('#studentName').on('change', function() {
    $('#studentId').val(this.value);
});

$('#studentPaid').on('change', function() {
    getDue($('#studentId').val());
});

function getDue(id) {
  $.get("getDue/"+id,function(data, status){
    $('#studentDue').val(data-$('#studentPaid').val());
  });
}

</script>
