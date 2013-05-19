<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('blog_m');
	}

	public function index()
	{
		if (isset($this->uri->segment_array()[2]) && $entries = $this->blog_m->get_entry_by_permalink($this->uri->segment_array()[2])) {
			foreach ($entries as $entry) {
				foreach ($entry as $k => $v) {
					$data['entry'][$k] = $v;
				}
			}
			$data['title'] = $data['entry']['title'];
			$this->load->view('main/header',$data);
            //var_dump($data);
			$this->load->view('blog/entry_view',$data);
			$this->load->view('main/footer',$data);
		}
	}
}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */
