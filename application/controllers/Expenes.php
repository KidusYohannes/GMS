<?php
/**
 * Created by PhpStorm.
 * User: Kidus
 * Date: 4/3/2017
 * Time: 10:18 PM
 */

class Expenes extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data['reports'] = $this->Expens_Model->get_all();
        $this->load->view('others/expense_report',$data);
    }
    function report()
    {
        $this->load->view('others/expense_report');
    }
    function add()
    {
        $input = $this->input->post();
        $id = $this->Expens_Model->insert($input);
        redirect(base_url('expenes/'));
    }

}