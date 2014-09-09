<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class stock_controller extends CI_Controller {

    private $_guestProfile;
    
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
                //user is already logged in
                redirect('ingresar');
        } else {
            $this->load->library('grocery_CRUD');
            $this->_guestProfile = $this->session->userdata('logged_in');
        }
    }

    public function index()
    {       
        $this->load->view('administrador/dashboard/dashboard.php');
    }
    
    /**
     * Abm Articulos
     */
    public function abm_stock() 
    {
        try {
            $crud = new grocery_CRUD();
            $crud->set_theme('twitter-bootstrap');
            $crud->set_table('stock');
            $crud->set_subject('Stock');    

            //$crud->set_relation('articulo_id', 'articulos', '{codigo_fenix}');
            $crud->set_relation('sucursal_id', 'sucursales', 'nombre');

            $crud->display_as('articulo_id', 'Articulo');
            $crud->display_as('sucursal_id', 'Sucursal');


            
            $output = $crud->render();
            $this->output('administrador/default_layout/abm.php', $output);
        } catch(Exception $e){
                show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }
    
    /**
     * Muestra las vistas
     * @param string $output 
     */
    public function output($view, $output = null)
    {
        $this->load->view($view, $output);
    }
}

?>