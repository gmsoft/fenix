<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class configuration_controller extends CI_Controller {

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
         *   ABM categorias
	*/
	public function manager_configuration()
	{
            if (!$this->session->userdata('logged_in')) {
                    //user is already logged in
                    redirect('ingresar');
            } else {
                try{
                    $crud = new grocery_CRUD();
                    $crud->set_theme('twitter-bootstrap');
                    $crud->set_table('configuration');
                    $crud->set_subject('Configuracion');
                    
                    /**/                   
                    $crud->fields('price_per_word', 'tile_by_default');
                    $crud->columns('price_per_word', 'tile_by_default');
                    $crud->required_fields('Category_name','Category_Desc');
                    
                    $crud->display_as('price_per_word', 'Precio por palabra');
                    $crud->display_as('tile_by_default', 'Tile por Defecto');
                   
                    $crud->unset_add();
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