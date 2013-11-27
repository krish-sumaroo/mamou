<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Supplier_model extends CI_Model {
    
    
    public function saveSupplier($save)
    {
        $this->db->insert('supplier', $save); 
    }
}