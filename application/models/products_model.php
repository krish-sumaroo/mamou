<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products_model extends CI_Model {

	public function getProductsForSupplier($supplier)
  {
       $query = $this->db->get_where('products', array('supplier_id' => $supplier));

       if ($query->num_rows() > 0)
        {
           $result = array();
           foreach ($query->result() as $row)
           {             
               $result[] = array(
                 'id' => $row->id,  
                 'name' => $row->name,
                 'model' => $row->model,
                 'size' => $row->size,
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