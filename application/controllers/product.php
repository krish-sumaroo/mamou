<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function addProduct()
    {
        $this->load->model('products_model','product');
        $name = $this->input->post('name');
        $model = $this->input->post('model');
        $size = $this->input->post('size');
        
        $saveArray = array(
            'name' => $name,
            'model' => $model,
            'size'  => $size
        );
        
        $newProdId = $this->product->addProduct($saveArray);
        if($newProdId)
        {
            $prodSupArr = array(
                'product_id' => $newProdId,
                'supplier_id'=> $this->session->userdata('supplier'),
                'notes' => $this->input->post('notes')
            );
            //add to product_supplier
            $this->product->addProductToSupplier($prodSupArr);
            $response['status'] = 1;
            $response['id'] = $newProdId;
        }
        else 
        {
           $response['status'] = 0;
           $response['message'] = 'Problem creating product. Please try again'; 
        }
        
       echo json_encode($response);
    }
}