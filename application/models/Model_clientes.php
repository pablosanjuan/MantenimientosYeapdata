<?php
	class Model_cLientes extends CI_Model{	
    
    function addCliente($data){
        $this -> db -> insert('clientes',$data);
    }
    public function login_user($username,$password)
	{
		$this->db->where('user',$username);
		$this->db->where('pass',$password);
		$query = $this->db->get('clientes');
		if($query->num_rows() == 1)
		{
			return $query->row();
		}else{
			$this->session->set_flashdata('usuario_incorrecto','Usuario y/o Contraseña Incorrectos');
			redirect(base_url().'Admin','refresh');
		}
	}
    function get_all(){
        $query = $this -> db -> get('clientes');
        return $query;
    }
    function getXid($id){
        $this->db->from('clientes')->where('id_cliente', $id);
        $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query;
        }else{
            redirect( base_url() . 'Web/');
        }
    }
    function actualizarCliente($id, $data) {
            $this->db->where('id_cliente', $id);
            return $this->db->update('clientes', $data);
    	}
}?>