<?php
use \koolreport\widgets\google\ColumnChart;
use \koolreport\widgets\google\LineChart;
use \koolreport\widgets\google\ComboChart;


defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

    function __construct() {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        }
    }
	
	/*---------------------------------------Add invoice-------------------------------*/

   

    public function add_invoice_new() {
				


        
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('templates/sidebar');
        $this->load->view('registration/add_invoice_new');
        $this->load->view('templates/settings');
        $this->load->view('templates/footer');
    }
	
	/*--------------------------------------- Add invoice entry------------------------*/


	public function add_invoice_entry_new() {


    $this->form_validation->set_rules('studentName', 'Student Name', 'trim|required');
    $this->form_validation->set_rules('studentPaid', 'Paid Amount', 'trim|required|numeric');
	// $this->form_validation->set_rules('year', 'year', 'trim|required');
	//  $this->form_validation->set_rules('semestername', 'semestername', 'trim|required|');
   

	

    if ($this->form_validation->run() === TRUE) {


        $studentName = $this->input->post('studentName');
        $studentRef = $this->input->post('refNumber');
        $studentPaid = $this->input->post('studentPaid');
		$Remarks = $this->input->post('Remarks');
		$year = $this->input->post('year');
        $semestername = $this->input->post('semestername');
    
        $db = new Invoice_model;
        $db->ref_number = $studentRef;
        $db->student_name = $studentName;
        $db->paid = $studentPaid;
		$db->Remarks = $Remarks;
		$db->semestername = $semestername;
		$db->year = $year;
		
       
        
        $db->save();
    
        $this->session->set_flashdata('message', '');

        $data['data']=$db;
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('templates/sidebar');
        $this->load->view('registration/view_invoice_new',$data);
        $this->load->view('templates/settings');
        $this->load->view('templates/footer');


    }else{

        $this->session->set_flashdata('message', validation_errors());
        redirect('Registration/add_invoice_entry_new');

    }

}
	
	/*---------------------------------------Invoice-------------------------------------------*/

    public function invoice() {

        try {
            $crud = new grocery_CRUD();
            $crud->set_table('invoice');
            $crud->columns(
                'ref_number',
                'student_name',
                'paid',
                'created_at'
            );
            $crud->display_as('ref_number', 'Referance Number');
            $crud->display_as('student_name', 'Student Name');
            $crud->display_as('paid', 'Paid Amount');
            $crud->display_as('created_at', 'Created At');
			$crud->display_as('Payment_Mode','Payment Mode');
			$crud->display_as('semestername','Payment Mode');
            
            //$crud->add_action($this->lang->line('Edit'), '', 'Registration/edit_weight', 'far fa-edit');

            //Validations
            
            $crud->set_rules('student_name', 'Student Name','required');
			$crud->set_rules('paid', 'Paid','required');
			$crud->set_rules('Payment_Mode','Payment Mode','required');
			$crud->set_rules('Remarks','Remarks','required');
			$crud->set_rules('semestername','semestername','required');
			
			$crud->unique_fields(array('Remarks','paid'));				
            
            $crud->unset_add();
            $crud->unset_delete();
            $crud->unset_edit();
            $crud->unset_clone();
            //$crud->unset_read();
            $crud->set_subject('Invoice');
            $output = $crud->render();
			
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }

        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('templates/sidebar');
        $this->load->view('registration/invoices', $output);
        $this->load->view('templates/settings');
        $this->load->view('templates/footer');
    }

    /*.................................. Registration.......................................................................*/
	
    public function index() {

        try {
            $crud = new grocery_CRUD();
            $crud->set_table('registration');
          //  $crud->set_model('Registration_select_model');
            $crud->columns(
				'id',
                'student_first_name',
                'student_gender', 
                'student_dob',
                'student_doe',
				'Nationality',
				
            );
			$crud->display_as('id', 'Student ID');
            $crud->display_as('student_first_name', 'Name');
		
            
			$crud->display_as('student_gender', 'Gender');
            $crud->display_as('student_dob', 'Date of Birth');
            $crud->display_as('student_doe', 'Date of Enrollment');
			//Nationality
			$crud->display_as('Nationality', 'Nationality');		
          /*$crud->display_as('student_age', 'Age'); */
            $crud->display_as('student_home_address', 'Home Address');
            $crud->display_as('student_father_name', 'Father\'s Name');
            $crud->display_as('student_father_job', 'Father\'s Occupation');
            $crud->display_as('student_father_mobile', 'Father\'s Mobile');
            $crud->display_as('student_father_office_number', 'Father\'s Office Number');
            $crud->display_as('student_father_email', 'Father\'s Email');
            $crud->display_as('student_mother_name', 'Mother\'s Name');
            $crud->display_as('student_mother_job', 'Mother\'s Occupation');
            $crud->display_as('student_mother_mobile', 'Mother\'s Mobile');
            $crud->display_as('student_mother_office_number', 'Mother\'s Office Number');  
            $crud->display_as('student_mother_email', 'Mother\'s Emails'); 
			$crud->display_as('Emergency_No', 'Emergency Contact Number');
			//display field as nationality
			$crud->display_as('Nationality','Nationality');
		          

            	//display 
			$crud->fields(
                'student_first_name', 
                'student_last_name', 
                'student_gender', 
                'student_dob', 
           /*   'student_age', */
                'student_home_address', 
                'student_doe', 
                'student_father_name', 
                'student_father_job', 
                'student_father_mobile', 
                'student_father_office_number', 
                'student_father_email', 
                'student_mother_name', 
                'student_mother_job', 
                'student_mother_mobile', 
                'student_mother_office_number', 
                'student_mother_email',
				'Emergency_No',
				'Nationality',
						
			);
			
            
            $crud->unset_add();
            // $crud->unset_delete();
            $crud->unset_edit();
            $crud->unset_clone();
            //$crud->unset_read();
            $crud->set_subject('Registrations');
            $output = $crud->render();
			
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }

        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('templates/sidebar');
        $this->load->view('registration/index', $output);
        $this->load->view('templates/settings');
        $this->load->view('templates/footer');
    }


    public function add_reg() {

		
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('templates/sidebar');
        $this->load->view('registration/add_reg');
        $this->load->view('templates/settings');
        $this->load->view('templates/footer');
    }

    public function add_reg_entry() {
		
       $this->form_validation->set_rules('student_first_name', 'First Name','required');
       $this->form_validation->set_rules('student_gender', 'Gender','required');
       $this->form_validation->set_rules('student_dob', 'Date of Birth','required');
       $this->form_validation->set_rules('student_doe', 'Date of Enrollment','required');
       $this->form_validation->set_rules('student_home_address', 'Home Address','required');
       $this->form_validation->set_rules('student_father_name', 'Father\'s Name','required');
       $this->form_validation->set_rules('student_father_job', 'Father\'s Occupation');
       $this->form_validation->set_rules('student_father_mobile', 'Father\'s Mobile','required|numeric|min_length[10]|max_length[13]');
       $this->form_validation->set_rules('student_father_office_number', 'Father\'s Office Number','required|numeric|min_length[10]|max_length[13]');
       $this->form_validation->set_rules('student_father_email', 'Father\'s Email','required|valid_email');		 
       $this->form_validation->set_rules('student_mother_name', 'Mother\'s Name','required');
       $this->form_validation->set_rules('student_mother_job', 'Mother\'s Occupation');
       $this->form_validation->set_rules('student_mother_mobile', 'Mother\'s Mobile','min_length[10]|max_length[13]');
       $this->form_validation->set_rules('student_mother_office_number', 'Mother\'s Office Number','required|numeric|min_length[10]|max_length[13]');
       $this->form_validation->set_rules('student_mother_email', 'Mother\'s Email','required|valid_email');
       $this->form_validation->set_rules('Emergency_No', 'Emergency Contact Number','required|numeric|min_length[10]|max_length[13]');
			$this->form_validation->set_rules('Nationality', 'Nationality','required');
		
    
        if ($this->form_validation->run() === TRUE) {
                
        
            $db = new Registration_model;
            $db->student_first_name = $this->input->post('student_first_name');
            $db->student_gender = $this->input->post('student_gender');
            $db->student_dob = $this->input->post('student_dob');
            $db->student_doe = $this->input->post('student_doe');
            $db->student_home_address = $this->input->post('student_home_address');
            $db->student_father_name = $this->input->post('student_father_name');
            $db->student_father_job = $this->input->post('student_father_job');
            $db->student_father_mobile = $this->input->post('student_father_mobile');
            $db->student_father_office_number = $this->input->post('student_father_office_number');
            $db->student_father_email = $this->input->post('student_father_email');
            $db->student_mother_name = $this->input->post('student_mother_name');
            $db->student_mother_job = $this->input->post('student_mother_job');
            $db->student_mother_mobile = $this->input->post('student_mother_mobile');
            $db->student_mother_office_number = $this->input->post('student_mother_office_number');
            $db->student_mother_email = $this->input->post('student_mother_email');
            $db->Emergency_No = $this->input->post('Emergency_No');
			$db->Nationality = $this->input->post('Nationality');
            
            $db->save();
        
            $this->session->set_flashdata('message', '');
            redirect('Registration');
    
    
        }else{
    
            $this->session->set_flashdata('message', validation_errors());
            redirect('Registration/add_reg');
    
        }
    
    }

 /*------------------------------------------get referance number --------------------*/
 
    public function getRef($id){
        $ref = $this->Invoice_model->findOne(['ref_number' => $id])->student_name;
        echo $ref;
    }

 /*------------------------------------------add Enrollment --------------------*/

    public function add_enrollment() {

        $reg_data = $this->Registration_model->findAll();
		$data['reg_data']=$reg_data;

        $term_data = $this->Termgoals_model->findAll();
		$data['term_data']=$term_data;

        $ages = array();
        $ids = array();

        foreach ($reg_data as $record) {

            $dob = strtotime($record->toArray()['student_dob']);
            $doe = strtotime($record->toArray()['student_doe']);


            $ages[''.$record->toArray()['id'].''] = $record->toArray()['id'];
            $ages[''.$record->toArray()['id'].''] = ($doe-$dob);

        }

        $data['ages'] = $ages;
        $data['ids'] = $ids;

        $data['sAge'] = null;
        $data['sId'] = null;
        $data['frmId'] = null;

        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('templates/sidebar');
        $this->load->view('registration/add_enrollment',$data);
        $this->load->view('templates/settings');
        $this->load->view('templates/footer');
    }
	
	
