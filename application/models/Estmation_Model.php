<?php
/**
 * Created by PhpStorm.
 * User: Kidus
 * Date: 3/15/2017
 * Time: 9:58 AM
 */

/**
 * Class Estmation_Model
 */
class Estmation_Model extends MY_Model
{
    protected $_table = 'estimation';
    protected $primary_key = 'id';
    protected $return_type = 'array';

    /**
     * @param String $card_id
     * @return mixed
     */
    function get_estimations(String $card_id)
    {
        $query = $this->db->query("
                select * from est_parts where Est_id = (select id from estimation where Card_id = '$card_id')
        ");
        return $query->result_array();
    }
    function estimation_history($id)
    {
        $query = $this->db->query("SELECT
	c_id.id,
    (SELECT id FROM estimation where estimation.Card_id = c_id.id) as ID,
    (SELECT estimation.Payment from estimation where estimation.id = (SELECT id FROM estimation where estimation.Card_id = c_id.id))as Payment,
    (SELECT estimation.Remark from estimation where estimation.id = (SELECT id FROM estimation where estimation.Card_id = c_id.id))as Remark,
    (SELECT COUNT(est_parts.id) from est_parts where est_parts.Est_id = (SELECT id FROM estimation where estimation.Card_id = c_id.id)) as Counter
    FROM
    (select id from card where Vehicle_id = '$id') as c_id");
        return $query->result_array();
    }
    function est_parts_history($id){
        $query = $this->db->query("");
        return $query->result_array();
    }
}