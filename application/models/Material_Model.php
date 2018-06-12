<?php
/**
 * Created by PhpStorm.
 * User: Kidus
 * Date: 3/9/2017
 * Time: 2:46 PM
 */

class Material_Model extends MY_Model
{
    protected $_table = 'material';
    protected $primary_key = 'id';
    protected $return_type = 'array';
    function material_report($start, $end)
    {
        $query = $this->db->query("
        select * from material where Card_id IN (SELECT id from card WHERE Release_Date BETWEEN '$start' AND '$end' OR  Receive_Date BETWEEN '$start' AND '$end')
        ");
        return $query->result_array();
    }
    function report_receive($start, $end)
    {
        $query = $this->db->query("
        select * from material where Card_id IN (SELECT id from card WHERE Receive_Date BETWEEN '$start' AND '$end')
        ");
        return $query->result_array();
    }
    function expense_report($start, $end)
    {
        $query = $this->db->query("select * from material where `date` BETWEEN '$start' and '$end'");
        return $query->result_array();
    }
}