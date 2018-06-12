<?php
/**
 * Created by PhpStorm.
 * User: Kidus
 * Date: 3/1/2017
 * Time: 10:23 PM
 */

class Vehicles extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pictures_Model');
    }
    function index()
    {
        $data['vehicles'] = $this->Vehicle->vehicles_customer();
        $data['services'] = $this->Vehicle->vehicle_services();
        $data['cards'] = $this->Job_Card->get_all();
        $this->load->view('templates/header');
        $this->load->view('index/vehicles', $data);
        $this->load->view('templates/footer');
    }
    function job_card()
    {
        $data['title'] = 'Job Card | Garage Management System';
        $id = (int)$this->input->get('id');
        $info = $this->Vehicle->cards($id);
        $data['info'] = $info[0];
        $data['employees'] = $this->Employee_Model->get_all();
        $data['services'] = $this->Card_Service_Model->get_many_by(array('Card_id'=>$id));
        $data['tools'] = $this->Forgotten_Model->get_many_by(array('Card_id'=>$id));
        $data['materials'] = $this->Material_Model->get_many_by(array('Card_id'=>$id));
        $data['cats'] = $this->Lookup_Model->get_many_by(array('Cat'=>'Services'));
        $data['pics'] = $this->Pictures_Model->get_many_by(array('f_id'=>$id));
        if ($this->Estmation_Model->get_by(array('Card_id'=>$id)))
        {
            $data['estimation'] = $this->Estmation_Model->get_by(array('Card_id'=>$id));
            $data['est_parts'] = $this->Estmation_Model->get_estimations($id);
            $data['est_status']='';
        }else{
            $data['est_status']='disabled';
        }
        if ($this->Inspection_Model->get_by(array('Card_id'=>$id)))
        {
            $data['inspection'] = $this->Inspection_Model->get_by(array('Card_id'=>$id));
            $data['ins_parts'] = $this->Inspection_Model->get_inspections($id);
            $data['ins_status']= '';
        }else{
            $data['ins_status']='disabled';
        }
        while (strlen($data['info']['id']) < 4){
            $data['info']['id'] = '0'.$data['info']['id'];
        }
        if($this->input->get('target')=='print'){
            $this->load->view('index/print',$data);
        }elseif ($data['info']['Status'] == 'Terminated')
        {
            $this->load->view('index/terminated',$data);
        }else{
            $this->load->view('index/job_Card',$data);
        }
    }
    function job_cards_list()
    {
        $vehicle_id = $this->input->get('id');
        if (!isset($vehicle_id)){
            $vehicle_id = $this->uri->segment(3);
        }
        $data['cards'] = $this->Job_Card->get_many_by(array('Vehicle_id'=>$vehicle_id));
        $data['services'] = $this->Card_Service_Model->services_by_vehicle($vehicle_id);
        $ctmr = $this->Customer_Model->customer_by_vehicle($vehicle_id);
        $data['customer'] = $ctmr[0];
        $data['vehicle'] = $this->Vehicle->get_by(array('id'=>$vehicle_id));
        $this->load->view('index/job_card_list',$data);
    }
    function vehicle_history()
    {
        $id = $this->input->get('id');
        $data['estimations'] = $this->Vehicle->estimation_history($id);
        $data['inspections'] = $this->Vehicle->inspection_history($id);
        $data['services'] = $this->Vehicle->service_history($id);
        $data['info'] = $this->Vehicle->get_by(array('id'=>$id));
        $count = count($data['services']);
        for ($i = 0;$i < $count; $i++){
            while (strlen($data['services'][$i]['Card_id']) < 4){
                $data['services'][$i]['Card_id'] = '0'.$data['services'][$i]['Card_id'];
            }
        }
        for ($i = 0;$i < count($data['estimations']); $i++){
            while (strlen($data['estimations'][$i]['Card']) < 4){
                $data['estimations'][$i]['Card'] = '0'.$data['estimations'][$i]['Card'];
            }
        }
        for ($i = 0;$i < count($data['inspections']); $i++){
            while (strlen($data['inspections'][$i]['Card']) < 4){
                $data['inspections'][$i]['Card'] = '0'.$data['inspections'][$i]['Card'];
            }
        }
        $this->load->view('index/history',$data);
    }
    function print()
    {

    }
}