/*---------------------------------------- Add enrollment entry---------------------------*/

    public function add_enrollment_entry() {
    
        $this->form_validation->set_rules('studentName', 'Student Name', 'trim|required');
        $this->form_validation->set_rules('studentId', 'Student ID', 'trim|required');
        $this->form_validation->set_rules('studentAge', 'Student Age', 'trim|required|numeric');
        $this->form_validation->set_rules('studentTerm', 'Student Term', 'trim|required');

        if ($this->form_validation->run() === TRUE) {



        $studentFormId = $this->input->post('studentId');
        $studentAge = $this->input->post('studentAge');
        $studentTerm = $this->input->post('studentTerm');
        $studentName = $this->input->post('studentName');

		
		
        if($studentName==null || $studentName=='Select'){

            $this->session->set_flashdata('message', 'Select a Student Name');
            redirect('Registration/add_enrollment');

        }else if($studentTerm==null || $studentTerm=='Select'){

            $this->session->set_flashdata('message', 'Select a Student Term');
            redirect('Registration/add_enrollment');
    
        }else{
        
        $studentRecord = $this->Registration_model->findOne($studentName);
        $termRecord = $this->Termgoals_model->findOne($studentTerm);

		
		
        $db = new Enrollment_model;
        $db->student_form_id = $studentFormId;
        $db->student_id = $studentName;
        $db->term_id = $studentTerm;
        $db->student_name = $studentRecord->student_first_name." ".$studentRecord->student_middle_name." ".$studentRecord->student_last_name;
        $db->term_name = $termRecord->name;
        $db->age = $studentAge;

        $activeRecord = $this->Enrollment_model->findOne(['student_id' => $studentName,'term_id' => $studentTerm]);


        if($activeRecord->student_id == $studentName){
            $this->session->set_flashdata('message', 'Already enrolled');
            redirect('Registration/add_enrollment');

        }else{
            $db->save();
            
            redirect('Registration/enrollments');
        }

        
            }

        }else{
            $this->session->set_flashdata('message', validation_errors());
            redirect('Registration/add_enrollment');
            
        }

    }

