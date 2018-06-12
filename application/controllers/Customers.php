<?php
/**
 * Created by PhpStorm.
 * User: Kidus
 * Date: 5/4/2017
 * Time: 11:35 AM
 */

class Customers extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data['customers'] = $this->Customer_Model->all_customers();
        $this->load->view('report/all_customers', $data);
    }
    function edit()
    {
        $id = $this->input->post('id', true);
        $customer = $this->Customer_Model->get_by(array('id'=>$id));
        $address = $this->Address_Model->get_by(array('Customer_id'=>$id));
        $data = array_merge($customer, $address);
        echo json_encode($customer);
        echo '__#__';
        echo json_encode($address);
    }
    function update()
    {
        $input = array(
            'First_Name'=>$this->input->post('First_Name', true),
            'Last_Name'=>$this->input->post('Last_Name', true),
            'Sex'=>$this->input->post('Sex', true),
            'Phone'=>$this->input->post('Phone', true),
            'Company_Name'=>$this->input->post('Company_Name', true),
        );
        $address = array(
            'Region'=>$this->input->post('Region', true),
            'Subcity'=>$this->input->post('Subcity', true),
            'Wereda'=>$this->input->post('Wereda', true),
            'Phone'=>$this->input->post('Phone', true),
            'Phone_O'=>$this->input->post('Phone_O', true),
            'Email'=>$this->input->post('Email', true),
            'Web'=>$this->input->post('Web', true),
        );
        $id = $this->input->post('id', true);
        $this->Customer_Model->update_by(array('id'=>$id), $input);
        $this->Address_Model->update_by(array('Customer_id'=>$id), $address);
        redirect(base_url().'customers/');
    }
    function delete()
    {

    }
    function activate()
    {

    }
}