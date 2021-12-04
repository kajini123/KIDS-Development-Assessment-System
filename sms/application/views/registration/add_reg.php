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
                    <h4>New Registration</h4>
                </div>
                <div class = "col-sm-6">
                    <ol class = "breadcrumb float-sm-right">
                        <li class = "breadcrumb-item">Student Managment</li>
                        <li class = "breadcrumb-item active">New Registration</li>
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

                        <form action="add_reg_entry" method="post">

  <div class="form-group">
    <label for="ref">Referance Number</label>
    <input type="text" class="form-control" id="refNumber" name="refNumber">
  </div>

  

  <div class="form-group">
    <label for="student_first_name">Student Name</label>
    <input readonly type="text" class="form-control" id="student_first_name" name="student_first_name">
    
  </div>

  <div class="form-group">
    <label for="student_gender">Student Gender</label>
    
    <select name="student_gender" id="student_gender" class="form-control">
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  
</select>
    
  </div>

  <div class="form-group">
    <label for="student_dob">Student Date of Birth</label>
    <input  type="date" class="form-control" id="student_dob" name="student_dob">
    
  </div>


  <div class="form-group">
    <label for="student_home_address">Student Home Address</label>
    <input  type="text" class="form-control" id="student_home_address" name="student_home_address">
  </div>

  <div class="form-group">
    <label for="student_doe">Student Date of Enrollment</label>
    <input  type="date" class="form-control" id="student_doe" name="student_doe">
  </div>

  <div class="form-group">
    <label for="student_father_name">Student Father's Name</label>
    <input  type="text" class="form-control" id="student_father_name" name="student_father_name">
  </div>

  <div class="form-group">
    <label for="student_father_job">Student Father's Job</label>
    <input  type="text" class="form-control" id="student_father_job" name="student_father_job">
  </div>

  <div class="form-group">
    <label for="student_father_mobile">Student Father's Mobile</label>
    <input  type="number" class="form-control" id="student_father_mobile" name="student_father_mobile">
  </div>

  <div class="form-group">
    <label for="student_father_office_number">Student Father's Office Number</label>
    <input  type="number" class="form-control" id="student_father_office_number" name="student_father_office_number">
  </div>

  <div class="form-group">
    <label for="student_father_email">Student Father's Email</label>
    <input  type="email" class="form-control" id="student_father_email" name="student_father_email">
  </div>




  <div class="form-group">
    <label for="student_mother_name">Student Mother's Name</label>
    <input  type="text" class="form-control" id="student_mother_name" name="student_mother_name">
  </div>

  <div class="form-group">
    <label for="student_mother_job">Student Mother's Job</label>
    <input  type="text" class="form-control" id="student_mother_job" name="student_mother_job">
  </div>

  <div class="form-group">
    <label for="student_mother_mobile">Student Mother's Mobile</label>
    <input  type="number" class="form-control" id="student_mother_mobile" name="student_mother_mobile">
  </div>

  <div class="form-group">
    <label for="student_mother_office_number">Student Mother's Office Number</label>
    <input  type="number" class="form-control" id="student_mother_office_number" name="student_mother_office_number">
  </div>

  <div class="form-group">
    <label for="student_mother_email">Student Mother's Email</label>
    <input  type="email" class="form-control" id="student_mother_email" name="student_mother_email">
  </div>

  
  <div class="form-group">
    <label for="Emergency_No">Emergency No</label>
    <input type="number" class="form-control" id="Emergency_No" name="Emergency_No">
    
  </div> 
  
  <div class="form-group">
    <label for="Nationality">Nationality</label>
    <input  type="text" class="form-control" id="Nationality" name="Nationality">
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

$('#refNumber').on('change', function() {
    getRef($('#refNumber').val());
});

function getRef(id) {
  $.get("getRef/"+id,function(data, status){
    $('#student_first_name').val(data);
  }
  
  
  
  );
}


</script>
