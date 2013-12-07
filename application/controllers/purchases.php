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
	$data['prodList'] = $this->products->getProductsForSupplier($supplierId);
	$page['view'] = $this->load->view('products/products',$data, true);
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

        log_message('error', 'log  =>' . print_r($searchArray, true));
	return $searchArray;
}


}