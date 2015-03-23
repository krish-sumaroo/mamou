<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Purchases extends CI_Controller {
    
function  __construct()
{
    parent::__construct();
   
}

public function index()
{
    $supplierId = '1';  //test
    $this->session->set_userdata('supplier',1);

    $this->load->model('products_model','products');
    $prod['prodList'] = $this->products->getProductsForSupplier($supplierId);
    
    $data['productListView'] = $this->load->view('products/products',$prod, true);
    
    $data['transactionView'] = $this->load->view('transaction/index',null, true);
    $data['newProductView'] = $this->load->view('dialogs/product',null,true);
    
    $page['styles'] = array('purchases');
    $page['scripts'] = array('transacModel','transac');
    $page['view'] = $this->load->view('purchases/index',$data, true);
    $this->renderer->renderPage($page);	




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