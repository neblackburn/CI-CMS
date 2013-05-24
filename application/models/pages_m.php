<?php

class Pages_m extends CI_Model {

	private $id = false;
	private $contentTypeId;
	private $content;
	private $userId;
	private $title;
	private $publishDate;
	private $updateDate;

	function __construct() {
		parent::__construct();
	}

	// neal: basic CRUD (insert, get, update, delete)
	function create_page() {
	}

	function read_page($id=FALSE) {
        if ($id) {
            $this->db->select('content.*, users.displayName');
            $this->db->from('content');
            $this->db->join('users', 'users.id=content.userId');
            $this->db->where('content.contentTypeId', '1');
            $this->db->where('content.id', $id);
            $query = $this->db->get();
            return $query->result_array()[0];
        } else {
            return FALSE;
        }
	}

	function update_page() {
	}

	function delete_page() {
	}

	// neal: mo advanced 
	function get_page_by_permalink($permalink='') {
		$slug = array($permalink);
		$this->db->select('content.*, users.displayName');
		$this->db->from('content');
		$this->db->join('users', 'users.id=content.userId');
        $this->db->where('content.contentTypeId', '1');
		$this->db->where_in('permalink', $slug);
		$query = $this->db->get();
		return $query->result();
	}

	function get_last_num_entries($num=1) {
	}

}
