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
    
    public function getSupplierForDate($date)
    {
       $query = $this->db->get_where('supplier', array('dayVisit' => $date));

       if ($query->num_rows() > 0)
        {
           $result = array();
           foreach ($query->result() as $row)
           {             
               $result[] = array(
                 'id' => $row->id,  
                 'name' => $row->name,
                 'notes' => $row->notes
             );
           }
           return $result;
        }
        else 
        {
            return false;
        }

    }
}