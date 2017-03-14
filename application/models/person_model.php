<?php 
	class Person_model extends CI_Model {
		
		function __construct()
		{
			parent::__construct();	
			$this->load->database();
			
		}


		public function add_new()
		{			
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'date_joined' => date('Y-m-d')
			);

			return $this->db->insert('Person', $data);
		}


		public function get_person($name='', $sort=''){
			
			$sql = "SELECT * from Person ";

			if($name!=='') $sql .= "where name like '%".$name."%'";
			if($sort!=='') $sql .= " order by ".$sort." desc";

			$query = $this->db->query($sql);
			return $query->result_array();

			// if ($name==='' && $sort==='') {
			// 	$query = $this->db->get('Person');	
			// 	return $query->result_array();
			// }

			// if ($name==='' && $sort!==''){
			// 	'SELECT * from Person order by '.$sort);	
			// 	return $query->result_array();
			// }

			// if ($name!=='' && $sort==''){
			// 	$query = $this->db->query('SELECT * from Person order by '.$sort);	
			// 	return $query->result_array();
			// }

			// if ($name!=='' && $sort!=''){
			// $query = $this->db->get_where('Person',array('name' => $name));
			// return $query->row_array();

		}
	}



?>