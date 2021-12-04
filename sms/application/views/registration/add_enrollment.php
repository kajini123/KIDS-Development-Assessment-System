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
                    <h4>New Enrollment</h4>
                </div>
                <div class = "col-sm-6">
                    <ol class = "breadcrumb float-sm-right">
                        <li class = "breadcrumb-item">Student Managment</li>
                        <li class = "breadcrumb-item active">New Enrollment</li>
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


                        <form action="add_enrollment_entry" method="post">

                        <div class="form-group" id="hOne">
    <label for="studentName">Student Name</label>
    <select class="form-control" id="studentName" name="studentName" required>
	
    <option selected>Select</option>

                        <?php  
                        
                        foreach ($reg_data as $record) {
                            
                            $student_id = $record->toArray()['id'];
                            $student_full_name = $record->toArray()['student_first_name']." ".$record->toArray()['student_middle_name']." ".$record->toArray()['student_last_name']; ?>
                            
                            <option value="<?php echo $student_id;?>"><?php echo $student_full_name;?></option>

                            <?php } ?>

    </select>
  </div>


  <div class="form-group">
    <label for="studentId">Student ID</label>

    <?php 
    $age_val;
    if($sAge && $sAge!=null){
        $age_val=$sAge;
    }else{
        $age_val=''; 
    } ?>

    <input readonly type="text" class="form-control" id="studentId" name="studentId" value="<?php echo $age_val; ?>" required>
    
  </div>
  <div class="form-group">
    <label for="studentAge">Student Age</label>

    <?php 
    $id_val;
    if($sId && $sId!=null){
        $id_val=$sId;
    }else{
        $id_val=''; 
    } ?>

    <input readonly type="number" class="form-control" id="studentAge" name="studentAge" value="<?php echo $id_val; ?>" required>
    
  </div>

  
  <div class="form-group">
    <label for="studentTerm">Student Term</label>
    <select class="form-control" id="studentTerm" name="studentTerm" required>
    <option selected>Select</option>

                        <?php  
                        
                        foreach ($term_data as $record) {
                            
                            $term_id = $record->toArray()['id'];
                            $term_name = $record->toArray()['name']; ?>
                            
                            <option value="<?php echo $term_id;?>"><?php echo $term_name;?></option>

                            <?php } ?>

    </select>
  </div>
  
  <input type="hidden" id="frmId" name="frmId" value="<?php if($frmId!=null) {echo $frmId; } else{echo '';}?>">

 <!-- <button type="submit" class="btn btn-secondary btn-success">Submit</button>  --->
		<button type="submit" class="btn btn-success">Submit</button>
 

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
    getAge(this.value);
    $('#studentId').val(this.value);
});


function getAge(id) {
  $.get("getAge/"+id,function(data, status){
    $('#studentAge').val(data);
  });
}

</script>
