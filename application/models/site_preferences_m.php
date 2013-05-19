<?php

class Site_preferences_m extends CI_Model {

	private $updateDate;

	function __construct() {
		parent::__construct();
	}

	function get_website_name()
    {
		$this->db->select('value');
		$this->db->from('sitePreferences');
		$this->db->where('name', 'websiteName');
		$query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result()[0]->value;
        } else {
            return false;
        }
	}

	function get_copyright_info()
    {
		$this->db->select('value');
		$this->db->from('sitePreferences');
		$this->db->where('name', 'copyrightInfo');
		$query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result()[0]->value;
        } else {
            return false;
        }
	}

}
