<?php

class Contact_m extends CI_Model {

	private $id = false;
	private $name;
	private $email;
	private $message;
	private $ip;

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

}
