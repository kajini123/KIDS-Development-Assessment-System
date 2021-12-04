<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/grocery_crud/themes/bootstrap/css/bootstrap/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/grocery_crud/themes/bootstrap/css/elusive-icons/css/elusive-icons.min.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/grocery_crud/themes/bootstrap/css/common.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/grocery_crud/themes/bootstrap/css/general.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/grocery_crud/themes/bootstrap/css/add-edit-form.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/grocery_crud/themes/bootstrap/css/main.css" />

<Style>

.body-main {
     background: #ffffff;
     border: 1px solid #C0C0C0;
     margin-top: 30px;
     margin-bottom: 30px;
     padding: 40px 30px !important;
     position: relative;
     
     font-size: 10px
 }

 .main thead {
     background: #1E1F23;
     color: #fff
 }

 .img {
     height: 100px
 }

 h1 {
     text-align: center
 }

</Style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">



    <section class = "content-header">
        <div class = "container-fluid">
            <div class = "row mb-2">
                <div class = "col-sm-6">
                <button id="exPdf" class="btn btn-primary">Download full report in PDF</button>
                </div>
                <div class = "col-sm-6">
                    <ol class = "breadcrumb float-sm-right">
                        <li class = "breadcrumb-item">Payment Managment</li>
                        <li class = "breadcrumb-item active">View Invoice</li>
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
                        
                    <div class="container">

    <div id="exContent" class="container">
        <div class="row">
            <div class="col-md-12 body-main">
                <div class="col-md-12">
				
                    <div class="row">
                        <div class="col-md-4"> 
                            
                        <img class="img" src="<?php echo base_url(); ?>assets/img/logo.png" /> 

                        <div><strong>Thomas Galle School</strong></div>
						<div><strong>No 26, Labuduwa Road, Karapitiya, Galle</strong></div>
						<div>091 22 45 762</div>
                    
                    </div>
					
                        <div class="col-md-8 text-right">
                            <h4 style="color: #F81D2D;">
                            <strong><?php echo $data->student_name ?></strong></h4>
                            <div><b>Date :</b> <?php echo date('Y-m-d');?></div>
                            <div><b>Method :</b> Cash</div> <br />
							<strong><?php echo $data->semestername ?></strong></h4><br></br>
							<strong><?php echo $data->year ?></strong></h4>
							
							
                                                       
                        </div>
						
                    </div> <br />
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>INVOICE</h2>
                            <h7><b>Referance Number:</b><?php echo $data->ref_number ?></h7>
                        </div>
                    </div> <br />
                    <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <h5>Description</h5>
                                    </th>
                                    <th>
                                        <h5>Amount</h5>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col-md-8">Student Registration Fee - Ref ( <?php echo $data->ref_number ?> )</td>
                                    <td class="col-md-3"><?php echo number_format($data->paid,2) ?> </td>
                                </tr>
                                
                                    <td class="text-right">
                                        
                                        <p> <strong>Total Amount(Rs): </strong> </p>
                                        
                                    </td>
                                    <td>
                                        
                                        <p> <strong><?php echo number_format($data->paid,2) ?></strong> </p>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <div class="col-md-12">
					<p><b>............................</b></p>
                            <p><b>Signature</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        pdf.save("Invoice.pdf");
       
    });
}


</script>



