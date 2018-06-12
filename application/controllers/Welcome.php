<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
	{
	    $data['materials'] = $this->Material_Model->get_many_by(array('Status'=>'Pending'));
        $data['due_vehicles'] = $this->Vehicle->vehicles_customers(date('Y/m/d', strtotime("+5 days")), date('Y/m/d'));
        $data['done_vehicles'] = $this->Vehicle->done_vehicles();
        $data['past_vehicles'] = $this->Vehicle->past_vehicles(date('Y/m/d'));
        $data['Employees'] = $this->Employee_Model->get_many_by(array('Status'=>'New'));
        $data['cards'] = $this->Job_Card->get_all();
		$this->load->view('dashboard',$data);
		/*print_r($data['due_vehicles']);*/
		/*echo date('Y/m/d', strtotime("-10 years"));*/
	}
	function add_new()
    {
        $this->load->view('dashboard_2');
    }
}
