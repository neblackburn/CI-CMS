<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('pages_m');
	}

	public function index()
	{
        //var_dump($this->uri->uri_string());
		if ($pages = $this->pages_m->get_page_by_permalink($this->uri->uri_string())) {
			foreach ($pages as $page) {
				foreach ($page as $k => $v) {
					$data['page'][$k] = $v;
				}
			}
			$data['title'] = $data['page']['title'];
			$this->load->view('main/header',$data);
			$this->load->view('pages/page_view',$data);
			$this->load->view('main/footer',$data);
		} else {
            show_404();
        }
	}
}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */
