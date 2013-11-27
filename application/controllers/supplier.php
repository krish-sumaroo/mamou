<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Supplier extends CI_Controller {
    
    
    public function test()
    {
        echo "fuck you";
    }
    
    
    public function addSupplier()
    {
        $this->load->model('supplier_model','supplier');
        $postedVals = $this->input->post('elements');
        $postedValsArr = json_decode($postedVals);
        $saveArr = array();
        foreach ($postedValsArr as $posts) {
            $saveArr[$posts->name] = $posts->value;
        }
        
        $this->supplier->saveSupplier($saveArr);
    }
}