/*--------------------------Enrollment---------------------------*/

    public function enrollments() {

        try {
            $crud = new grocery_CRUD();
            $crud->set_table('enrollment');
            $crud->columns(
                'student_name',
                'term_name',
                'age',
                'created_at'
            );
            $crud->display_as('student_name', 'Student Name');
            $crud->display_as('term_name', 'Term');
            $crud->display_as('age', 'Age');
            $crud->display_as('created_at', 'Created At');
            
            //$crud->add_action($this->lang->line('Edit'), '', 'Registration/edit_enrollment', 'far fa-edit');
           
            //Validations
            $crud->set_rules('student_name', 'Student Name','required');
			$crud->set_rules('term_name', 'Trem','required');
            $crud->set_rules('age', 'Age','required|numeric');
            
			
            
            $crud->unset_add();
            // $crud->unset_delete();
            $crud->unset_edit();
            $crud->unset_clone();
            $crud->unset_read();
            $crud->set_subject('Enrollment');
            $output = $crud->render();
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }

        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('templates/sidebar');
        $this->load->view('registration/enrollment', $output);
        $this->load->view('templates/settings');
        $this->load->view('templates/footer');
    }


/*--------------------------change password -----------------*/

    public function chg_password_index(){

        

        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('templates/sidebar');
        $this->load->view('registration/chg_password');
        $this->load->view('templates/settings');
        $this->load->view('templates/footer');
    
    }

    public function chg_password() {

       
        $this->form_validation->set_rules('newPassword', 'New password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|matches[confirmPassword]');
        $this->form_validation->set_rules('confirmPassword', 'Confirm password', 'required');
        

        if ($this->form_validation->run() === TRUE) {
    $data = array(
          'password' => $this->input->post('newPassword'),
           );
    $this->ion_auth->update($this->session->userdata('user_id'), $data);

   

        redirect('auth/logout');

        }else{

            $this->session->set_flashdata('message', validation_errors());
            redirect('registration/chg_password_index');
        }
    
    }

 /* ........................................................Assesement data............................................*/
 
    public function Weight_data() {

        try {
            $crud = new grocery_CRUD();
            $crud->set_table('weightdata');
            $crud->columns(
                'term_name',
                'name',
                'created_at'
            );
            $crud->order_by('term_name');

			$crud->display_as('term_name', 'Term Name');
			$crud->display_as('name', 'Assesement Data');
            $crud->display_as('created_at', 'Created At');

            //Validations
            $crud->set_rules('name', 'Assessment Data','required');
                     
			$crud->edit_fields(
			    'term_name',
                'name'			
			);
					
			$crud->fields(
			    'term_name',
                'name'				    
			);
			
			// select the term from termgoals table for display Terms

            $crud->callback_add_field('term_name',function () {

                $term_data = $this->Termgoals_model->findAll();
		        
                $dataOut = '<select class="form-control" name="term_name">';

                foreach ($term_data as $record) {
                            
                    $term_id = $record->toArray()['id'];
                    $term_name = $record->toArray()['name'];
                    
                    $dataOut .= '<option value="'.$term_name.'" >'.$term_name.'</option>';

                }

                $dataOut .= "</select>";

                return $dataOut;
          
                  
              });


              $crud->callback_edit_field('term_name',function ($value, $primary_key) {
				  
                $term_data = $this->Termgoals_model->findAll();
		        
                $dataOut = '<select class="form-control" name="term_name">';

                foreach ($term_data as $record) {
                            
                    $term_id = $record->toArray()['id'];
                    $term_name = $record->toArray()['name'];
                    
                    $dataOut .= '<option value="'.$term_id.'" >'.$term_name.'</option>';

                }

                $dataOut .= "</select>";

                return $dataOut;
            });
			
            
            // $crud->unset_add();
            // $crud->unset_delete();
            // $crud->unset_edit();
            $crud->unset_clone();
            $crud->unset_read();
            $crud->set_subject('Assesment');
            $output = $crud->render();
			
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }

        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('templates/sidebar');
        $this->load->view('registration/weight_data', $output);
        $this->load->view('templates/settings');
        $this->load->view('templates/footer');
    }

