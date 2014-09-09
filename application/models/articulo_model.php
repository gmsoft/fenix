<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class articulo_model extends CI_Model {
    function __construct(){
        parent::__construct();
    }
    
    /*
    GET
    */
    
    function get_articulo_by_id($id)
    {
        $this->db->select('*');
        $this->db->where('id = "'.$id.'"');
        $query=$this->db->get('articulos');
        return $query->row_array();
    }

    function get_articulo_individual_by_codigo_oem($codigo_oem)
    {
        $this->db->select('*');
        $this->db->where('codigo_oem = "' . $codigo_oem . '"');
        $query=$this->db->get('articulos');
        return $query->row_array();
    }
    
    function get_articulo_by_codigo_fenix($codigo_fenix)
    {
        $codigo_fenix = str_replace('*', '%', $codigo_fenix);
        $this->db->select('*');
        $this->db->where('codigo_fenix LIKE "%' . $codigo_fenix . '%"');
        $query=$this->db->get('articulos');
        return $query->result_array();
    }
    
    function get_articulo_by_codigo_oem($codigo_oem)
    {
        $codigo_oem = str_replace('*', '%', $codigo_oem);
        $this->db->select('*');
        $this->db->where('codigo_oem LIKE "%' . $codigo_oem . '%"');
        $query=$this->db->get('articulos');
        return $query->result_array();
    }
    
    function get_articulo_by_descripcion($descripcion)
    {
        $descripcion = str_replace('*', '%', $descripcion);
        $this->db->select('*');
        $this->db->where('descripcion LIKE "%' . $descripcion . '%"');
        $query=$this->db->get('articulos');
        return $query->row_array();
    }
    
    function get_all_articulo_by_descripcion($descripcion)
    {
        $descripcion = str_replace('*', '%', $descripcion);
        $this->db->select('*');
        $this->db->where('descripcion LIKE "%' . $descripcion . '%"');
        if($descripcion=='')
            $query=$this->db->get('articulos',100);
        else
            $query=$this->db->get('articulos');
        return $query->result_array();
    }
    
    /*
    COMMON FUNCTIONS
    */
    function register_user($dbdata)
    {
        return $this->db->insert('users', $dbdata);
    }

    public function activate_account($email)
    {
        $this->db->where('email = "'.$email.'"');
        return $this->db->update('users', array('accountactive'=>'1'));
    }

    public function update_activation_key($email,$new_activation)
    {
        $this->db->where('email = "'.$email.'"');
        return $this->db->update('users', array('activationkey'=>$new_activation));
    }	

    public function update_password($email,$new_pass)
    {
        $this->db->where('email = "'.$email.'"');
        return $this->db->update('users', array('password'=>$new_pass));
    }	

    public function update_lastlogin_date($username)
    {
        $this->db->where('username = "'.$username.'"');
        return $this->db->update('users', array('lastloggenindate'=>time()));
    }	

    function update_user($username,$dbdata)
    {
        $this->db->where('username = "'.$username.'"');
        return $this->db->update('users', $dbdata);
    }	

    /*
    CHECK
    */
    public function is_account_active($email)
    {
        $this->db->select('accountactive');
        $this->db->where('email = "'.$email.'"');
        $query=$this->db->get('users');
        $query=$query->row_array();
        return $query['accountactive'];
    }

    public function is_account_active_2($username)
    {
        $this->db->select('accountactive');
        $this->db->where('username = "'.$username.'"');
        $query=$this->db->get('users');
        $query=$query->row_array();
        return $query['accountactive'];
    }

    public function is_account_blocked($username)
    {
        $this->db->select('accountblocked');
        $this->db->where('username = "'.$username.'"');
        $query=$this->db->get('users');
        $query=$query->row_array();
        
        if ($query['accountblocked']=='0') {
            return true;
        } else {
            return false;
        }
    }

    public function is_user_exist($username)
    {
        $this->db->select('*');
        $this->db->where('username = "'.$username.'"');
        $query=$this->db->get('users');
        if($query -> num_rows()> 0){
            return true;
        } else {
         return false;
        }
    }

    public function is_user_exist2($email)
    {
        $this->db->select('*');
        $this->db->where('email = "'.$email.'"');
        $query=$this->db->get('users');
        if ($query -> num_rows()> 0) {
         return true;
        } else {
            return false;
        }
    }

    public function is_user_logged_in($username){
        $this->db->select('*');
        $this->db->where('loggedusername = "'.$username.'"');
        $query=$this->db->get('loggedin_users');
        if ($query -> num_rows()> 0) {
            return true;
        } else {
            return false;
        }
    }


    /*
    loggedin users table
    */
    public function register_user_as_logged_in($dbdata)
    {
        return $this->db->insert('loggedin_users', $dbdata);
    }

    public function update_user_logged_in($username,$dbdata)
    {
        $this->db->where('loggedusername = "'.$username.'"');
        return $this->db->update('loggedin_users', $dbdata);
    }

    public function un_register_user_as_logged_in($username)
    {
        $this->db->where('loggedusername = "'.$username.'"');
        $this->db->delete('loggedin_users');
    }

    public function cleanup_expired_logins()
    {
        $time=time() - $this->config->item('um_login_timeout');
        $this->db->where('lastactivity < "'.$time.'"');
        $this->db->delete('loggedin_users');
    }

}
?>