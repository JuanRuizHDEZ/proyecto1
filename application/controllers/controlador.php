<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('modelo_model');
	}

	public function index(){
		$this->load->view('welcome_message');
	}

	public function vistar(){
		$datos['segmento'] = $this->uri->segment(3);
		
		if(!$datos['segmento']){
			$datos['resultado'] = $this->modelo_model->listar();
		}else{
			$datos['resultado'] = $this->modelo_model->lista($datos['segmento']);
		}
		$this->load->view('vista',$datos);
	}

	function nuevo(){
		$this->load->view('formulario');
	}

	function recibirdatos(){
		$data = array(
			'numero' => $this->input->post('numero'),
			'B' => $this->input->post('B'),
			'C' => $this->input->post('C'),
			'D' => $this->input->post('D'),
			'E' => $this->input->post('E'),
			'F' => $this->input->post('F')
			);

		if(empty($data['numero'])){
			$this->load->view('formulario');
			echo "<script>alert('Es nesesario llenar todos los campos')</script>";
		}else{
			if(empty($data['B'])){
				$this->load->view('formulario');
				echo "<script>alert('Es nesesario llenar todos los campos')</script>";
			}else{
				if(empty($data['C'])){
					$this->load->view('formulario');
					echo "<script>alert('Es nesesario llenar todos los campos')</script>";
				}else{
					if(empty($data['D'])){
						$this->load->view('formulario');
						echo "<script>alert('Es nesesario llenar todos los campos')</script>";
					}else{
						if(empty($data['E'])){
						$this->load->view('formulario');
						echo "<script>alert('Es nesesario llenar todos los campos')</script>";
						}else{
							if(empty($data['F'])){
							$this->load->view('formulario');
							echo "<script>alert('Es nesesario llenar todos los campos')</script>";
							}else{
								if($data['numero'] > 0 and is_numeric($data['numero'])){
									if(filter_var($data['B'],FILTER_VALIDATE_EMAIL)){
										if($data['C'] > 0 and is_numeric($data['C'])){
											$this->modelo_model->crearregistro($data);
											redirect("http://localhost/CodeIgniter/index.php/controlador/vistar");	
										}else{
											$this->load->view('formulario');
											echo "<script>alert('El telefono es invalido')</script>";
										}
									}else{
										$this->load->view('formulario');
										echo "<script>alert('El email es invalido')</script>";
									}
								}else{
									$this->load->view('formulario');
									echo "<script>alert('El numero es invalido')</script>";
								}
							}
						}
					}
				}
			}
		}
		
	}

	function eliminardatos(){
		$datos['segmento'] = $this->uri->segment(3);
		
		if(!$datos['segmento']){
			$datos['resultado'] = $this->modelo_model->listar();
		}else{
			$result = $this->modelo_model->eliminardatos($datos['segmento']);
			$datos['resultado'] = $this->modelo_model->listar();
		}
		redirect("http://localhost/CodeIgniter/index.php/controlador/vistar");
	}

	function modificardatos(){
		$datos['id'] = $this->uri->segment(3);
		$datos['resultado'] = $this->modelo_model->lista($datos['id']);
		$this->load->view('modificar',$datos);
	}

	function modificar(){
		$data = array(
			'numero' => $this->input->post('numero'),
			'B' => $this->input->post('B'),
			'C' => $this->input->post('C'),
			'D' => $this->input->post('D'),
			'E' => $this->input->post('E'),
			'F' => $this->input->post('F')
			);
		$this->modelo_model->modificaregistro($data,$this->uri->segment(3));
		redirect("http://localhost/CodeIgniter/index.php/controlador/vistar");
	}
}
?>