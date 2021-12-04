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

                        <form action="add_invoice_entry_new" method="post">


  <div class="form-group">
    <label for="ref">Referance Number</label>
    <input readonly type="text" class="form-control" id="refNumber" name="refNumber">
  </div>

  <div class="form-group">
    <label for="studentName">Student Name</label>
    <input type="text" class="form-control" id="studentName" name="studentName" required>
    
  </div>
  
  <div class="form-group">
    <label for="studentPaid">Amount Paid</label>
    <input type="number" class="form-control" id="studentPaid" name="studentPaid" required>
    
  </div> 


  <div class="form-group">
    <label for="paymentMode">Payment Mode</label>
    
    <select name="paymentMode" id="paymentMode" class="form-control">
  <option value="Cash">Cash</option>
  <option value="Card">Credit Card</option>
    </select>
    
  </div>
  
   <div class="form-group">
    <label for="studentName">Remarks</label>
    <input type="text" class="form-control" id="Remarks" name="Remarks" required>
    
  </div>
  
<div class="form-group">
    <label for="semestername">Semester Name</label>
    
    <select name="semestername" id="semestername" class="form-control">
  <option value="semeste1">Semester 1</option>
  <option value="semeste2">Semester 2</option>
    </select>
  
  
  <div class="form-group">
    <label for="year">year</label>
    <input type="date" class="form-control" id="year" name="year" required>
    
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


function makeid(length) {
    var result           = '';
    var characters       = 'ABCD1';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * 
 charactersLength));
   }
   return result;
}

$('#refNumber').val(makeid(5));

</script>
