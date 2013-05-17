<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('blog_m');
	}

	public function index()
	{
		if ($entries = $this->blog_m->get_entry_by_permalink($this->uri->segment_array()[2])) {
			foreach ($entries as $entry) {
				//var_dump($entry);
				$data['entry']['title'] = $entry->title;
				$data['entry']['content'] = $entry->content;
				$data['entry']['userId'] = $entry->userId;
				$data['entry']['permalink'] = $entry->permalink;
			}
			$this->load->view('blog/entry_view',$data);
		}
	}
}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */
