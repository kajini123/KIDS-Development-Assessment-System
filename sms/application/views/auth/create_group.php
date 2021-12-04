<?php $this->view('templates/header'); ?>
<?php $this->view('templates/nav'); ?>
<?php $this->view('templates/sidebar'); ?>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class = "content-header">
        <div class = "container-fluid">
            <div class = "row mb-2">
                <div class = "col-sm-6">
                    <h1>Manage Roles</h1>
                </div>
                <div class = "col-sm-6">
                    <ol class = "breadcrumb float-sm-right">
                        <li class = "breadcrumb-item">Home</li>
                        <li class = "breadcrumb-item active">Roles</li>
                    </ol>
                </div>
            </div>
        </div><!--/.container-fluid-->
    </section>

    <!-- Page content -->
    <div class="w3-container w3-padding w3-white">

<h1><?php echo lang('create_group_heading');?></h1>
<p><?php echo lang('create_group_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_group");?>

      <p>
            <?php echo lang('create_group_name_label', 'group_name');?> <br />
            <?php echo form_input($group_name);?>
      </p>

      <p>
            <?php echo lang('create_group_desc_label', 'description');?> <br />
            <?php echo form_input($description);?>
      </p>

      <p><?php echo form_submit('submit', lang('create_group_submit_btn'));?></p>

<?php echo form_close();?>

</div>
    <!-- /.content -->
</div>

<?php $this->view('templates/settings'); ?>
<?php $this->view('templates/footer'); ?>