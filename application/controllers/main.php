<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
    
    function  __construct(){
    parent::__construct();
    $this->calendar = $this->config->item('weekDays');
    date_default_timezone_set('America/Los_Angeles');
    }

    public function index()
    {
        $supData['days'] = $this->calendar;

        // get suppliers for today
        $today = array_search(date('l'), $this->calendar);
        $supData['today'] = $today;

        $this->load->model('supplier_model','supplier');
        $data['suppliers'] = $this->supplier->getSupplierForDate($today);
        $data['newSupplierView'] = $this->load->view('dialogs/supplier',$supData, true);
        $data['newVisitView'] = $this->load->view('dialogs/visit','', true);

        
        
        $data['styles'] = array('visit');
        $data['scripts'] = array('visit');
        $data['view'] = $this->load->view('visit',$data, true);
        $this->renderer->renderPage($data);
    }
}
