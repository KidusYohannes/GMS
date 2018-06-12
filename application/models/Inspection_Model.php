<?php
/**
 * Created by PhpStorm.
 * User: Kidus
 * Date: 3/15/2017
 * Time: 9:57 AM
 */

/**
 * Class Inspection_Model
 */
class Inspection_Model extends MY_Model
{
    protected $_table = 'inspection';
    protected $primary_key = 'id';
    protected $return_type = 'array';

    /**
     * @param String $card_id
     * @return mixed
     */
    function get_inspections(String $card_id)
    {
        $query = $this->db->query("
                select * from ins_problems where Ins_id = (select id from inspection where Card_id = '$card_id')
        ");
        return $query->result_array();
    }
}