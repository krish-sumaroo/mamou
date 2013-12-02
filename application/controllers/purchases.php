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
	$supplierId = '1';  //test

	$this->load->model('products_model','products');
	$prodList = $this->products->getProductsForSupplier($supplierId);


	log_message('error', 'prod list =>'.print_r($prodList, true));
	$page['searchTxt'] = json_encode($this->_buildSearch($prodList));
	$page['scripts'] = array('typeahead','search');
	$page['styles'] = array('typeahead');
	$page['view'] = $this->load->view('products/products','', true);
	$this->renderer->renderPage($page);	
}

private function _buildSearch($data)
{
	$searchArray = array();
	foreach ($data as  $value) {
		$searchTxt = $value['name']." : ".$value['model']." (".$value['size'].")"; 
		$searchArray[] = array('reference' => 'usr_'.$value['id'],
                                       'searchTxt' => $searchTxt);
	}

	return $searchArray;
}


}