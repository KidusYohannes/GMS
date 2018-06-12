<?php
/**
 * Created by PhpStorm.
 * User: Kidus
 * Date: 11/3/2017
 * Time: 7:16 PM
 */

class Users_Model extends MY_Model
{
    protected $_table = 'user';
    protected $primary_key = 'User_Id';
    protected $return_type = 'array';
    function delete($id)
    {
        $query = $this->db->query("DELETE FROM user where User_Id = $id");
        if ($query){
            return true;
        }else{
            return false;
        }
    }

}