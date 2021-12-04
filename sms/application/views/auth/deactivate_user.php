
<?php
$this->load->view('templates/header');
$this->load->view('templates/nav');
$this->load->view('templates/sidebar');
?>

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
                    <h1>Deactivate User</h1>
                </div>
                <div class = "col-sm-6">
                    <ol class = "breadcrumb float-sm-right">
                        <li class = "breadcrumb-item">Manage System</li>
                        <li class = "breadcrumb-item active">Edit User</li>
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

                            <p><?php echo sprintf(lang('deactivate_subheading'), $user->{$identity}); ?></p>

                            <?php echo form_open("auth/deactivate/" . $user->id); ?>

                            <div class="form-group">
                                <?php echo lang('deactivate_confirm_y_label', 'confirm'); ?>
                                <input type="radio" name="confirm" value="yes" checked="checked" />
                                <?php echo lang('deactivate_confirm_n_label', 'confirm'); ?>
                                <input type="radio" name="confirm" value="no" />
                            </div>

                            <?php echo form_hidden($csrf); ?>
                            <?php echo form_hidden(['id' => $user->id]); ?>

                            <div class="form-group"><?php
                                echo form_submit(
                                        array(
                                            'type' => 'submit',
                                            'name' => 'submit',
                                            'value' => lang('deactivate_submit_btn'),
                                            'class' => 'btn btn-secondary btn-success'
                                ));
                                ?></div>

                            <?php echo form_close(); ?>




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

<?php
$this->load->view('templates/settings');
$this->load->view('templates/footer');
?>