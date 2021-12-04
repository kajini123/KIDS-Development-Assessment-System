<?php
use \koolreport\widgets\koolphp\Table;
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class = "content-header">
        <div class = "container-fluid">
            <div class = "row mb-2">
                <div class = "col-sm-3">
                <form action="student_master">
                <button type="submit" class="btn btn-primary">Download full report in CSV</button>
                </form>
                </div>

                <div class = "col-sm-3">
                 <button id="exPdf" class="btn btn-primary">Download full report in PDF</button>
                 </div>

                <div class = "col-sm-6">
                    <ol class = "breadcrumb float-sm-right">
                        <li class = "breadcrumb-item">Home</li>
                        <li class = "breadcrumb-item active">Report Managment</li>
                    </ol>
                </div>
            </div>
        </div><!--/.container-fluid-->
    </section>

    <!-- Page content -->
    <div id="exContent" class="w3-container w3-padding w3-white">

 
    <div class="text-center w3-margin-bottom">
	 	
        	
		<img src="<?php echo base_url(); ?>assets/img/logo.png"> 
        <h1>Student and registration Report</h1>
        <h4>No 26, Labuduwa Road, Karapitiya, Galle</h4>
        <h5>091 22 45 762</h5>
    </div>
 
 
    <?php 
Table::create(array(
   "dataStore"=>$this->db->query("SELECT e.student_name as sname,e.term_name as tname, r.student_gender as gender,r.student_first_name as First_Name  FROM enrollment e, registration r WHERE r.id=e.student_id")->result_array(),
   
    
        "sname"=>array(
            "top"=>"<b>{sname}</b>",
        
    ),
	
    "columns"=>array(
	
        "sname"=>array(
            "label"=>"Name"
        ),
		
        "tname"=>array(
            "label"=>"Term"
        ),
		
        "gender"=>array(
            "label"=>"Gender"
        ),
		
		 "First_Name"=>array(
            "label"=>"First Name"
        )
    ),
	
    "cssClass"=>array(
        "table"=>"table table-bordered"
    )
	
	
      
    
     
	
	
  
  
));

?>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>


$('#exPdf').click(function () {
    CreatePDFfromHTML();
});


function CreatePDFfromHTML() {
    var HTML_Width = $("#exContent").width();
    var HTML_Height = $("#exContent").height();
    var top_left_margin = 15;
    var PDF_Width = HTML_Width + (top_left_margin * 2);
    var PDF_Height = (PDF_Width * 1.5) + (top_left_margin * 2);
    var canvas_image_width = HTML_Width;
    var canvas_image_height = HTML_Height;

    var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

    html2canvas($("#exContent")[0]).then(function (canvas) {
        var imgData = canvas.toDataURL("image/jpeg", 1.0);
        var pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
        pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, canvas_image_width, canvas_image_height);
        for (var i = 1; i <= totalPDFPages; i++) { 
            pdf.addPage(PDF_Width, PDF_Height);
            pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
        }
        pdf.save("Student Master New Report.pdf");
       
    });
}


</script>



