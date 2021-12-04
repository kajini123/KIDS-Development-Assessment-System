<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-bell"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Terms</span>
				<span class="info-box-number"><?php echo $Termgoals;?></span>
          <!--  <span class="info-box-number"><?php echo $agegroups;?></span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Students</span>
                <span class="info-box-number"><?php echo $registration;?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user-tie"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Enrollment</span>
                <span class="info-box-number"><?php echo $enrollment;?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-lightbulb"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Invoices</span>
                <span class="info-box-number"><?php echo $invoices;?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="form-group col-3 center">
    <label for="studentName">Select a student</label>
    <select class="form-control" id="studentName" name="studentName">
    <option selected>Select</option>

                        <?php  
                        
                        foreach ($reg_data as $record) {
                        
                            $student_id = $record->toArray()['id'];
                            $student_name = $record->toArray()['student_first_name']; ?>
                            
                            <option value="<?php echo $student_id;?>"><?php echo $student_name;?></option>

                            <?php } ?>

    </select>
  </div>
		
        <?php
    use \koolreport\widgets\google\ColumnChart;
    use \koolreport\widgets\google\LineChart;
    use \koolreport\widgets\google\ComboChart;

   
?>
<div id="wDataOutput2"></div>
<div id="wDataOutput"></div>





    
          <!-- /.col -->
        </div>
        <!-- /.row -->
		
		
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>

$('#wDataOutput').hide();
getEnrollmentChart();


$('#studentName').on('change', function() {
  getChart($('#studentName').val());
  
});

function getChart(id,term) {
  $.get("registration/getChart/"+id,function(data, status){
    $('#wDataOutput').show();
    $('#wDataOutput').html(data);
  });
}

function getEnrollmentChart() {
  $.get("registration/getEnrollmentChart/",function(data, status){
    
    $('#wDataOutput2').html(data);
  });
}


</script>

  