/*--------------------------- Term Data----------------------------------------------------------*/
/*Data Create/ Read/ Update/Delete to the data base-----------------------------------------------*/

    public function terms() {

        try {
            $crud = new grocery_CRUD();
            $crud->set_table('termgoals');
            $crud->columns(
                'name',
				'term_fee',				
                'created_at'
            );
            $crud->display_as('name', 'Term');			
			$crud->display_as('term_fee', 'Term Fee');
            $crud->display_as('created_at', 'Created At');
			
			
            
            //Validations
            $this->form_validation->set_rules('studentPaid', 'Paid Amount', 'trim|required|numeric');
            $crud->set_rules('name', 'Term','required');
			
			$crud->set_rules('term_fee','Term Fee','required|numeric');
            
			//edit Field
			$crud->edit_fields(
                'name',
				'term_fee'
			);

            
			// dislay fields
			$crud->fields(
                'name',
				'term_fee'               
			);
			
            
            // $crud->unset_add();
            // $crud->unset_delete(); 
            // $crud->unset_edit();
            $crud->unset_clone();
            $crud->unset_read();
            $crud->set_subject('Term');
            $output = $crud->render();
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }

        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('templates/sidebar');
        $this->load->view('registration/terms', $output);
        $this->load->view('templates/settings');
        $this->load->view('templates/footer');
    }
