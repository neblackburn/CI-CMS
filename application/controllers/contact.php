<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('contact_m');
	}

	public function index()
	{
        $data['title'] = $data['entry']['title'];
        //var_dump($data);

        $this->load->view('main/header',$data);
        $this->load->view('blog/contact_view',$data);
        $this->load->view('main/footer',$data);
	}


}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */
