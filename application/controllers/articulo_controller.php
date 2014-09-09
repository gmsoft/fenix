<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class articulo_controller extends CI_Controller {

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

    public function index() {
        $this->load->view('administrador/dashboard/dashboard.php');
    }

    /**
     * Abm Articulos
     */
    public function abm_articulos() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_theme('twitter-bootstrap');
            $crud->set_table('articulos');
            $crud->set_subject('Articulos');

            //$crud->set_relation('proveedor_testigo', 'proveedores', '{codigo_proveedor} - {nombre_proveedor} ');
            $crud->set_relation('rubro', 'rubros', '{id} - {nombre} ');
            //$crud->set_relation('marca', 'marcas', '{id} - {nombre} ');

            $crud->set_field_upload('imagen','assets/uploads/files/fotos_articulos');

            $crud->add_action('Desactivar', '', '', '', array($this, 'desactivarArticulo'));

            $crud->callback_edit_field('codigo_fenix',array($this,'_callback_codigo_fenix'));

            $crud->callback_edit_field('descripcion',array($this,'_callback_descripcion'));

            //Nro FNX / Nro Orig / Descrip / Precio Lista / Sucursal + Ubicación + Stock
            $crud->columns('codigo_fenix', 'codigo_oem', 'descripcion', 'precio_lista');

            $crud->unset_delete();

            $output = $crud->render();
            $this->output('administrador/default_layout/abm.php', $output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    function _callback_codigo_fenix($value, $primary_key)
    {
        return '<input type="text" maxlength="50" value="'.$value.'" name="codigo_fenix" id="field-codigo_fenix" readonly>';
    }

    function _callback_descripcion($value, $primary_key)
    {
        return '<input type="text" maxlength="200" value="'.$value.'" name="descripcion" id="field-descripcion" style="width:450px">';
    }

    public function desactivarArticulo($primary_key, $row) {
        return site_url('precios/individuales/' . $row->id);
    }

    /**
     * CONSULTA DE  Articulos
     */
    public function consulta_articulos_lista() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_theme('twitter-bootstrap');
            $crud->set_table('articulos');
            $crud->set_subject('Consulta de Articulos');

            //$crud->set_relation('proveedor_testigo', 'proveedores', '{codigo_proveedor} - {nombre_proveedor} ');
            $crud->set_relation('proveedor_testigo', 'proveedores', '{codigo_proveedor}');

            //Nro FNX / Nro Orig / Descrip / Precio Lista / Sucursal + Ubicación + Stock
            //$crud->columns('codigo_fenix', 'codigo', 'descripcion', 'precio_lista', 'proveedor_testigo');
            $crud->columns('codigo_fenix', 'codigo', 'descripcion', 'precio_lista', 'proveedor_testigo');
            $crud->callback_column('codigo', array($this, '_callback_codigo'));
            $crud->display_as('codigo', 'Original');
            $crud->display_as('proveedor_testigo', 'Proveedor');

            $crud->unset_add();
            $crud->unset_edit();
            $crud->unset_delete();

            $output = $crud->render();
            $this->output('administrador/default_layout/abm.php', $output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function consulta_articulos() {
        //$id = $this->uri->segment(3);
        $articulo = $this->input->post('articulo');
        $oem = $this->input->post('oem');
        $descripcion = $this->input->post('descripcion');
        $oem_vw = $this->input->get('oem_vw');
        
        if($oem_vw != ''){
            $oem = $oem_vw;
        }

        $this->load->model('articulo_model');
        //$codigo = $this->input->post('codigo'); 
        if($articulo != '') {
            $articulos = $this->articulo_model->get_articulo_by_codigo_fenix($articulo);    
            $oem = "";
            $descripcion = "";
        } else if($oem != '') {
            $articulos = $this->articulo_model->get_articulo_by_codigo_oem($oem);    
            $articulo = "";
            $descripcion = "";
        }  else if($descripcion != '') {
            $articulos = $this->articulo_model->get_all_articulo_by_descripcion($descripcion);    
            $articulo = "";
            $oem = '';
        } else {
            $articulos = $this->articulo_model->get_all_articulo_by_descripcion($descripcion);    
        }

        /*echo '<pre>';
        print_r($articulos);
        die;*/
        
        $data['articulo'] = $articulos;
        $data['codigo_fenix'] = $articulo;
        $data['oem'] = $oem;
        $data['descripcion'] = $descripcion;
        
        $this->load->view('consulta_articulo/consulta.php', $data);
    }

    public function _callback_codigo($value, $row) {
        $result = '';
        $result = '<a href="articulo/' . $row->id . '">' . $value . '</a>';
        return $result;
    }

    public function consulta_articulo_individual() {
        $id = $this->uri->segment(3);
        $oem = $this->input->get('oem');
        
        $this->load->model('articulo_model');
        $articulo = array();

        if(!empty($oem)) {
            $articulo = $this->articulo_model->get_articulo_individual_by_codigo_oem($oem);
        } else {
            $articulo = $this->articulo_model->get_articulo_by_id($id);            
        }
        //print_r($articulo);
        
        $data['articulo'] = $articulo;
        $data['id'] = $id; //Id de la tabla articulos
        $data['oem'] = $oem;

        $this->load->view('consulta_articulo/consulta_individual.php', $data);
    }

    /**
     * Muestra las vistas
     * @param string $output 
     */
    public function output($view, $output = null) {
        $this->load->view($view, $output);
    }

}

?>