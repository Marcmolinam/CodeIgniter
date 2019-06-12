<?php 
class Usuarios_model extends CI_Model{
		
        //Tutorial modo
        public function get_usuarios()
		{
		       
		   $query = $this->db->query('SELECT * FROM usuarios');
		   return $query->result();
		}
		public function set_usuarios()
		{
		    $this->load->helper('url');


		    $data = array(
		        'nomUsuario' => $this->input->post('nomUsuario'),
		        'contraseña' => $this->input->post('contraseña')
		    );

		    return $this->db->insert('usuarios', $data);
		}
		public function getById($id){


		$query = $this->db->query('SELECT * FROM usuarios WHERE id =' .$id);
		return $query->row();

		}

		public function updateData($id){

		    $data = array(
		        'nomUsuario' => $this->input->post('nomUsuario'),
		        'contraseña' => $this->input->post('contraseña')
		    );

		    $this->db->where('id',$id);
		    $this->db->update('usuarios',$data);

		}
		public function deleteData($id){


		    $this->db->where('id',$id);
		    $this->db->delete('usuarios');

		}

}
 ?>