/*----------------------------Weight----------------------------------*/

    public function weights() {

        try {
            $crud = new grocery_CRUD();
            $crud->set_table('weights');
            $crud->columns(
                'term_name',
                'student_name',
                'weight_name',
                'weight',
                'created_at'
            );
            $crud->display_as('student_name', 'Student Name');
            $crud->display_as('term_name', 'Term');
            $crud->display_as('weight_name', 'Weight Type');
            $crud->display_as('weight', 'Weight');
            $crud->display_as('created_at', 'Created At');
            
         // $crud->add_action('AAA', '', 'Registration/test_action', 'far fa-edit');
		//	$crud->add_action('BBB', '', 'Registration/test_action', 'far fa-edit');
           
            //Validations
            $crud->set_rules('student_name', 'Student Name','required');
			$crud->set_rules('term_name', 'Trem','required');
            $crud->set_rules('weight_name', 'Weight Type','required');
            $crud->set_rules('weight', 'Weight','required|numeric|min_length[1]|max_length[2]');

            $crud->unique_fields(array('term_name','student_name','weight_name'));
            
            $crud->unset_add();
            // $crud->unset_delete();
            $crud->unset_edit();
            $crud->unset_clone();
            $crud->unset_read();
            $crud->set_subject('Weight');
            $output = $crud->render();
			
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }

        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('templates/sidebar');
        $this->load->view('registration/weight', $output);
        $this->load->view('templates/settings');
        $this->load->view('templates/footer');
    }



/*----------------------------------------Get Age-----------------------------------*/

    

    public function getAge($id){
        $record = $this->Registration_model->findOne($id);
        $dob = strtotime($record->student_dob);
        $doe = strtotime($record->student_doe);
        $diff = abs($doe - $dob);
        $years = floor($diff / (365*60*60*24));
        echo number_format($years, 0, '.', "");
    }

/*----------------------------------------Show Rank--------------------------------*/

    public function showRank(){
        $termRecord = $this->Termgoals_model->findAll();
        $data['term_data']=$termRecord;

        $reg_data = $this->Registration_model->findAll();
		$data['reg_data']=$reg_data;
		

        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('templates/sidebar');
        $this->load->view('registration/view_rank',$data);
        $this->load->view('templates/settings');
        $this->load->view('templates/footer');
    }



/*----------------------------------------get student Rank--------------------------------*/

    public function getStudentRank($id,$term){
        $data = $this->Weights_model->findAll(['student_id' => $id, 'term_id' => $term]);
        $rank = 0;
        foreach ($data as $record) {
                            
            $rank = intval($rank + $record->toArray()['weight']);

        }

			
       if(intval($rank) > 40){

            echo 'Exceeding Expectation';

        } else if(intval($rank) > 20){

            echo 'Meet Expectation';

        } else if(intval($rank) > 0){

            echo 'Emerging';

        } else{

            echo 'Error';
        }

    }

/*----------------------------------------dislay student due--------------------------------*/

public function getDue($id){
    $student_data = $this->Enrollment_model->findOne(['student_id' => $id]);
    $student_payments = $this->Invoices_model->findAll(['student_id' => $id]);
    $paid = 0;

    foreach ($student_payments as $record) {
                            
        $paid = $paid + intval($record->toArray()['paid']); 

    }


    $term_fee = $this->Termgoals_model->findOne(['name' => $student_data->term_name])->term_fee;

    echo intval($term_fee-$paid);;
}
	

