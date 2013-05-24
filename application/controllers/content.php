<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content extends MY_Controller {

	/**
	 * Since we dont want ppl accessing this directly we'll
     * give a 404 if they try to access it directly
	 */
	public function index()
	{
        show_404();
	}

	/**
	 * (C)RUD Function for Content
	 */
	public function create()
	{
        // authenticate to make sure we are allowed to create
        authenticate();
	}

	/**
	 * C(R)UD Function for Content
	 */
	public function read()
	{
        // we do not need to authenticate (unless we make some hidden for some special purpose)
        // will look at adding that soon.
        //authenticate();
	}

	/**
	 * CR(U)D Function for Content
	 */
	public function update()
	{
        // authenticate to make sure we are allowed to update
        authenticate();
	}

	/**
	 * CRU(D) Function for Content
	 */
	public function delete()
	{
        // authenticate to make sure we are allowed to delete
        authenticate();
	}

}

/* End of file content.php */
/* Location: ./application/controllers/content.php */
