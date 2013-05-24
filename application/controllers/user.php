<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_m');
    }

	public function index()
	{
		$this->load->view('main/header');
		//$this->load->view('user/preferences_view',$data);
		$this->load->view('main/footer');
	}
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */
