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
                    <h1>Create User</h1>
                </div>
                <div class = "col-sm-6">
                    <ol class = "breadcrumb float-sm-right">
                        <li class = "breadcrumb-item">Manage System</li>
                        <li class = "breadcrumb-item active">Create User</li>
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

                            <?php echo form_open("auth/create_user"); ?>

                            <div class="form-group">
                                <?php echo lang('create_user_fname_label', 'first_name'); ?> <br />
                                <?php
                                echo form_input(array(
                                    'type' => 'text',
                                    'name' => 'first_name',
                                    'id' => 'first_name',
                                    'required' => 'true',
                                    'class' => 'form-control'
                                ));
                                ?>
                            </div>

                            <div class="form-group">
                                <?php echo lang('create_user_lname_label', 'last_name'); ?> <br />
                                <?php
                                echo form_input(array(
                                    'type' => 'text',
                                    'name' => 'last_name',
                                    'id' => 'last_name',
                                    'required' => 'true',
                                    'class' => 'form-control'
                                ));
                                ?>
                            </div>

                            <div class="form-group">
                                <?php
                                if ($identity_column !== 'email') {
                                    echo '<p>';
                                    echo lang('create_user_identity_label', 'identity');
                                    echo '<br />';
                                    echo form_error('identity');
                                    echo form_input(array(
                                        'type' => 'text',
                                        'name' => 'identity',
                                        'id' => 'identity',
                                        'required' => 'true',
                                        'class' => 'form-control'
                                    ));
                                    echo '</p>';
                                }
                                ?>

                            </div>
							

                            <div class="form-group">
                                <?php echo lang('create_user_company_label', 'company'); ?> <br />
                                <?php
                                echo form_input(array(
                                    'type' => 'text',
                                    'name' => 'company',
                                    'id' => 'company',
                                    'required' => 'true',
                                    'class' => 'form-control'
                                ));
                                ?>

                            </div>

                            <div class="form-group">
                                <?php echo lang('create_user_email_label', 'email'); ?> <br />
                                <?php
                                echo form_input(array(
                                    'type' => 'text',
                                    'name' => 'email',
                                    'id' => 'email',
                                    'required' => 'true',
                                    'class' => 'form-control'
                                ));
                                ?>

                            </div>

                            <div class="form-group">
                                <?php echo lang('create_user_phone_label', 'phone'); ?> <br />
                                <?php
                                echo form_input(array(
                                    'type' => 'text',
                                    'name' => 'phone',
                                    'id' => 'phone',
                                    'required' => 'false',
                                    'class' => 'form-control'
                                ));
                                ?>

                            </div>
						
                            <div class="form-group">
                                <?php echo lang('create_user_password_label', 'password'); ?> <br />
                                <?php
                                echo form_input(array(
                                    'type' => 'password',
                                    'name' => 'password',
                                    'id' => 'password',
                                    'required' => 'true',
                                    'class' => 'form-control'
                                ));
                                ?>  

                            </div>

                            <div class="form-group">
                                <?php echo lang('create_user_password_confirm_label', 'password_confirm'); ?> <br />
                                <?php
                                echo form_input(array(
                                    'type' => 'password',
                                    'name' => 'password_confirm',
                                    'id' => 'password_confirm',
                                    'required' => 'true',
                                    'class' => 'form-control'
                                ));
                                ?>

                            </div>


                            <div class="form-group">

                                <?php
                                echo form_submit(
                                        array(
                                            'type' => 'submit',
                                            'name' => 'submit',
                                            'value' => lang('create_user_submit_btn'),
                                            'class' => 'btn btn-secondary btn-success'
                                ));
                                ?>

                            </div>

                            <?php echo form_close(); ?>




                            <div id="infoMessage"><?php echo $message; ?></div>

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