/*-------------- Add weight----------------------------------*/


    public function add_weight() {

        $reg_data = $this->Registration_model->findAll();
		$data['reg_data']=$reg_data;

        $term_data = $this->Termgoals_model->findAll();
		$data['term_data']=$term_data;

        
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('templates/sidebar');
        $this->load->view('registration/add_weight',$data);
        $this->load->view('templates/settings');
        $this->load->view('templates/footer');
    }

/*-------------------------------------Display Graph-----------------------------*/


public function getChart($id){
    
    echo ComboChart::create(array(
        "title"=>"Student total weight achievement by Terms",
        "dataSource"=>$this->db->query("SELECT term_name , sum(weight) as weight FROM weights WHERE `student_id` = '".$id."'GROUP by `term_name`")->result_array(),
        "columns"=>array(
            "term_name",
            "weight"=>array("label"=>"Total Weight","type"=>"number"),
            
        ),
       
    ));

}


public function getEnrollmentChart(){
    
    echo LineChart::create(array(
        "title"=>"Student total enrollemnts by Terms",
        "dataSource"=>$this->db->query("SELECT term_name , count(*) as cnt FROM enrollment GROUP by `term_name`")->result_array(),
        "columns"=>array(
            "term_name",
            "cnt"=>array("label"=>"Total Enrollments","type"=>"number"),
            
        ),
       
    ));

}



/*------------------get student weight-----------------------------*/

    public function getStudentWeight($id,$term){
        $student_data = $this->Enrollment_model->findOne(['student_id' => $id, 'term_id' => $term]);
		
		if($student_data!=null){

            $weights = $this->Weights_model->findOne(['student_id' => $id, 'term_id' => $term]);

            if($weights==null){
			
			$weight_data = $this->Weightdata_model->findAll(['term_name' => $student_data->term_name]);

        if($weight_data!=null && sizeof($weight_data)>0){

            $output = '
        <div id="wData">
 
 <h4><span class="badge badge-secondary">Student weights:</span></h4>

 <div class="w3-padding">

1-20  Emerging<br>
20-40 Meet Exceptation<br>
40-60 Exceed Exceptation <br>
 </div> ';

                        
                            foreach ($weight_data as $record) {
                            
                            $record_name = $record->toArray()['name']; 
                            $record_id = 'id_'.$record->toArray()['name']; 
                            
                        
                            $output .='
<div class="input-group mb-3" style="margin-bottom:10px">
  <div class="input-group-prepend">
    <span class="input-group-text" id="grp">'.$record_name.'</span>
  </div>
  <input type="number" onchange="addWegits(this.value)" class="form-control" id="'.$record_id.'" name="'.$record_id.'" placeholder="Your weight">
</div>

                            
<br>';
                            }
                            $output .='
<span> Total Weight:   <input readonly type="text" class="form-control" id="tV" name="tV" style="width:100px"></span>
                            <br>
                            <br>

                            </div> ';

                            echo $output;

        }else{
            
			echo '<div style="color:red"><b>No assesment data available for this term, please add core assessment data for the trem to proceed</b></div><br>';
        }

    }else{
            
        echo '<div style="color:red"><b>Marks have already added for this sudent on this term</b></div><br>';
    }

			
		}else{
			
			echo '<div style="color:red"><b><h4>Student not enrolled with selected term</h4></b></div><br>';
			
		}
		
        
        

    }
/*------------ Edit Weight--------------------*/


    public function edit_weight($id) {

        $reg_data = $this->Registration_model->findAll();
		$data['reg_data']=$reg_data;

        $term_data = $this->Termgoals_model->findAll();
		$data['term_data']=$term_data;

		
		
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('templates/sidebar');
        $this->load->view('registration/add_weight',$data);
        $this->load->view('templates/settings');
        $this->load->view('templates/footer');
    }
	



