<?php
	class Model_mantenimientos extends CI_Model{
		
		function agregarSede($data){
			$this -> db -> insert('mantenimientos',$data);
		}
        
        function get_excelTodo(){
			$query = $this -> db -> get('mantenimientos');
			return $query;
		}
        function get_excelRealizados(){
			$this->db->from('mantenimientos')->where('Realizado', 1);
	        $query = $this->db->get();
            return $query;
		}

        function get_excelFaltantes(){
			$this->db->from('mantenimientos')->where('Realizado', 0);
	        $query = $this->db->get();
            return $query;
		}
        
        function get_excelProgramados(){
			$this->db->from('mantenimientos')->where('Programado', 1);
	        $query = $this->db->get();
            return $query;
		}
        
		function get_all(){
			$query = $this -> db -> get('mantenimientos');
			return $query;
		}
        
		function getXid($data){
			$this->db->from('mantenimientos')->where('id_mantenimiento', $data);
	        $query = $this->db->get();
	        if($query->num_rows() > 0 )
	        {
	            return $query;
	        }else{
	        	redirect( base_url() . 'Web/notas');
	        }
		}
		function actualizarSede($id, $data) {
	        //$this->db->where('id_mantenimiento', $id);
	        //return $this->db->update('mantenimientos', $data);

	        $valorsss=$data['FechaRealizado'];
            $valorProg=$data['FechaProgramado'];
            $valorActa=$data['DireccionActa'];
            $valorObsCliente=$data['ObservacionCliente'];
	        if ($valorsss!=0) {
	        	$data['Realizado']=1;
                if ($valorProg!=0) {
                    $data['Programado']=1;
                    if ($valorActa!="") {
                        $data['Documentado']=1;
                        if ($valorObsCliente!="") {
                            $this->db->where('id_mantenimiento', $id);
                            return $this->db->update('mantenimientos', $data);
                        }else{
                            $data['ObservacionCliente']=0;
                            $this->db->where('id_mantenimiento', $id);
                            return $this->db->update('mantenimientos', $data);
                        }
                   }else{
                        $data['Documentado']=0;
                        $data['DireccionActa']=0;
                        if ($valorObsCliente!="") {
                            $this->db->where('id_mantenimiento', $id);
                            return $this->db->update('mantenimientos', $data);
                        }else{
                            $data['ObservacionCliente']=0;
                            $this->db->where('id_mantenimiento', $id);
                            return $this->db->update('mantenimientos', $data);
                        }
                   }
	           }else{
                    $data['Programado']=0;
                    if ($valorActa!="") {
                        $data['Documentado']=1;
                        if ($valorObsCliente!="") {
                            $this->db->where('id_mantenimiento', $id);
                            return $this->db->update('mantenimientos', $data);
                        }else{
                            $data['ObservacionCliente']=0;
                            $this->db->where('id_mantenimiento', $id);
                            return $this->db->update('mantenimientos', $data);
                        }
                   }else{
                        $data['Documentado']=0;
                        $data['DireccionActa']=0;
                        if ($valorObsCliente!="") {
                            $this->db->where('id_mantenimiento', $id);
                            return $this->db->update('mantenimientos', $data);
                        }else{
                            $data['ObservacionCliente']=0;
                            $this->db->where('id_mantenimiento', $id);
                            return $this->db->update('mantenimientos', $data);
                        }
                   }
	           }
	        }else{
	        	$data['Realizado']=0;
                if ($valorProg!=0) {
                    $data['Programado']=1;
                    $this->db->where('id_mantenimiento', $id);
                    if ($valorActa!="") {
                        $data['Documentado']=1;
                        if ($valorObsCliente!="") {
                            $this->db->where('id_mantenimiento', $id);
                            return $this->db->update('mantenimientos', $data);
                        }else{
                            $data['ObservacionCliente']=0;
                            $this->db->where('id_mantenimiento', $id);
                            return $this->db->update('mantenimientos', $data);
                        }
                   }else{
                        $data['Documentado']=0;
                        $data['DireccionActa']=0;
                        if ($valorObsCliente!="") {
                            $this->db->where('id_mantenimiento', $id);
                            return $this->db->update('mantenimientos', $data);
                        }else{
                            $data['ObservacionCliente']=0;
                            $this->db->where('id_mantenimiento', $id);
                            return $this->db->update('mantenimientos', $data);
                        }
                   }
	           }else{
                    $data['Programado']=0;
                    $this->db->where('id_mantenimiento', $id);
                    if ($valorActa!="") {
                        $data['Documentado']=1;
                        if ($valorObsCliente!="") {
                            $this->db->where('id_mantenimiento', $id);
                            return $this->db->update('mantenimientos', $data);
                        }else{
                            $data['ObservacionCliente']=0;
                            $this->db->where('id_mantenimiento', $id);
                            return $this->db->update('mantenimientos', $data);
                        }
                   }else{
                        $data['Documentado']=0;
                        $data['DireccionActa']=0;
                        if ($valorObsCliente!="") {
                            $this->db->where('id_mantenimiento', $id);
                            return $this->db->update('mantenimientos', $data);
                        }else{
                            $data['ObservacionCliente']=0;
                            $this->db->where('id_mantenimiento', $id);
                            return $this->db->update('mantenimientos', $data);
                        }
                   }
	           }
	        }
    	}
        
		function actualizarSedeFecha($id, $data) {
	        $this->db->where('id_mantenimiento', $id);
	        return $this->db->update('mantenimientos', $data);
    	}
        
		function ReiniciarFecha($id, $data) {
	        $this->db->where('id_mantenimiento', $id);
	        return $this->db->update('mantenimientos', $data);
    	}

		function EliminarSede($id) {
			$this->db->where('id_mantenimiento',$id);
			$this->db->delete('mantenimientos');
			redirect(base_url().'Web/mantenimientos','refresh');
    	}
    }
?>