<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Modelo_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}
		function crearregistro($data){
			$this->db->insert('datos',array('numero'=>$data['numero'],'B'=>$data['B'],'C'=>$data['C'],'D'=>$data['D'],'E'=>$data['E'],'F'=>$data['F']));
		}
		function listar(){
			$query = $this->db->get('datos');
			if ($query->num_rows() > 0 ) {
				return $query;
			}else{
				return false;
			}
		}
		function lista($id){
			$this->db->where('id_datos',$id);
			$query = $this->db->get('datos');
			if ($query->num_rows() > 0 ) {
				return $query;
			}else{
				return false;
			}
		}
		function eliminardatos($id){
			$this->db->where('id_datos',$id);
			$query = $this->db->delete('datos');
		}
		function modificaregistro($data,$id){
			$this->db->where('id_datos',$id);
			$this->db->update('datos',array('numero'=>$data['numero'],'B'=>$data['B'],'C'=>$data['C'],'D'=>$data['D'],'E'=>$data['E'],'F'=>$data['F']));
		}

		/*function otraopcion($id){
			$consulta = "DELETE FROM datos WHERE indicador = $id";
			$this->db->($consulta);
		}*/
	}
?>