<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('contact_m');
	}

	public function index()
	{
        //$data['title'] = $data['entry']['title'];
        //var_dump($data);

        $this->load->view('main/header');
        $this->load->view('contact_view');
        $this->load->view('main/footer');
	}

    public function submit()
    {
        $this->load->view('main/header');
        $this->load->view('contact_view');
        $this->load->view('main/footer');
    }


}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */
