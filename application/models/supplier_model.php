<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Supplier_model extends CI_Model {
    
    
    public function saveSupplier($save)
    {
        $this->db->insert('supplier', $save); 

        if($this->db->affected_rows())
        {
            $id = $this->db->insert_id();
            return $id;
        }
        else
        {
            return false;
        }
    }
}