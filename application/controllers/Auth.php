<?php
/**
 * Created by PhpStorm.
 * User: Kidus
 * Date: 6/7/2018
 * Time: 11:20 AM
 */

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        if ($this->session->User_Name){
            redirect('auth/logout');
        }
        if ($this->input->get('msg')) {
            $data['msg'] = 'err';
            $this->load->view('auth/login',$data);
        }else{
            $this->load->view('auth/login');
        }
    }
    function logout()
    {
        session_destroy();
        redirect('auth');
    }
    function check_credentials()
    {
        if ($this->input->post()) {
            $User_Name = $this->input->post('User_Name');
            $Password = $this->input->post('Password');
            $data['user'] = $this->Users_Model->get_by(array('User_Name'=> $User_Name,'Password'=>md5($Password)));
            if ($data['user'])
            {
                $this->session->set_userdata($data['user']);
                /*var_dump($data['user']);*/
                /*$this->load->view('users/'.$data['user']['User_Type'].'/dashboard', $data);*/
                redirect('welcome');

            } else{
                redirect('auth/?msg=err');
            }
        }
    }
    function change_Password()
    {
        $data['ctr'] = 'profile';
        $data['msg'] = 'nthg';
        if ($this->input->get('not_matched')){
            $data['msg'] = $this->input->get('not_matched');
        }
        $this->load->view('profile/change_password', $data);

        if ($this->input->post())
        {
            $pswd1 = $this->input->post('Password_1');
            $pswd2 = $this->input->post('Password_2');
            if ($pswd1 == $pswd2)
            {
                $input = array(
                    'Password' => md5($pswd1)
                );
                $res = $this->Users_Model->update(array('User_Id'=>$this->session->userdata('User_ID')), $input);
                if ($res)
                {
                    redirect('profile/view');
                }
            }
            else
            {
                redirect('profile/change_password/?msg=not_matched');
            }
        }
    }
    function check_security_answer()
    {
        $data['msg'] = $this->input->get('msg');
        $data['user'] = $this->Users_Model->get_by(array('User_ID'=>$this->session->userdata('User_Id')));
        $this->load->view('profile/confirm', $data);

        if ($this->input->post('answer'))
        {
            if (md5($this->input->post('answer')) == $data['user']['Security_Answer'])
            {
                redirect('auth/change_Password');
            }
            else
            {
                redirect('auth/check_security_answer/?msg=err');
            }
        }
    }
    function update()
    {
        $user_id = $this->session->userdata('User_Id');
        $data = $this->input->post();
        /*echo $user_id;*/
        $res = $this->Users_Model->update_by(array('User_Id' => $user_id), $data);
        if ($res) {
            redirect('auth');
        }
    }
    function security_question()
    {
        $user_id = $this->session->userdata('User_Id');
        $data['user'] = $this->Users_Model->get_by(array('User_Id' => $user_id));

        $this->load->view('profile/security_question', $data);

        $input = $this->input->post();
        if ($input) {
            $res = $this->Users_Model->update(array('User_Id' => $this->session->userdta('User_Id')), $input);
            if ($res)
            {
                redirect('dashboard');
            }
        }
    }
}