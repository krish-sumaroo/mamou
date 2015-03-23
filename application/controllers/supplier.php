<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Supplier extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
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
        
        $id = $this->supplier->saveSupplier($saveArr);

        $response = array();

        if($id)
        {
            $response['status'] = 1;
            $response['id'] = $id;
        }
        else
        {
            $response['status'] = 0;
            $response['message'] = 'Problem creating supplier. Please try again';
        }

        echo json_encode($response);
    }
}