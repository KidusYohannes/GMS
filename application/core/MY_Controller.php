<?php
/**
 * Created by PhpStorm.
 * User: Kidus
 * Date: 6/7/2018
 * Time: 11:16 AM
 */

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->session_checker();
    }
    function session_checker()
    {
        $user = $_SESSION['User_Type'];
        if ($user != '') {
            return true;
        }else{
            redirect('auth');
        }
    }
}