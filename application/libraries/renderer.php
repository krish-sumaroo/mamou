<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Renderer
{
	function __construct()
	{
		$this->CI =& get_instance();
	}

	public function renderPage($view)
	{
		log_message('error', 'here');
		$tmp['topBar'] = $this->CI->load->view('main/topBar',null,true);
		$tmp['body'] = $view;

		$this->CI->load->view('main',$tmp);
	}


}
