<?php

class Blog_m extends CI_Model {

	private $id = false;
	private $contentTypeId;
	private $content;
	private $userId;
	private $title;

	function __construct() {
		parent::__construct();
	}

	// neal: basic CRUD (insert, get, update, delete)
	function insert_entry() {
	}

	function get_entry($id=0) {
		
	}

	function update_entry() {
	}

	function delete_entry() {
	}

	// neal: mo advanced 
	function get_entry_by_permalink($permalink='') {
		$slug = array($permalink);
		$this->db->where_in('permalink', $slug);
		$query = $this->db->get('content');
		return $query->result();
	}

	function get_last_num_entries($num=1) {
	}

}
