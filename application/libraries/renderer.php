<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Renderer
{
	function __construct()
	{
		$this->CI =& get_instance();
	}

	public function renderPage($view)
	{
		log_message('error', 'here =>'.print_r($view, true));
		$view['topBar'] = $this->CI->load->view('main/topBar',null,true);
		$this->CI->load->view('main',$view);
	}


}
