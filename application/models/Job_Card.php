<?php
/**
 * Created by PhpStorm.
 * User: Kidus
 * Date: 3/1/2017
 * Time: 10:39 PM
 */

class Job_Card extends MY_Model
{
    protected $_table = 'card';
    protected $primary_key = 'id';
    protected $return_type = 'array';
    function active_cards()
    {
    	$query = $this->db->query("
    		select
    		(select First_Name from customer where id = (SELECT Customer_id from vehicles where id = c.Vehicle_id)) as First_Name,
            (select Last_Name from customer where id = (SELECT Customer_id from vehicles where id = c.Vehicle_id)) as Last_Name,
            (select R_Date from customer where id = (SELECT Customer_id from vehicles where id = c.Vehicle_id)) as Dob,
            (select Phone from customer where id = (SELECT Customer_id from vehicles where id = c.Vehicle_id)) as Phone,
            (Select Model from vehicles where id = c.Vehicle_id) as Model,
            (Select Plate_No from vehicles where id = c.Vehicle_id) as Plate_No,
            (Select Make from vehicles where id = c.Vehicle_id) as Make,
            (Select `Year` from vehicles where id = c.Vehicle_id) as `Year`,
            (Select Color from vehicles where id = c.Vehicle_id) as Color,
            (Select Door from vehicles where id = c.Vehicle_id) as Door,
            c.id,
            c.Fuel,
            c.Millage,
            c.Receive_Date,
            c.Release_Date,
            c.Status,
            c.Payment
    		from 
    		(select * from card where `Status` = 'Workshop') as c
    		");
    	return $query->result_array();
    }
    function income_report($start, $end)
    {
        $query = $this->db->query("select * from card where card.Release_Date BETWEEN '$start' and '$end' OR card.Receive_Date BETWEEN '$start' and '$end'");
        return $query->result_array();
    }
}