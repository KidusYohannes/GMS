<?php
/**
 * Created by PhpStorm.
 * User: Kidus
 * Date: 3/15/2017
 * Time: 4:20 PM
 */

class Report extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    function customer()
    {
        $data = array(
            'title'=>'Customers',
            'form'=>'customer_reports'
        );
        $this->load->view('report/period', $data);
    }
    function vehicles()
    {
        $data = array(
            'title'=>'Vehicles',
            'form'=>'vehicles_reports'
        );
        $this->load->view('report/period', $data);
    }
    function material()
    {
        $data = array(
            'title'=>'Material',
            'form'=>'materials_reports'
        );
        $this->load->view('report/period', $data);
    }
    function customer_reports()
    {
        $start = date('Y-m-d', strtotime($this->input->post('Start', true)));
        $end = date('Y-m-d', strtotime($this->input->post('End', true)));
        /*$data['customers'] = $this->Customer_Model->get_all();*/
        $data['customers'] = $this->Customer_Model->report($start, $end);
        $data['start'] = $start;
        $data['end'] = $end;
        $this->load->view('report/customer',$data);
    }
    function vehicles_reports()
    {
        $start = date('Y-m-d', strtotime($this->input->post('Start', true)));
        $end = date('Y-m-d', strtotime($this->input->post('End', true)));
        $data['vehicles'] = $this->Vehicle->vehicles_customers($start, $end);
        $data['cards'] = $this->Job_Card->get_all();
        $data['start'] = $start;
        $data['end'] = $end;
        $this->load->view('report/vehicles',$data);
    }
    function materials_reports()
    {
        $start = date('Y-m-d', strtotime($this->input->post('Start', true)));
        $end = date('Y-m-d', strtotime($this->input->post('End', true)));
        $data['materials'] = $this->Material_Model->material_report($start, $end);
        $data['start'] = $start;
        $data['end'] = $end;
        $this->load->view('report/material',$data);
    }
    function income_and_expense()
    {
        $data = array(
            'title'=>'Income',
            'form'=>'income_and_expense_reports'
        );
        $this->load->view('report/period', $data);
    }
    function income_and_expense_reports()
    {
        $start = date('Y-m-d', strtotime($this->input->post('Start', true)));
        $end = date('Y-m-d', strtotime($this->input->post('End', true)));
        $data['start'] = $start;
        $data['end'] = $end;
        $data['income'] = $this->Job_Card->income_report($start, $end);
        $data['expense'] = $this->Material_Model->expense_report($start, $end);
        $this->load->view('report/income_and_expense_reports',$data);
    }
    function income_reports()
    {
        $start = date('Y-m-d', strtotime($this->input->post('Start', true)));
        $end = date('Y-m-d', strtotime($this->input->post('End', true)));
        $data = $this->Job_Card->income_report($start, $end);

    }
    function expense()
    {
        $data = array(
            'title'=>'Expense',
            'form'=>'expense_reports'
        );
        $this->load->view('report/period', $data);
    }
    function expense_reports()
    {

    }
    function check()
    {
        $this->load->view('report/period');
    }
}