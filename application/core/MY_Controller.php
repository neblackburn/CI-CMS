<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public $data = array();

	function __construct()
	{
		parent::__construct();
        $this->load->model('site_preferences_m');
        //$data['website_name'] = $this->site_preferences_m->get_website_name();
        define('WEBSITE_NAME', $this->site_preferences_m->get_website_name());
        define('COPYRIGHT_INFO', $this->site_preferences_m->get_copyright_info());
        //var_dump(WEBSITE_NAME);
	}
}
