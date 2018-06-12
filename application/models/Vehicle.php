<?php
/**
 * Created by PhpStorm.
 * User: Kidus
 * Date: 3/1/2017
 * Time: 10:35 PM
 */

class Vehicle extends MY_Model
{
    protected $_table = 'vehicles';
    protected $primary_key = 'id';
    protected $return_type = 'array';
    function vehicles_customers($start, $end)
    {
        $query = $this->db->query("Select 
                (SELECT First_Name from customer where id = C.Customer_id) as First_Name,
                (SELECT Last_Name from customer where id = C.Customer_id) as Last_Name,
                c.Model,
                C.Make,
                C.Year,
                C.id,
                (SELECT Count(id) from inspection where Card_id = C.id) as Insp,
                (SELECT COUNT(id) from estimation where Card_id = C.id) as Estm
                from (SELECT * from vehicles where Customer_id IN (SELECT id from customer where R_Date BETWEEN '$start' and '$end' ORDER BY id DESC ) ) as C
                ");
        return $query->result_array();
    }
    function vehicles_customer()
    {
        $query = $this->db->query("Select 
                (SELECT First_Name from customer where id = C.Customer_id) as First_Name,
                (SELECT Last_Name from customer where id = C.Customer_id) as Last_Name,
                c.Model,
                C.Make,
                C.Year,
                C.id,
                (select count(id) from card where Vehicle_id = C.id) as Card_Count
                from (SELECT * from vehicles where Customer_id IN (SELECT id from customer) ORDER BY id DESC ) as C
                ");
        return $query->result_array();
    }
    function cards($id)
    {
        $query = $this->db->query("select
                (select First_Name from customer where id = (SELECT Customer_id from vehicles where id = c.Vehicle_id)) as First_Name,
                (select Last_Name from customer where id = (SELECT Customer_id from vehicles where id = c.Vehicle_id)) as Last_Name,
                (select Sex from customer where id = (SELECT Customer_id from vehicles where id = c.Vehicle_id)) as Sex,
                (select R_Date from customer where id = (SELECT Customer_id from vehicles where id = c.Vehicle_id)) as Dob,
                (select Phone from customer where id = (SELECT Customer_id from vehicles where id = c.Vehicle_id)) as Phone,
                (Select Model from vehicles where id = c.Vehicle_id) as Model,
                (Select Plate_No from vehicles where id = c.Vehicle_id) as Plate_No,
                (Select Make from vehicles where id = c.Vehicle_id) as Make,
                (Select `Year` from vehicles where id = c.Vehicle_id) as `Year`,
                (Select Color from vehicles where id = c.Vehicle_id) as Color,
                (Select Door from vehicles where id = c.Vehicle_id) as Door,
                (Select VIN_No from vehicles where id = c.Vehicle_id) as VIN_No,
                (Select Customer_id from vehicles where id = c.Vehicle_id) as Customer_ID,
                c.id,
                c.Fuel,
                c.Millage,
                c.Receive_Date,
                c.Release_Date,
                c.Status,
                c.Payment
                from (select * from card where id = '$id') as c
                ");
        return $query->result_array();
    }
    function service_history($id)
    {
        $query = $this->db->query("
            select * from card_services where Card_id IN (SELECT id from card where Vehicle_id = '$id')
        ");
        return $query->result_array();
    }
    function vehicle_by_date_range($start, $end)
    {
        $query = $this->db->query("
            select * from vehicles WHERE id IN (select Vehicle_id from card where Release_Date BETWEEN '$start' AND '$end')      
        ");
        return $query->result_array();
    }
    function done_vehicles()
    {
        $query = $this->db->query("
            Select
                (SELECT First_Name from customer where id = C.Customer_id) as First_Name,
                (SELECT Last_Name from customer where id = C.Customer_id) as Last_Name,
                c.Model,
                C.Make,
                C.Year,
                C.id,
                (SELECT COUNT(id) from inspection where Card_id = C.id) as Insp,
                (SELECT COUNT(id) from estimation where Card_id = C.id) as Estm
                from (SELECT * from vehicles where id in (select Vehicle_id from card where Status = 'Done') AND Customer_id IN (SELECT id from customer) ) as C

        ");
        return $query->result_array();
    }
    function past_vehicles($date)
    {
        $query = $this->db->query("Select
                (SELECT First_Name from customer where id = C.Customer_id) as First_Name,
                (SELECT Last_Name from customer where id = C.Customer_id) as Last_Name,
                c.Model,
                C.Make,
                C.Year,
                C.id,
                (SELECT COUNT(id) from inspection where Card_id = C.id) as Insp,
                (SELECT count(id) from estimation where Card_id = C.id) as Estm
                from (SELECT * from vehicles where id IN (select Vehicle_id from card WHERE Release_Date < '$date') AND Customer_id IN (SELECT id from customer) ) as C
                
        ");
        return $query->result_array();
    }
    function vehicle_services(){
        $query = $this->db->query("select *, (select Vehicle_id from card where card.id = card_services.Card_id) as V_ID from card_services ");
        return $query->result_array();
    }
    function estimation_history($id)
    {
        $query = $this->db->query("SELECT (select est_parts.Part_Name from est_parts where est_parts.id = c_id.id)as Part, (select est_parts.C_Status from est_parts where est_parts.id = c_id.id )as C_Status, (select est_parts.F_Status from est_parts where est_parts.id = c_id.id )as C_Action, (select est_parts.Remark from est_parts where est_parts.id = c_id.id )as C_Remark, (select employee.First_Name from employee where id = (select estimation.Employee_id from estimation where id =c_id.Est_id)) as F_name, (select employee.Last_Name from employee where id = (select estimation.Employee_id from estimation where id =c_id.Est_id)) as L_name, c_id.id, c_id.Est_id, (select estimation.Card_id from estimation where estimation.id = c_id.Est_id) as Card from (SELECT * from est_parts where est_parts.Est_id in (select id from estimation where Card_id IN (select id from card where card.Vehicle_id = '$id'))) as c_id");
        return $query->result_array();
    }
    function inspection_history($id)
    {
        $query = $this->db->query("SELECT
(select ins_problems.Part_Name from ins_problems where ins_problems.id = c_id.id)as Part,
(select ins_problems.C_Status from ins_problems where ins_problems.id = c_id.id )as C_Status,
(select ins_problems.F_Status from ins_problems where ins_problems.id = c_id.id )as C_Action,
(select ins_problems.Remark from ins_problems where ins_problems.id = c_id.id )as C_Remark,
(select employee.First_Name from employee where id = (select inspection.Employee_id from inspection where id =c_id.Ins_id)) as F_name,
(select employee.Last_Name from employee where id = (select inspection.Employee_id from inspection where id =c_id.Ins_id)) as L_name,
c_id.id,
c_id.Ins_id,
(select inspection.Card_id from inspection where inspection.id = c_id.Ins_id) as Card
from 
(SELECT * from ins_problems where ins_problems.Ins_id in (select id from inspection where Card_id IN (select id from card where card.Vehicle_id = '$id'))) as c_id");
        return $query->result_array();
    }
}