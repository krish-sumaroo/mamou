<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products_model extends CI_Model {

    public function getProductsForSupplier($supplier)
    {
       $this->db->select('p.name as name, p.model as model, p.size as size, p.id as id');
       $this->db->from('product p');
       $this->db->join('product_supplier ps', 'ps.product_id = p.id');
       $this->db->where('ps.supplier_id', $supplier);
       $query = $this->db->get();

       log_message('error', 'query =>'.$this->db->last_query());

       if ($query->num_rows() > 0)
        {
           $result = array();
           foreach ($query->result() as $row)
           {             
               $result[] = array(
                 'id' => $row->id,  
                 'name' => $row->name,
                 'model' => $row->model,
                 'size' => $row->size
             );
           }
           return $result;
        }
        else 
        {
            return false;
        }
    }
    
    public function addProduct($product)
    {

        $this->db->insert('product', $product); 

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
    
    public function addProductToSupplier($productAr)
    {
        $this->db->insert('product_supplier', $productAr);
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