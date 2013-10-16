<?php
	class Postal_model extends CI_model {
		public function __construt() {
			parent::__constrcut();
		}

		public function show( $cp ) {
			$query = $this->db->get_where('postal', array('codigo' => $cp));
			return $query->result_array();
		}
	}
?>