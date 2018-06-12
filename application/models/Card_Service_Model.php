<?php
/**
 * Created by PhpStorm.
 * User: Kidus
 * Date: 3/9/2017
 * Time: 2:44 PM
 */

class Card_Service_Model extends MY_Model
{
    protected $_table = 'card_services';
    protected $primary_key = 'id';
    protected $return_type = 'array';

    /**
     * @param int $vehicle_id
     */
    function services_by_vehicle(String $vehicle_id)
    {
        $query = $this->db->query("
                select * from card_services where Card_id IN (select id from card WHERE Vehicle_id = '$vehicle_id')
        ");
        return $query->result_array();
    }
}