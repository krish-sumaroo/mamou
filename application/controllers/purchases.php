<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Purchases extends CI_Controller {


public function index($id=null)
{
	if(!isset($id))
	{
		echo "redirect";
	}

	//get products for this supplier





}

public function test()
{
	$this->load->view('purchases','');
}


}