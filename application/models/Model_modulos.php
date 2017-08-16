<?php
	class Model_modulos extends CI_Model{
		
		function agregarModulo($data){
			$this -> db -> insert('cursos',$data);
		}
        
		function getXid($data){
			$this->db->from('modulos')->where('idCurso', $data);
	        $query = $this->db->get();
	        if($query->num_rows() > 0 )
	        {
	            return $query;
	        }else{
	        	redirect( base_url() . 'Web/index');
	        }
		}
    }
?>