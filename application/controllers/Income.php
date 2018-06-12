<?php
/**
 * Created by PhpStorm.
 * User: Kidus
 * Date: 4/3/2017
 * Time: 10:17 PM
 */

class Income extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data['reports'] = $this->Income_Model->get_all();
        $this->load->view('others/income_report',$data);
    }
    function report()
    {
        $this->load->view('others/income_report');
    }
    function add()
    {
        $input = $this->input->post();
        $id = $this->Income_Model->insert($input);
        if ($id)
        {
            redirect(base_url('income/'));
        }
    }
}