<?php
/**
 * Created by PhpStorm.
 * User: Kidus
 * Date: 3/9/2017
 * Time: 2:25 PM
 */

class Customer_Model extends MY_Model
{
    protected $_table = 'customer';
    protected $primary_key = 'id';
    protected $return_type = 'array';

    /**
     * @param String $vehicle_id
     * @return mixed
     */
    function customer_by_vehicle(String $vehicle_id)
    {
        $query = $this->db->query("
            select * from customer where id = (SELECT Customer_id from vehicles where id = '$vehicle_id')
        ");
        return $query->result_array();
    }

    /**
     * @return mixed
     */
    function report( $start, $end)
    {
        $query = $this->db->query("
            select * , (select count(id) from vehicles where Customer_id = customer.id) as Counter from customer where R_Date BETWEEN '$start' AND '$end' order by id DESC ;
        ");
        return $query->result_array();
    }

    function all_customers()
    {
        $query = $this->db->query("select * , (select count(id) from vehicles where Customer_id = customer.id) as Counter from customer ORDER BY id DESC");
        return $query->result_array();
    }
}