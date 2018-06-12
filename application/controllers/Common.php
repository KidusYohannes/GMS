<?php
/**
 * Created by PhpStorm.
 * User: Kidus
 * Date: 2/23/2017
 * Time: 9:34 AM
 */

class Common extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    function form()
    {
        $this->load->view('templates/header');
        $this->load->view('common/form');
        $this->load->view('templates/footer');
    }
    function tabs()
    {
        $this->load->view('templates/header');
        $this->load->view('common/tabs');
        $this->load->view('templates/footer');
    }
    function table()
    {
        $this->load->view('templates/header');
        $this->load->view('common/tables');
        $this->load->view('templates/footer');
    }
}