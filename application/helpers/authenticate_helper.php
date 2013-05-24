<?php

if (! function_exists('authenticate') )
{
    function authenticate()
    {
        $CI =& get_instance();
        if (! $CI->session->userdata('logged_in'))
        {
            $CI->session->set_userdata('last_page', current_url());
            redirect('login','refresh');
        }
    }
}
