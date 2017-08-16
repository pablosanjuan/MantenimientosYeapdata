<?php
	class Model_generador extends CI_Model{		
        
		function edtTexto($id, $data) {
	        $this->db->where('id_texto', $id);
	        return $this->db->update('generador', $data);
    	}
        
        function get_all(){
			$query = $this -> db -> get('generador');
			return $query;
		}
}
?>