<?php
	class Home extends CI_Controller {
		function __construct() {
			parent::__construct();
			$this->load->model('postal_model');
		}
		function index() {
			echo "Nada";
		}
		function ajax($cp = false) {
			$buscar = $this->input->get('cp');
			$data['codigos'] = $this->postal_model->show($buscar);
			echo json_encode($data);
		}
	}
?>