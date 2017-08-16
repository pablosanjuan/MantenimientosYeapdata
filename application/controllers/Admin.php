<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
	public function __construct(){
		parent::__construct();
		$this -> load -> model('model_mantenimientos');
        $this -> load -> model('model_cursos');
        $this -> load -> model('model_modulos');
        $this -> load -> model('model_generador');
        $this -> load -> model('model_clientes');
        $this -> load -> library('export_excel');
        $this -> load -> library(array('session'));
		$this->load->database('default');
		$this->load->helper(array('url','form'));
	}
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
//xxxxxxxxxxxxxxxxxxx       CLIENTES
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
   /* public function index(){
		$this->load->view('web/head');
        $this->load->view('contenido/cont_sesion');
		$this->load->view('web/end');
    }*/
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    	public function index(){
		$data['token'] = $this->token();	
		switch ($this->session->userdata('Rol')) {
			case 'administrador':
				redirect(base_url().'Web');
				break;
			case 'cliente':
				redirect(base_url().'Clientes');
				break;	
			default:		
                    $this->load->view('web/head');
                    $this->load->view('contenido/cont_sesion',$data);
                    $this->load->view('web/end');
				break;		
		}
	}

	public function token(){
		$token = md5(uniqid(rand(),true));
		$this->session->set_userdata('token',$token);
		return $token;
	}
	
	public function new_user(){
		if($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token')){

				$username = $this->input->post('username');
				//$password = sha1($this->input->post('password'));
				$password = $this->input->post('password');
				$check_user = $this->model_clientes->login_user($username,$password);
				if($check_user == TRUE)
				{
					$data = array(
	                'is_logued_in' 	=> 		TRUE,
	                'id_cliente' 	=> 		$check_user->id_cliente,
	                'NombreCliente'	=>		$check_user->NombreCliente,
	                'Rol' 		=> 		$check_user->Rol,
	                'User' 		=> 		$check_user->User,
	                'Pass' 		=> 		$check_user->Pass
            		);		
					$this->session->set_userdata($data);
					$this->index();
			}
		}else{
			redirect(base_url().'Admin');
		}
	}

	public function logout_ci(){
		$this->session->sess_destroy();
		$this->index();
	}
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
}