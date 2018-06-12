<?php 
/**
* 
*/
class Job_Cards extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data['cards'] = $this->Job_Card->active_cards();
        $data['services'] = $this->Card_Service_Model->get_all();
        $this->load->view('index/active_cards',$data);
        /*var_dump($data['cards']);*/
    }
}