/*-----------------------Add weight Entry-------------------*/

    public function add_weight_entry() {

        $this->form_validation->set_rules('studentName', 'Student Name', 'trim|required');
        $this->form_validation->set_rules('studentId', 'Student ID', 'trim|required');
        $this->form_validation->set_rules('studentTerm', 'Student Term', 'trim|required');
        

        if ($this->form_validation->run() === TRUE) {


        $studentName = $this->input->post('studentName');
        $studentId = $this->input->post('studentId');
        $studentTerm = $this->input->post('studentTerm');


        if($studentName==null || $studentName=='Select'){

            $this->session->set_flashdata('message', 'Select a Student Name');
            redirect('Registration/add_weight_entry');

        }else if($studentTerm==null || $studentTerm=='Select'){

            $this->session->set_flashdata('message', 'Select a Student Term');
            redirect('Registration/add_weight_entry');
    
        }else{

            try{

        $student_data = $this->Enrollment_model->findOne(['student_id' => $studentId, 'term_id' => $studentTerm]);
        $weight_data = $this->Weightdata_model->findAll(['term_name' => $student_data->term_name]);


        foreach ($weight_data as $record) {               
        
        $wId = $this->input->post('id_'.$record->toArray()['name']);

        $studentRecord = $this->Registration_model->findOne($studentName);

        $termRecord = $this->Termgoals_model->findOne($studentTerm);

        $db = new Weights_model;
        $db->student_form_id = $studentName;
        $db->student_id = $studentName;
        $db->term_id = $studentTerm;
        $db->student_name = $studentRecord->student_first_name." ".$studentRecord->student_middle_name." ".$studentRecord->student_last_name;
        $db->term_name = $termRecord->name;
        $db->weight = $wId;
        $db->weight_name = $record->toArray()['name'];
        $db->save();

        }

        
        redirect('Registration/weights');

            } catch (Exception $e) {
            
            $this->session->set_flashdata('message', $e->getMessage());
            redirect('Registration/add_weight_entry');

            }

        

    }
        }else{

            $this->session->set_flashdata('message', validation_errors());
            redirect('Registration/add_weight_entry');
            
        }
    }



