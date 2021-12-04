<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SystemUsers extends CI_Controller {

    function __construct() {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        }
    }

    /**
     * Index Page for this controller.
     *
     */
    public function index() {

        try {
            $crud = new grocery_CRUD();

            $crud->set_table('users');
            $crud->set_model('Admin_model');
            $crud->columns('email', 'group_id', 'last_login', 'created_on', 'active');
            $crud->display_as('email', $this->lang->line('Username'));
            $crud->display_as('last_login', $this->lang->line('Last Login'));
            $crud->display_as('group_id', $this->lang->line('Group'));
            $crud->display_as('created_on', $this->lang->line('Created At'));
            $crud->display_as('active', $this->lang->line('Status'));


            $crud->callback_column('created_on', array($this, 'callback_created_on'));
            $crud->callback_column('last_login', array($this, 'callback_last_login'));
            $crud->callback_column('active', array($this, 'callback_status'));
            $crud->callback_column('group_id', array($this, 'callback_group_id'));

            $crud->add_action($this->lang->line('Edit'), '', 'auth/edit_user', 'far fa-edit');
            $crud->add_action($this->lang->line('Activate'), '', 'auth/activate', 'fa fa-toggle-on');
            $crud->add_action($this->lang->line('Deactivate'), '', 'auth/deactivate', 'fa fa-toggle-off');


            $crud->unset_add();
            $crud->unset_edit();
            $crud->unset_delete();
            $crud->unset_read();

            $output = $crud->render();
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }

        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('templates/sidebar');
        $this->load->view('system/systemusers', $output);
        $this->load->view('templates/settings');
        $this->load->view('templates/footer');
    }

    public function callback_created_on($value, $row) {

        return date('Y-m-d H:i:s', $value);
    }

    public function callback_last_login($value, $row) {

        return date('Y-m-d H:i:s', $value);
    }

    public function callback_status($value, $row) {

        if ($value === '1') {

            return '<span class="badge badge-success">' . $this->lang->line('Active') . '</span>';
        } else if ($value === '0') {

            return '<span class="badge badge-secondary">' . $this->lang->line('Suspended') . '</span>';
        } else {

            return $value;
        }
    }

    public function callback_group_id($value, $row) {

        if ($value === '1') {

            return '<span class="badge badge-danger">Admin</span>';
        } else if ($value === '2') {

           return '<span class="badge badge-warning">members</span>';
			
        }else if ($value === '3') {

            return '<span class="badge badge-info">Parent</span>';
        } else {

            return $value;
        }
    }

}
