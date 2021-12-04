<?php foreach ($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class = "content-header">
        <div class = "container-fluid">
            <div class = "row mb-2">
                <div class = "col-sm-6">
                    <h4>Weights Management</h4>
                </div>
                <div class = "col-sm-6">
                    <ol class = "breadcrumb float-sm-right">
                        <li class = "breadcrumb-item">Home</li>
                        <li class = "breadcrumb-item active">Weights Managment</li>
                    </ol>
                </div>
            </div>
        </div><!--/.container-fluid-->
    </section>

    <!-- Page content -->
    <div class="w3-container w3-padding w3-white">
	
	
	<?php if($this->session->flashdata('flashok')){ ?>

<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Success!</strong> <?php echo $this->session->flashdata('flashok'); ?>.
</div>

<?php } ?>


<?php if($this->session->flashdata('flasherror')){ ?>


<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Warning!</strong> <?php echo $this->session->flashdata('flasherror'); ?>.
</div>

<?php } ?>


        <?php echo $output; ?>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php foreach ($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>

