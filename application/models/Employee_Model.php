<?php
/**
 * Created by PhpStorm.
 * User: Kidus
 * Date: 4/3/2017
 * Time: 10:23 PM
 */

class Employee_Model extends MY_Model
{
    protected $_table = 'employee';
    protected $primary_key = 'id';
    protected $return_type = 'array';
    function get_attendance()
    {
        $query = $this->db->query("
        select *, (SELECT count(id) from attendance where Employee_id = employee.id and Status = 'Ab' and `Month` = ".date('m').") as Counter from employee
        ");
        return $query->result_array();
    }
    function get_attendance_monthly($month)
    {
        $query = $this->db->query("
        select *, (SELECT count(id) from attendance where Employee_id = employee.id and Status = 'Ab' and `Month` = ".$month.") as Counter from employee
        ");
        return $query->result_array();
    }
    function attendance()
    {
        $query = $this->db->query(
            "Select * from employee where Status = 'New' OR Status = 'Active'"
        );
        return $query->result_array();
    }
}