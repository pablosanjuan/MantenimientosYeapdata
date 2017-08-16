<?php
	class Model_cursos extends CI_Model{
		
		function agregarCurso($data){
			$this -> db -> insert('cursos',$data);
		}
        
		function get_all(){
			$query = $this -> db -> get('cursos');
			return $query;
		}
    }
?>