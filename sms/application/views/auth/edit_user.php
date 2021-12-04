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
                    <h1>Edit User</h1>
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

                            <?php echo form_open(uri_string()); ?>

                            <div class="form-group">
                                <?php echo lang('edit_user_fname_label', 'first_name'); ?> <br />

                                <?php
                                echo form_input(array(
                                    'type' => 'text',
                                    'name' => 'first_name',
                                    'id' => 'first_name',
                                    'value' => $user->first_name,
                                    'required' => 'true',
                                    'class' => 'form-control'
                                ));
                                ?>
                            </div>

                            <div class="form-group">
                                <?php echo lang('edit_user_lname_label', 'last_name'); ?> <br />
                                <?php
                                echo form_input(array(
                                    'type' => 'text',
                                    'name' => 'last_name',
                                    'id' => 'last_name',
                                    'value' => $user->last_name,
                                    'required' => 'true',
                                    'class' => 'form-control'
                                ));
                                ?>
                            </div>

                            <div class="form-group">
                                <?php echo lang('edit_user_company_label', 'company'); ?> <br />
                                <?php
                                echo form_input(array(
                                    'type' => 'text',
                                    'name' => 'company',
                                    'id' => 'company',
                                    'value' => $user->company,
                                    'required' => 'true',
                                    'class' => 'form-control'
                                ));
                                ?>
                            </div>

                            <div class="form-group">
                                <?php echo lang('edit_user_phone_label', 'phone'); ?> <br />
                                <?php
                                echo form_input(array(
                                    'type' => 'text',
                                    'name' => 'phone',
                                    'id' => 'phone',
                                    'value' => $user->phone,
                                    'required' => 'true',
                                    'class' => 'form-control'
                                ));
                                ?>
                            </div>

                            <div class="form-group">
                               
                                <?php
                                echo form_input(array(
                                    'type' => 'password',
                                    'name' => 'password',
                                    'hidden' => true,
                                    'id' => 'password',
                                    'class' => 'form-control'
                                ));
                                ?>
                            </div>

                            <div class="form-group">
                                
                                <?php
                                echo form_input(array(
                                    'type' => 'password',
                                    'name' => 'password_confirm',
                                    'hidden' => true,
                                    'id' => 'password_confirm',
                                    'class' => 'form-control'
                                ));
                                ?>
                            </div>

                            <div class="form-group w3-margin-top">
                                <?php if ($this->ion_auth->is_admin()): ?>

                                    <h3><?php echo lang('edit_user_groups_heading'); ?></h3>
                                    <?php foreach ($groups as $group): ?>
                                        <label class="checkbox">
                                            <input type="checkbox" name="groups[]" value="<?php echo $group['id']; ?>" <?php echo (in_array($group, $currentGroups)) ? 'checked="checked"' : null; ?>>
                                            <?php echo htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8'); ?>
                                        </label>
                                    <?php endforeach ?>

                                <?php endif ?>

                            </div>

                            <?php echo form_hidden('id', $user->id); ?>
                            <?php echo form_hidden($csrf); ?>

                            <div class="form-group">

                                <?php
                                echo form_submit(array(
                                    'type' => 'submit',
                                    'name' => 'submit',
                                    'value' => lang('edit_user_submit_btn'),
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