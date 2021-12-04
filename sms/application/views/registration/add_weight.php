<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/grocery_crud/themes/bootstrap/css/bootstrap/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/grocery_crud/themes/bootstrap/css/elusive-icons/css/elusive-icons.min.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/grocery_crud/themes/bootstrap/css/common.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/grocery_crud/themes/bootstrap/css/general.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/grocery_crud/themes/bootstrap/css/add-edit-form.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/grocery_crud/themes/bootstrap/css/main.css" />

<script>

var totalCount  = 0;

</script>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">



    <section class = "content-header">
        <div class = "container-fluid">
            <div class = "row mb-2">
                <div class = "col-sm-6">
                    <h4>New Weight</h4>
                </div>
                <div class = "col-sm-6">
                    <ol class = "breadcrumb float-sm-right">
                        <li class = "breadcrumb-item">Student Managment</li>
                        <li class = "breadcrumb-item active">New Weight</li>
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

                        <form action="add_weight_entry" method="post">

                        <div class="form-group">
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
    <input readonly type="text" class="form-control" id="studentId" name="studentId" required>
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
  
 <br>

 <div id="wDataOutput"></div>                        

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

$('#wDataOutput').hide();
var totalValue = 0;

$('#studentName').on('change', function() {
    $('#studentId').val(this.value);

    
});

$('#studentTerm').on('change', function() {
    if($('#studentId').val()!=null && $('#studentId').val()!='' && $('#studentTerm').val()!=null && $('#studentTerm').val()!=''){
        getWeights($('#studentId').val(),$('#studentTerm').val());
    }
});

function addWegits(id){
    
    if(id!=null && id!=""){ 
        totalValue = totalValue + parseFloat(id.trim());
        console.log(totalValue);
        $("#tV").val(totalValue);
    }
    
}

function getWeights(id,term) {
  $.get("getStudentWeight/"+id+"/"+term,function(data, status){
    $('#wDataOutput').show();
    $('#wDataOutput').html(data);
  });
}

</script>