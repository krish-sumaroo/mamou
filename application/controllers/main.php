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
            $data['newSupplierView'] = $this->load->view('dialogs/supplier',$supData, true);
            $data['newVisitView'] = $this->load->view('dialogs/visit','', true);
            log_message('error', 'days'.print_r($this->calendar, true));
            
            $this->load->view('landing',$data);
	}
}
