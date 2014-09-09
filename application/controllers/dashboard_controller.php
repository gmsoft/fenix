<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class dashboard_controller extends CI_Controller {

    private $_guestProfile;

    public function __construct() {
        parent::__construct();
        $this->_guestProfile = $this->session->userdata('logged_in');		
    }

    public function index() {
        $this->load->view('administrador/dashboard/dashboard');
    }
}

?>