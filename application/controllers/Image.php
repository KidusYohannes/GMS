<?php
/**
 * Created by PhpStorm.
 * User: Kidus
 * Date: 4/13/2017
 * Time: 2:51 PM
 */

class Image extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pictures_Model');
    }
    function index()
    {
        $GLOBALS['id'] = (int)$this->input->get('id', true);
        $data['id'] = (int)$this->input->get('id', true);
        $card = $this->Job_Card->get_by(array('id'=>$data['id']));
        $vahicle = $this->Vehicle->get_by(array('id'=>$card['Vehicle_id']));
        $data['c_id'] = $vahicle['Customer_id'];
        $data['v_id'] = $vahicle['id'];
        $this->load->view('index/image',$data);
    }
    public function do_upload()
    {
        $data1 = array();
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']        = md5(date('r'));
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('input_img'))
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('index/image', $error);
        }
        else
        {
            /*rename($this->upload->data('full_path'), $this->upload->data('file_path').date('Y-m-d H:i:s:u').'.'.substr($this->upload->data('file_type'), 6));*/
            $data['upload_data'] = $this->upload->data('file_name');
        }
        /*$data['upload_data'] = $data1;*/
        if ($this->input->post('Type', true)=='Customer')
        {
            $input = array(
                'type'=>$this->input->post('Type', true),
                'f_id'=>$this->input->post('c_id', true),
                'picture'=>$data['upload_data']
            );
        }else{
            $input = array(
                'type'=>$this->input->post('Type', true),
                'f_id'=>$this->input->post('v_id', true),
                'picture'=>$data['upload_data']
            );
        }
        $this->Pictures_Model->insert($input);
        $data['id'] = $this->input->post('id', true);
        $data['c_id'] = $this->input->post('c_id', true);
        $data['v_id'] = $this->input->post('v_id', true);
        $this->load->view('index/image', $data);
    }
}