<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class country_controller extends CI_Controller {

        private $_guestProfile;
        
	public function __construct() {
            parent::__construct();
            if (!$this->session->userdata('logged_in')) {
                    //user is already logged in
                    redirect('ingresar');
            } else {
                $this->load->library('grocery_CRUD');
                $this->_guestProfile = $this->session->userdata('logged_in');
            }
        }

	/**
         *   ABM Country
	*/
	public function manager_country()
	{
            if (!$this->session->userdata('logged_in')) {
                    //user is already logged in
                    redirect('ingresar');
            } else {
                try{
                    $crud = new grocery_CRUD();
                    $crud->set_theme('twitter-bootstrap');
                    $crud->set_table('country');
                    $crud->set_subject('País');
                   
                    /**/                   
                    $crud->fields('Country_name');
                    $crud->columns('Country_name');
                    $crud->required_fields('Country_name');
                    
                    $crud->display_as('Country_name', 'País');
                    
                    
                    $output = $crud->render();
                    $this->output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}               
            }
        }
        
        public function output($output = null)
	{
            $this->load->view('administrador/default_layout/abm.php', $output);
	}
}