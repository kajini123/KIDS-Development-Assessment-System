<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-navy">
    <!-- Brand Logo --><!--TGS Logo---> 
    <a href="#" class="brand-link">
        <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="Logo" class="brand-image img-circle elevation-15"
             style="opacity: .8">
        <span class="brand-text font-weight-light">
		<h3><b>Thomas Galle</b> <br><center><b>School</b></center></br></h3>
		</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url(); ?>assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Hello user</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
		<!-- Home--->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
				<!--Home icon --->	
				
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
					
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>" class="nav-link">
                                <i class="fas fa-tachometer-alt nav-icon"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                    </ul>
					
                </li>
				
								<!-- Payment Section --->
				
<?php if($this->ion_auth->in_group("admin")){ ?>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-dollar-sign"></i>
                        
                        <p>
                        Payment
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    
                    
                    
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>Registration/add_invoice_new" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>New Invoive</p>
                            </a>
                        </li>

                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>Registration/invoice" class="nav-link">
                                <i class="fas fa-bars nav-icon"></i>
                                <p>Invoice details</p>
                            </a>
                        </li>
					
						
                    </ul>
                    
                    

                </li>
				
				<?php } ?>

<?php if (($this->ion_auth->in_group("admin")) or ($this->ion_auth->in_group("members"))){ ?>				
                 <!-- Student Management Section -->
				 
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                        Student Registrations
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>Registration/add_reg" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>New Registration</p>
                            </a>
                        </li>

                    </ul>
                 
					<ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>Registration" class="nav-link">
                                <i class="fas fa-bars nav-icon"></i>
                                <p>Registration details</p>
                            </a>
                        </li>

					
                    </ul>	
					
<!--Student Enrollment----->					

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>Registration/add_enrollment" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>New Enrollment</p>
                            </a>
                        </li>

                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>Registration/enrollments" class="nav-link">
                                <i class="fas fa-bars nav-icon"></i>
                                <p>Enrollments</p>
                            </a>
                        </li>
					
					
                    </ul>
					
	</li>

<?php } ?>
					
	<!--new Weight -->
	<?php if($this->ion_auth->in_group("admin") or $this->ion_auth->in_group("parent") or $this->ion_auth->in_group("members")){ ?>				
                 <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                        Student Marks
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    
                    
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>Registration/add_weight" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>New Marks</p>
                            </a>
                        </li>

                    </ul>

                    
                    
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>Registration/weights" class="nav-link">
                                <i class="fas fa-bars nav-icon"></i>
                                <p>Marks details</p>
                            </a>
                        </li>

                    </ul>
					
				
						

                </li>
				
				<?php } ?>
				

					<?php if($this->ion_auth->in_group("admin") or $this->ion_auth->in_group("members") or $this->ion_auth->in_group("Parent")){ ?>	
					
					<li class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>Registration/showRank" class="nav-link">
                                <i class="fas fa-eye nav-icon"></i>
                                <p>View Rank</p>
                            </a>
                        </li>

					
                    </li>
				
				<?php } ?>
                   <!--Report Management Section -->
				   
				   <?php if (($this->ion_auth->in_group("admin")) or ($this->ion_auth->in_group("members"))){ ?>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-file-alt"></i>
                        
                        <p>
                        Reports
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    
                    
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>Registration/student_master_view" class="nav-link">
                                <i class="fas fa-file-alt nav-icon"></i>
                                <p>Student Master Report</p>
                            </a>
                        </li>

                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>Registration/student_assesment_view" class="nav-link">
                                <i class="fas fa-file-alt nav-icon"></i>
                                <p>StudentAssesmentReport</p>
                            </a>
                        </li>

                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>Registration/student_rankings_view" class="nav-link">
                                <i class="fas fa-file-alt nav-icon"></i>
                                <p>Student Ranking Report</p>
                            </a>
                        </li>

                    </ul>

					 <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>Registration/student_invoice_view" class="nav-link">
                                <i class="fas fa-file-alt nav-icon"></i>
                                <p>Invoice Details Report</p>
                            </a>
                        </li>

                    </ul>
					
					<ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>Registration/student_masternew_view" class="nav-link">
                                <i class="fas fa-file-alt nav-icon"></i>
                                <p>Student and registration Report</p>
                            </a>
                        </li>

                    </ul> 

                
                </li>
				
				<?php } ?>

                <!-- Core Data Management Section -->
				
				  <?php if (($this->ion_auth->in_group("admin")) or ($this->ion_auth->in_group("members"))){ ?>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-database"></i>
                        
                        <p>
                        Terms and Assessments
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    
                    
                    
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>Registration/terms" class="nav-link">
                                <i class="fas fa-bars nav-icon"></i>
                                <p>Terms Data</p>
                            </a>
                        </li>

                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>Registration/Weight_data" class="nav-link">
                                <i class="fas fa-bars nav-icon"></i>
                                <p>Assessment Data</p>
                            </a>
                        </li>

                    </ul>
                    
                    

                </li>
				
				<?php } ?>

			<!-----System Setting------>
<?php if($this->ion_auth->in_group("admin")){ ?>

<li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            System Settings
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

						
						
						<li class="nav-item">
                            <a href="<?php echo base_url(); ?>auth/create_user" class="nav-link">
                                <i class="fas fa-user-plus nav-icon"></i>
                                <p>Create System User</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>systemusers" class="nav-link">
                                <i class="fas fa-bars nav-icon"></i>
                                <p>System User List</p>
                            </a>
                        </li>
							
						

                       
                    </ul>
                </li>
                
<?php } ?>
                

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>