<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/login
	 *	- or -  
	 * 		http://example.com/index.php/login/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/login/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->library('user_agent');

        $this->load->view('main/header');
        $this->load->view('login_view');
        $this->load->view('main/footer');

	}

	/**
	 * Logout Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/login/logout
	 */
	public function logout()
	{
        // destroy session
        $this->session->sess_destroy();
        // redirect to base_url
        redirect(base_url(),'location');
	}

	/**
	 * Login processor for this controller.
	 *
	 */
	public function process()
	{
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $this->load->model('user_m');
            // validate user
            if ($this->user_m->validate()) {
                redirect('/');
            } else {
                $data['msg'] = 'Username/Password combo is wrong.';
                $this->index();
            }
        }
    }
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */
