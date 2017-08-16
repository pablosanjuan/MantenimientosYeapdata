<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {
    
	public function __construct(){
		parent::__construct();
		$this -> load -> model('model_mantenimientos');
        $this -> load -> model('model_cursos');
        $this -> load -> model('model_modulos');
        $this -> load -> model('model_generador');
        $this -> load -> library('export_excel');
		$this->load->database('default');
		$this->load->helper(array('url','form'));
	}
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
//				Funciones para EXCEL
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    public function dExcelTodo(){
        $resutl = $this-> model_mantenimientos -> get_excelTodo();
        $this->export_excel->to_excel($resutl, 'Coomeva-Todos');
    }
        public function dExcelRealizados(){
        $resutl = $this-> model_mantenimientos -> get_excelRealizados();
        $this->export_excel->to_excel($resutl, 'Coomeva-Realizados');
    }
        public function dExcelFaltantes(){
        $resutl = $this-> model_mantenimientos -> get_excelFaltantes();
        $this->export_excel->to_excel($resutl, 'Coomeva-Faltantes');
    }
        public function dExcelProgramados(){
        $resutl = $this-> model_mantenimientos -> get_excelProgramados();
        $this->export_excel->to_excel($resutl, 'Coomeva-Programados');
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
   public function index(){
        $data = array('sedes' =>  $this -> model_mantenimientos -> get_all());
		$this->load->view('web/head');
		$this->load->view('web/nav');
        $this->load->view('contenido/cont_MantCliente',$data);
		$this->load->view('web/footer');
		$this->load->view('web/end');
    }
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
}