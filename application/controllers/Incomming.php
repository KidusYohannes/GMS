<?php
/**
 * Created by PhpStorm.
 * User: Kidus
 * Date: 2/23/2017
 * Time: 2:12 PM
 */

class Incomming extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data['employees'] = $this->Employee_Model->get_all();
        $data['services'] = $this->Lookup_Model->get_many_by(array('Cat'=>'Services'));
        $this->load->view('index/incoming',$data);
    }
    function new_vehicle()
    {
        $data = $this->input->post();
        $customer_input = array(
            'First_Name'=>$data['First_Name'],
            'Last_Name'=>$data['Last_Name'],
            'Sex'=>$data['Sex'],
            'Phone'=>$data['Phone'],
            'R_Date'=>$data['DOB'],
            'Company_Name'=>$data['Company'],
        );
        $customer_id = $this->Customer_Model->insert($customer_input);
        $address = array(
            'Customer_id'=>$customer_id,
            'Region'=>$data['Region'],
            'Subcity'=>$data['Subcity'],
            'Wereda'=>$data['Wereda'],
            'Phone'=>$data['Phone'],
            'Phone_O'=>$data['Phone_O'],
            'Email'=>$data['Email'],
            'Web'=>$data['Web']
        );
        $this->Address_Model->insert($address);
        $vehicle = array(
            'Customer_id'=>$customer_id,
            'Model'=>$data['Model'],
            'Make'=>$data['Make'],
            'Year'=>$data['Year'],
            'Color'=>$data['Color'],
            'Door'=>$data['Door'],
            'VIN_No'=>$data['VIN_No'],
            'Plate_No'=>$data['Plate_No'],
            'Chanssis'=>$data['Chanssis']
        );
        $vehicle_id = $this->Vehicle->insert($vehicle);
        $card = array(
            'Vehicle_id'=>$vehicle_id,
            'Release_Date'=>$data['Release_Date'],
            'Receive_Date'=>$data['Received_Date'],
            'Fuel'=>$data['Fuel'],
            'Millage'=>$data['Millage'],
            'Date'=>date('Y-m-d'),
            'Engine'=>$data['Engine'],
            'Drive'=>$data['Drive'],
            'Transmission'=>$data['Transmission'],
            'injection'=>$data['Injection'],
            'Fuel_Type'=>$data['Fuel_Type'],
            'Tier'=>$data['Tier'],
            'CC'=>$data['CC'],
            'HP'=>$data['HP'],
            'Dig'=>$data['Dig'],
            'Cylinders'=>$data['Cylinders'],
            'Oddo_Meter'=>$data['Oddo']
        );
        $card_id = $this->Job_Card->insert($card);
        $res = true;
        for ($i = 1; $i <= 20; $i++)
        {
            if (!empty($data['Cat_'.$i]) && $data['Cat_'.$i] != 'Choose Category' && $res){
                $card_services = array(
                    'Card_id'=>$card_id,
                    'Type'=>'Customer',
                    'Catagory'=>$data['Cat_'.$i],
                    'Service'=>$data['Spec_'.$i],
                    'Employee_id'=>$data['Employee_'.$i],
                    'Due_Date'=>$data['Due_Date_'.$i],
                    'Remark'=>$data['Remark_'.$i]
                );
                $res = $this->Card_Service_Model->insert($card_services);
                if ($data['Cat_'.$i] == 'Inspection')
                {
                    $insp = array(
                        'Card_id'=>$card_id,
                        'Employee_id'=>$data['Employee_'.$i],
                        'Payment'=>'',
                        'Remark'=>'',
                    );
                    $ins = $this->Inspection_Model->insert($insp);
                }
                if ($data['Cat_'.$i] == 'Estimation')
                {
                    $estm = array(
                        'Card_id'=>$card_id,
                        'Employee_id'=>$data['Employee_'.$i],
                        'Payment'=>'',
                        'Remark'=>'',
                    );
                    $est = $this->Estmation_Model->insert($estm);
                }
            }
        }
        for ($i = 1; $i <= 20; $i++)
        {
            if (!empty($data['Cat_'.$i]) && $data['Cat_'.$i] != 'Choose Category' && $res){
                $card_services = array(
                    'Card_id'=>$card_id,
                    'Type'=>'Professional',
                    'Catagory'=>$data['Cat_'.$i.'_Pro'],
                    'Service'=>$data['Spec_'.$i.'_Pro'],
                    'Employee_id'=>$data['Employee_'.$i.'_Pro'],
                    'Due_Date'=>$data['Due_Date_'.$i.'_Pro'],
                    'Remark'=>$data['Remark_'.$i.'_Pro']
                );
                $res = $this->Card_Service_Model->insert($card_services);
                if ($data['Cat_'.$i] == 'Inspection')
                {
                    $insp = array(
                        'Card_id'=>$card_id,
                        'Employee_id'=>$data['Employee_'.$i.'_Pro'],
                        'Payment'=>'',
                        'Remark'=>'',
                    );
                    $ins = $this->Inspection_Model->insert($insp);
                }
                if ($data['Cat_'.$i] == 'Estimation')
                {
                    $estm = array(
                        'Card_id'=>$card_id,
                        'Employee_id'=>$data['Employee_'.$i.'_Pro'],
                        'Payment'=>'',
                        'Remark'=>'',
                    );
                    $est = $this->Estmation_Model->insert($estm);
                }
            }
        }
        for ($i = 1; $i <= 20; $i++){
            if (!empty($data['Name_'.$i]) && $res){
                $forgotten_tools = array(
                    'Card_id'=>$card_id,
                    'Name'=>$data['Name_'.$i],
                    'Brand'=>$data['Brand_'.$i],
                    'Model'=>$data['Model_'.$i],
                    'Size'=>$data['Size_'.$i],
                    'Remark'=>$data['Remark_'.$i]
                );
                $res = $this->Forgotten_Model->insert($forgotten_tools);
            }
        }
        redirect(base_url().'vehicles/job_card/?id='.$card_id);
    }
    function customer()
    {
        $data['employees'] = $this->Employee_Model->get_all();
        $data['services'] = $this->Lookup_Model->get_many_by(array('Cat'=>'Services'));
        $this->load->view('index/old_customer',$data);
    }
    function old_customer()
    {
        $data = $this->input->post();
        $customer_id = $data['id'];
        $vehicle = array(
            'Customer_id'=>$customer_id,
            'Model'=>$data['Model'],
            'Make'=>$data['Make'],
            'Year'=>$data['Year'],
            'Color'=>$data['Color'],
            'Door'=>$data['Door'],
            'VIN_No'=>$data['VIN_No'],
            'Plate_No'=>$data['Plate_No'],
            'Chanssis'=>$data['Chanssis']
        );
        $vehicle_id = $this->Vehicle->insert($vehicle);
        $card = array(
            'Vehicle_id'=>$vehicle_id,
            'Release_Date'=>$data['Release_Date'],
            'Receive_Date'=>$data['Received_Date'],
            'Fuel'=>$data['Fuel'],
            'Millage'=>$data['Millage'],
            'Date'=>date('Y-m-d'),
            'Engine'=>$data['Engine'],
            'Drive'=>$data['Drive'],
            'Transmission'=>$data['Transmission'],
            'injection'=>$data['Injection'],
            'Fuel_Type'=>$data['Fuel_Type'],
            'Tier'=>$data['Tier'],
            'CC'=>$data['CC'],
            'HP'=>$data['HP'],
            'Dig'=>$data['Dig'],
            'Cylinders'=>$data['Cylinders'],
            'Oddo_Meter'=>$data['Oddo']
        );
        $card_id = $this->Job_Card->insert($card);
        $res = true;
        for ($i = 1; $i <= 20; $i++)
        {
            if (!empty($data['Cat_'.$i]) && $data['Cat_'.$i] != 'Choose Category' && $res){
                $card_services = array(
                    'Card_id'=>$card_id,
                    'Type'=>'Customer',
                    'Catagory'=>$data['Cat_'.$i],
                    'Service'=>$data['Spec_'.$i],
                    'Employee_id'=>$data['Employee_'.$i],
                    'Due_Date'=>$data['Due_Date_'.$i]
                );
                $res = $this->Card_Service_Model->insert($card_services);
                if ($data['Cat_'.$i] == 'Inspection')
                {
                    $insp = array(
                        'Card_id'=>$card_id,
                        'Employee_id'=>$data['Employee_'.$i],
                        'Payment'=>'',
                        'Remark'=>'',
                    );
                    $ins = $this->Inspection_Model->insert($insp);
                }
                if ($data['Cat_'.$i] == 'Estimation')
                {
                    $estm = array(
                        'Card_id'=>$card_id,
                        'Employee_id'=>$data['Employee_'.$i],
                        'Payment'=>'',
                        'Remark'=>'',
                    );
                    $est = $this->Estmation_Model->insert($estm);
                }
            }
        }
        for ($i = 1; $i <= 20; $i++)
        {
            if (!empty($data['Cat_'.$i]) && $data['Cat_'.$i] != 'Choose Category' && $res){
                $card_services = array(
                    'Card_id'=>$card_id,
                    'Type'=>'Professional',
                    'Catagory'=>$data['Cat_'.$i.'_Pro'],
                    'Service'=>$data['Spec_'.$i.'_Pro'],
                    'Employee_id'=>$data['Employee_'.$i.'_Pro'],
                    'Due_Date'=>$data['Due_Date_'.$i.'_Pro']
                );
                $res = $this->Card_Service_Model->insert($card_services);
                if ($data['Cat_'.$i] == 'Inspection')
                {
                    $insp = array(
                        'Card_id'=>$card_id,
                        'Employee_id'=>$data['Employee_'.$i.'_Pro'],
                        'Payment'=>'',
                        'Remark'=>'',
                    );
                    $ins = $this->Inspection_Model->insert($insp);
                }
                if ($data['Cat_'.$i] == 'Estimation')
                {
                    $estm = array(
                        'Card_id'=>$card_id,
                        'Employee_id'=>$data['Employee_'.$i.'_Pro'],
                        'Payment'=>'',
                        'Remark'=>'',
                    );
                    $est = $this->Estmation_Model->insert($estm);
                }
            }
        }
        for ($i = 1; $i <= 20; $i++){
            if (!empty($data['Name_'.$i]) && $res){
                $forgotten_tools = array(
                    'Card_id'=>$card_id,
                    'Name'=>$data['Name_'.$i],
                    'Brand'=>$data['Brand_'.$i],
                    'Model'=>$data['Model_'.$i],
                    'Size'=>$data['Size_'.$i],
                    'Remark'=>$data['Remark_'.$i]
                );
                $res = $this->Forgotten_Model->insert($forgotten_tools);
            }
        }
        redirect(base_url().'vehicles/job_card/?id='.$card_id);
    }
    function vehicle()
    {
        $data['employees'] = $this->Employee_Model->get_all();
        $data['services'] = $this->Lookup_Model->get_many_by(array('Cat'=>'Services'));
        $this->load->view('index/old_vehicle', $data);
    }
    function old_vehicle()
    {
        $data = $this->input->post();
        $vehicle_id = $data['id'];
        $card = array(
            'Vehicle_id'=>$vehicle_id,
            'Release_Date'=>$data['Release_Date'],
            'Receive_Date'=>$data['Received_Date'],
            'Fuel'=>$data['Fuel'],
            'Millage'=>$data['Millage'],
            'Date'=>date('Y-m-d'),
            'Engine'=>$data['Engine'],
            'Drive'=>$data['Drive'],
            'Transmission'=>$data['Transmission'],
            'injection'=>$data['Injection'],
            'Fuel_Type'=>$data['Fuel_Type'],
            'Tier'=>$data['Tier'],
            'CC'=>$data['CC'],
            'HP'=>$data['HP'],
            'Dig'=>$data['Dig'],
            'Cylinders'=>$data['Cylinders'],
            'Oddo_Meter'=>$data['Oddo']
        );
        $card_id = $this->Job_Card->insert($card);
        $res = true;
        for ($i = 1; $i <= 20; $i++)
        {
            if (!empty($data['Cat_'.$i]) && $data['Cat_'.$i] != 'Choose Category' && $res){
                $card_services = array(
                    'Card_id'=>$card_id,
                    'Type'=>'Customer',
                    'Catagory'=>$data['Cat_'.$i],
                    'Service'=>$data['Spec_'.$i],
                    'Employee_id'=>$data['Employee_'.$i],
                    'Due_Date'=>$data['Due_Date_'.$i]
                );
                $res = $this->Card_Service_Model->insert($card_services);
                if ($data['Cat_'.$i] == 'Inspection')
                {
                    $insp = array(
                        'Card_id'=>$card_id,
                        'Employee_id'=>$data['Employee_'.$i],
                        'Payment'=>'',
                        'Remark'=>'',
                    );
                    $ins = $this->Inspection_Model->insert($insp);
                }
                if ($data['Cat_'.$i] == 'Estimation')
                {
                    $estm = array(
                        'Card_id'=>$card_id,
                        'Employee_id'=>$data['Employee_'.$i],
                        'Payment'=>'',
                        'Remark'=>'',
                    );
                    $est = $this->Estmation_Model->insert($estm);
                }
            }
        }
        for ($i = 1; $i <= 20; $i++)
        {
            if (!empty($data['Cat_'.$i]) && $data['Cat_'.$i] != 'Choose Category' && $res){
                $card_services = array(
                    'Card_id'=>$card_id,
                    'Type'=>'Professional',
                    'Catagory'=>$data['Cat_'.$i.'_Pro'],
                    'Service'=>$data['Spec_'.$i.'_Pro'],
                    'Employee_id'=>$data['Employee_'.$i.'_Pro'],
                    'Due_Date'=>$data['Due_Date_'.$i.'_Pro']
                );
                $res = $this->Card_Service_Model->insert($card_services);
                if ($data['Cat_'.$i] == 'Inspection')
                {
                    $insp = array(
                        'Card_id'=>$card_id,
                        'Employee_id'=>$data['Employee_'.$i.'_Pro'],
                        'Payment'=>'',
                        'Remark'=>'',
                    );
                    $ins = $this->Inspection_Model->insert($insp);
                }
                if ($data['Cat_'.$i] == 'Estimation')
                {
                    $estm = array(
                        'Card_id'=>$card_id,
                        'Employee_id'=>$data['Employee_'.$i.'_Pro'],
                        'Payment'=>'',
                        'Remark'=>'',
                    );
                    $est = $this->Estmation_Model->insert($estm);
                }
            }
        }
        for ($i = 1; $i <= 20; $i++){
            if (!empty($data['Name_'.$i]) && $res){
                $forgotten_tools = array(
                    'Card_id'=>$card_id,
                    'Name'=>$data['Name_'.$i],
                    'Brand'=>$data['Brand_'.$i],
                    'Model'=>$data['Model_'.$i],
                    'Size'=>$data['Size_'.$i],
                    'Remark'=>$data['Remark_'.$i]
                );
                $res = $this->Forgotten_Model->insert($forgotten_tools);
            }
        }
        redirect(base_url().'vehicles/job_card/?id='.$card_id);
    }
}