/*******************************************Reports*********************************/

    public function student_master(){
        $num = 0;
        $sql = "SELECT * FROM registration";

        $query = $this->db->query($sql);

            foreach ($query->result() as $row)
            {
            
                $prod[$num]['id'] = $row->id;
                $prod[$num]['student_first_name'] = $row->student_first_name;
                $prod[$num]['student_middle_name'] = $row->student_middle_name;
                $prod[$num]['student_last_name'] = $row->student_last_name;
                $prod[$num]['student_gender'] = $row->student_gender;
                $prod[$num]['student_dob'] = $row->student_dob;
                $prod[$num]['student_age'] = $row->student_age;
                $prod[$num]['student_home_address'] = $row->student_home_address;
                $prod[$num]['student_doe'] = $row->student_doe;
                $prod[$num]['student_father_name'] = $row->student_father_name;
                $prod[$num]['student_father_job'] = $row->student_father_job;
                $prod[$num]['student_father_mobile'] = $row->student_father_mobile;
                $prod[$num]['student_father_office_number'] = $row->student_father_office_number;
                $prod[$num]['student_father_email'] = $row->student_father_email;
                $prod[$num]['student_mother_name'] = $row->student_mother_name;
                $prod[$num]['student_mother_job'] = $row->student_mother_job;
                $prod[$num]['student_mother_mobile'] = $row->student_mother_mobile;
                $prod[$num]['student_mother_office_number'] = $row->student_mother_office_number;
                $prod[$num]['student_mother_email'] = $row->student_mother_email;
				$prod[$num]['Emergency_No'] = $row->Emergency_No;
                $num++; 

            }

        $output = fopen("php://output",'w') or die("Can't open php://output");
        header("Content-Type:application/csv"); 
        header("Content-Disposition:attachment;filename=student_master.csv"); 

        fputcsv($output, array(
            'Student Master Report'
        ));
        fputcsv($output, array(
            ''
        ));
        fputcsv($output, array(
            ''
        ));

        fputcsv($output, array(
            'id',
            'student_first_name',
            'student_middle_name',
            'student_last_name',
            'student_gender',
            'student_dob',
            'student_age',
            'student_home_address',
            'student_doe',
            'student_father_name',
            'student_father_job',
            'student_father_mobile',
            'student_father_office_number',
            'student_father_email',
            'student_mother_name',
            'student_mother_job',
            'student_mother_mobile',
            'student_mother_office_number',
            'student_mother_email',
			'Emergency_No'
        ));
        foreach($prod as $product) {
            fputcsv($output, $product);
        }
        fclose($output) or die("Can't close php://output");

    }

    public function student_assesment(){
        $num = 0;
        $sql = "SELECT * FROM enrollment";

        $query = $this->db->query($sql);

            foreach ($query->result() as $row)
            {
            
                $prod[$num]['id'] = $row->id;
                $prod[$num]['student_id'] = $row->student_id;
                $prod[$num]['student_name'] = $row->student_name;
                $prod[$num]['term_name'] = $row->term_name;
                
                $num++; 

            }

        $output = fopen("php://output",'w') or die("Can't open php://output");
        header("Content-Type:application/csv"); 
        header("Content-Disposition:attachment;filename=student_assesment.csv"); 

        fputcsv($output, array(
            'Student Assesment Report'
        ));
        fputcsv($output, array(
            ''
        ));
        fputcsv($output, array(
            ''
        ));

        fputcsv($output, array(
            'id',
            'student_id',
            'student_name',
            'term_name'
        ));
        foreach($prod as $product) {
            fputcsv($output, $product);
        }
        fclose($output) or die("Can't close php://output");

    }


    public function student_rankings(){
        $num = 0;
        $sql = "SELECT * FROM weights";

        $query = $this->db->query($sql);

            foreach ($query->result() as $row)
            {
            
                $prod[$num]['id'] = $row->id;
                $prod[$num]['student_id'] = $row->student_id;
                $prod[$num]['student_name'] = $row->student_name;
                $prod[$num]['term_name'] = $row->term_name;
                $prod[$num]['weight'] = $row->weight;
                $prod[$num]['weight_name'] = $row->weight_name;
                
                $num++; 

            }

        $output = fopen("php://output",'w') or die("Can't open php://output");
        header("Content-Type:application/csv"); 
        header("Content-Disposition:attachment;filename=student_rankings.csv"); 

        fputcsv($output, array(
            'Student Ranking Report'
        ));
        fputcsv($output, array(
            ''
        ));
        fputcsv($output, array(
            ''
        ));

        fputcsv($output, array(
            'id',
            'student_id',
            'student_name',
            'term_name',
            'weight',
            'weight_name'
        ));
        foreach($prod as $product) {
            fputcsv($output, $product);
        }
        fclose($output) or die("Can't close php://output");

    }

    public function student_invoice(){
        $num = 0;
        $sql = "SELECT * FROM invoices";

        $query = $this->db->query($sql);

            foreach ($query->result() as $row)
            {
            
                $prod[$num]['id'] = $row->id;
                $prod[$num]['student_id'] = $row->student_id;
                $prod[$num]['student_name'] = $row->student_name;
                $prod[$num]['paid'] = $row->paid;
                $prod[$num]['due'] = $row->due;
               
                
                $num++; 

            }

        $output = fopen("php://output",'w') or die("Can't open php://output");
        header("Content-Type:application/csv"); 
        header("Content-Disposition:attachment;filename=student_invoice.csv"); 

        fputcsv($output, array(
            'Student Invoice Report'
        ));
        fputcsv($output, array(
            ''
        ));
        fputcsv($output, array(
            ''
        ));

        fputcsv($output, array(
            'id',
            'student_id',
            'student_name',
            'paid',
            'due'
        ));
        foreach($prod as $product) {
            fputcsv($output, $product);
        }
        fclose($output) or die("Can't close php://output");
		
		
		

    }

    public function student_master_view() {
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('templates/sidebar');
        $this->load->view('reports/student_master_view');
        $this->load->view('templates/settings');
        $this->load->view('templates/footer');
        
    }

    public function student_assesment_view() {
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('templates/sidebar');
        $this->load->view('reports/student_assesment_view');
        $this->load->view('templates/settings');
        $this->load->view('templates/footer');
        
    }

    public function student_rankings_view() {
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('templates/sidebar');
        $this->load->view('reports/student_rankings_view');
        $this->load->view('templates/settings');
        $this->load->view('templates/footer');
        
    }


    public function student_invoice_view() {
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('templates/sidebar');
        $this->load->view('reports/student_invoice_view');
        $this->load->view('templates/settings');
        $this->load->view('templates/footer');
        
    }
	
	public function student_masternew_view() {
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('templates/sidebar');
        $this->load->view('reports/student_masternew_view');
        $this->load->view('templates/settings');
        $this->load->view('templates/footer');
        
    }


    

    
    
    
    

}
