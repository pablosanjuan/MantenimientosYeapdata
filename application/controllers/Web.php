<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
    
	public function __construct(){
		parent::__construct();
		$this -> load -> model('model_mantenimientos');
        $this -> load -> model('model_cursos');
        $this -> load -> model('model_modulos');
        $this -> load -> model('model_generador');
        $this -> load -> model('model_clientes');
        $this -> load -> library('export_excel');
		$this->load->database('default');
		$this->load->helper(array('url','form'));
	}
    public function notas(){
		$this->load->view('web/head');
		$this->load->view('web/nav');
        $this->load->view('contenido/cont_clientes');
		$this->load->view('web/footer');
		$this->load->view('web/end');
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
//				Funciones para Tutoriales
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	public function index(){
        $data = array('clientes' =>  $this -> model_clientes -> get_all());
        //$data = array('cursos' =>  $this -> model_cursos -> get_all());
		$this->load->view('web/head');
		$this->load->view('web/nav');
        $this->load->view('contenido/cont_clientes',$data);
		$this->load->view('web/footer');
		$this->load->view('web/end');
	}
    public function curso($idCurso=null){
        $data = array('modulos' =>  $this -> model_modulos -> getXid($idCurso));
		$this->load->view('web/head');
		$this->load->view('web/nav');
        $this->load->view('contenido/cont_curso', $data);
		$this->load->view('web/footer');
		$this->load->view('web/end');
    }
    public function add_curso(){
		$this->load->view('web/head');
		$this->load->view('web/nav');
        $this->load->view('contenido/cont_agregar_curso');
		$this->load->view('web/footer');
		$this->load->view('web/end');
    }
    public function AddCurso(){
			$data = array(
				'NombreCurso' => $this -> input -> post('nNombreCurso'),
				);
			$this -> model_cursos -> agregarCurso($data);
			redirect( base_url() . 'Web/index');
    }    
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
//				Funciones para Mantenimientos
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
   public function mantenimientos(){
        $data = array('sedes' =>  $this -> model_mantenimientos -> get_all());
		$this->load->view('web/head');
		$this->load->view('web/nav');
        $this->load->view('contenido/cont_mantenimientos',$data);
		$this->load->view('web/footer');
		$this->load->view('web/end');
    }
   public function agregar_sede(){
		$this->load->view('web/head');
		$this->load->view('web/nav');
        $this->load->view('contenido/cont_agregar_mantenimiento');
		$this->load->view('web/footer');
		$this->load->view('web/end');
    }
   public function edit_texto(){
        $data = array('texto' =>  $this -> model_generador -> get_all());
		$this->load->view('web/head');
		$this->load->view('web/nav');
        $this->load->view('contenido/cont_texto', $data);
		$this->load->view('web/footer');
		$this->load->view('web/end');
    }
   public function EditarSede($id){
        $data = array('sedes' =>  $this -> model_mantenimientos -> getXid($id));
		$this->load->view('web/head');
		$this->load->view('web/nav');
        $this->load->view('contenido/cont_edit_sede',$data);
		$this->load->view('web/footer');
		$this->load->view('web/end');
    }
    public function edtTexto(){
			$data = array(
				'Texto' => $this -> input -> post('nTexto'),
				);
			$this -> model_generador -> edtTexto(1,$data);
			redirect(base_url() . 'Web/mantenimientos');
	}
	public function ActulalizarSede($id){
			$data = array(
				'FechaPropuesta' => $this -> input -> post('nFechaPropuesta'),
				'NombreSede' => $this -> input -> post('nNombreSede'),
				'Ip' => $this -> input -> post('nIp'),
				'TipoEquipos' => $this -> input -> post('nTipoEquipos'),
				'DireccionSede' => $this -> input -> post('nDireccionSede'),
				'FechaRealizado' => $this -> input -> post('nFechaRealizado'),
				'FechaProgramado' => $this -> input -> post('nFechaProgramado'),
                'Programado' => $this -> input -> post('ch_Programado'),
				'Documentado' => $this -> input -> post('ch_Documentado'),
				'Confirmado' => $this -> input -> post('ch_Confirmado'),
                'ObservacionCliente' => $this -> input -> post('nObservacion'),
                'DireccionActa' => $this -> input -> post('nDireccionActa'),
				);
			$this -> model_mantenimientos -> actualizarSede($id,$data);
			redirect(base_url() . 'Web/mantenimientos');
	}
	public function ReiniciarFechaPropuesta($id){
			$data = array(
				'FechaPropuesta' => "0000-00-00"
				);
			$this -> model_mantenimientos -> actualizarSedeFecha($id,$data);
			redirect(base_url() . 'Web/EditarSede/'.$id);
	}
	public function ReiniciarFechaRealizada($id){
			$data = array(
				'FechaRealizado' => "0000-00-00",
                'Realizado' => "0",
				);
			$this -> model_mantenimientos -> actualizarSedeFecha($id,$data);
			redirect(base_url() . 'Web/EditarSede/'.$id);
	}
    public function ReiniciarFechaProgramada($id){
			$data = array(
				'FechaProgramado' => "0000-00-00",
                'Programado' => "0",
				);
			$this -> model_mantenimientos -> actualizarSedeFecha($id,$data);
			redirect(base_url() . 'Web/EditarSede/'.$id);
	}
	public function AddSede(){
			$data = array(
				'NombreSede' => $this -> input -> post('nNombreSede'),
				'Ip' => $this -> input -> post('nIp'),
				'DireccionSede' => $this -> input -> post('nDireccionSede'),
                'FechaPropuesta' => "0000-00-00",
                'FechaProgramado' => "0000-00-00",
				'FechaRealizado' => "0000-00-00"
				);
			$this -> model_mantenimientos -> agregarSede($data);
			redirect( base_url() . 'Web/mantenimientos');
    }
	public function EliminarSede($id){
			$this -> model_mantenimientos -> EliminarSede($id);
			redirect( base_url() . 'Web/mantenimientos');
	}
    public function generar(){
        //$data = array('texto' =>  $this -> model_generador -> get_all());
        $data['texto'] = $this -> model_generador -> get_all();
		$data['sedes'] = $this -> model_mantenimientos -> get_all();
		$this->load->view('contenido/GeneradorCorreo', $data);
    }
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
//				Funciones para empresas
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    public function agregar_cliente(){
		$this->load->view('web/head');
		$this->load->view('web/nav');
        $this->load->view('contenido/cont_agregar_cliente');
		$this->load->view('web/footer');
		$this->load->view('web/end');
    }
    public function add_cliente(){
        $data = array(
            'NombreCliente' => $this -> input -> post('nNombreCliente'),
            'TipoProyecto' => $this -> input -> post('nTipoProyecto'),
            'TipoRol' => 1,
            'Rol' => "cliente",
            'User' => $this -> input -> post('nUsuario'),
            'Pass' => $this -> input -> post('nContrasena'),
            );
        $this -> model_clientes -> addCliente($data);
        redirect( base_url() . 'Web/');
    }
    public function Editar_cliente($id){
        $data = array('cliente' =>  $this -> model_clientes -> getXid($id));
		$this->load->view('web/head');
		$this->load->view('web/nav');
        $this->load->view('contenido/cont_edit_Cliente',$data);
		$this->load->view('web/footer');
		$this->load->view('web/end');
    }
	public function ActulalizarCliente($id){
			$data = array(
            'NombreCliente' => $this -> input -> post('nNombreCliente'),
            'TipoProyecto' => $this -> input -> post('nTipoProyecto'),
            'User' => $this -> input -> post('nUsuario'),
            'Pass' => $this -> input -> post('nContrasena'),
				);
			$this -> model_clientes -> actualizarCliente($id,$data);
			redirect(base_url() . 'Web/');
	}
}