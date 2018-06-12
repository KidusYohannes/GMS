<?php
/**
 * Created by PhpStorm.
 * User: Kidus
 * Date: 4/3/2017
 * Time: 10:18 PM
 */

class Employee extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['employees'] = $this->Employee_Model->get_all();
        $this->load->view('employee/index', $data);
    }

    function edit()
    {
        $id = $this->input->get('id', true);
        $data['employee'] = $this->Employee_Model->get_by(array('id' => $id));
        $data['edus'] = $this->Employee_BG_Model->get_many_by(array('Employee_id' => $id));
        $data['exps'] = $this->Employee_Experience_Model->get_many_by(array('Employee_id' => $id));
        $data['history'] = $this->Employee_History_Model->get_by(array('Employee_id' => $id, 'Status' => 'Active'));
        $this->load->view('employee/edit', $data);
        /*var_dump($data);*/
    }

    function attendance()
    {

        $data['Employees'] = $this->Employee_Model->attendance();
        $data['attendance'] = $this->Attendance->get_many_by(array('Month' => date('m'), 'Year' => date('Y')));
        $data['cls'] = 'sidebar-collapse';
        $data['at_ck'] = !empty($data['attendance'])?'true':'false';
        $data['ck'] = (int)date('d');
        $data['count_1'] = 0;
        $data['count_2'] = 0;
        $data['count_3'] = 0;
        $data['count_4'] = 0;
        $this->load->view('employee/attendance', $data);
        /*var_dump($data);*/
    }

    function update_attendance()
    {

    }

    function payroll()
    {
        $data['employees'] = $this->Employee_Model->get_attendance();
        $this->load->view('employee/payroll', $data);
        /*print_r($data['employee']);*/
    }

    function history()
    {
        $id = $this->input->get('id', true);
        $data['employee'] = $this->Employee_Model->get_by(array('id' => $id));
        $data['edus'] = $this->Employee_BG_Model->get_many_by(array('Employee_id' => $id));
        $data['histor'] = $this->Employee_History_Model->get_many_by(array('Employee_id' => $id));
        $data['history'] = $this->Employee_History_Model->get_by(array('Employee_id' => $id, 'Status'=>'Active'));
        $data['exps'] = $this->Employee_Experience_Model->get_many_by(array('Employee_id' => $id));
        $this->load->view('employee/history',$data);
    }

    function add()
    {
        $this->load->view('employee/add');
    }

    function new()
    {
        $emp_input = array(
            'First_Name' => $this->input->post('First_Name', true),
            'Last_Name' => $this->input->post('Last_Name', true),
            'Middle_Name' => $this->input->post('Middle_Name', true),
            'Entry_Date' => $this->input->post('Entry_Date', true),
            'Phone' => $this->input->post('Phone', true),
            'Email' => $this->input->post('Email', true),
            'Position' => $this->input->post('Position', true),
            'Salary' => $this->input->post('Salary', true)
        );
        $id = $this->Employee_Model->insert($emp_input);
        $his_input = array(
            'Employee_id' => $id,
            'Position' => $this->input->post('Position', true),
            'Salary' => $this->input->post('Salary', true),
            'Start_Date' => $this->input->post('Start_Date', true),
        );
        $his_id = $this->Employee_History_Model->insert($his_input);
        for ($i = 1; $i <= 8; $i++) {
            $checker = $this->input->post('Educational_Level_' . $i, true);
            if (!empty($this->input->post('Educational_Level_' . $i, true))) {
                $edu_input = array(
                    'Employee_id' => $id,
                    'Level' => $this->input->post('Educational_Level_' . $i, true),
                    'Field' => $this->input->post('Field_Study_' . $i, true),
                    'Institution' => $this->input->post('Educational_Intitute_' . $i, true),
                    'Final_Grade' => $this->input->post('Final_Grade_' . $i, true)
                );
                $edu_id = $this->Employee_BG_Model->insert($edu_input);
            }
        }
        for ($i = 1; $i <= 8; $i++) {
            $checker = $this->input->post('Orgamization_Name_' . $i, true);
            if (!empty($this->input->post('Orgamization_Name_' . $i, true))) {
                $exp_input = array(
                    'Employee_id' => $id,
                    'Organization' => $this->input->post('Orgamization_Name_' . $i, true),
                    'Position' => $this->input->post('Position_' . $i, true),
                    'Period' => $this->input->post('Period_' . $i, true),
                    'Remark' => $this->input->post('Remark_' . $i, true)
                );
                $edu_id = $this->Employee_Experience_Model->insert($exp_input);
            }
        }
        redirect(base_url() . 'employee/');
    }

    function update()
    {
        $emp_id = $this->input->post('id', true);
        $emp_input = array(
            'First_Name' => $this->input->post('First_Name', true),
            'Last_Name' => $this->input->post('Last_Name', true),
            'Middle_Name' => $this->input->post('Middle_Name', true),
            'Entry_Date' => $this->input->post('Entry_Date', true),
            'Phone' => $this->input->post('Phone', true),
            'Email' => $this->input->post('Email', true),
            'Position' => $this->input->post('Position', true),
            'Salary' => $this->input->post('Salary', true)
        );
        $id = $this->Employee_Model->update_by(array('id' => $emp_id), $emp_input);
        $his_input = array(
            'Employee_id' => $emp_id,
            'Position' => $this->input->post('Position', true),
            'Salary' => $this->input->post('Salary', true),
            'Start_Date' => $this->input->post('Start_Date', true),
        );
        $this->Employee_History_Model->update_by(array('Employee_id' => $emp_id, 'Status' => 'Active'), $his_input);
        for ($i = 1; $i <= 8; $i++) {
            $checker = $this->input->post('Educational_Level_' . $i, true);
            if (!empty($this->input->post('Educational_Level_' . $i, true))) {
                $edu_input = array(
                    'Employee_id' => $emp_id,
                    'Level' => $this->input->post('Educational_Level_' . $i, true),
                    'Field' => $this->input->post('Field_Study_' . $i, true),
                    'Institution' => $this->input->post('Educational_Intitute_' . $i, true),
                    'Final_Grade' => $this->input->post('Final_Grade_' . $i, true)
                );
                if ($this->input->post('Edu_id_' . $i)) {
                    $edu_id = $this->Employee_BG_Model->update_by(array('id' => $this->input->post('Edu_id_' . $i, true)), $edu_input);
                } else {
                    $edu_id = $this->Employee_BG_Model->insert($edu_input);
                }
            }
        }
        for ($i = 1; $i <= 8; $i++) {
            $checker = $this->input->post('Orgamization_Name_' . $i, true);
            if (!empty($this->input->post('Orgamization_Name_' . $i, true))) {
                $exp_input = array(
                    'Employee_id' => $emp_id,
                    'Organization' => $this->input->post('Orgamization_Name_' . $i, true),
                    'Position' => $this->input->post('Position_' . $i, true),
                    'Period' => $this->input->post('Period_' . $i, true),
                    'Remark' => $this->input->post('Remark_' . $i, true)
                );
                if ($this->input->post('Exp_id_' . $i)) {
                    $edu_id = $this->Employee_Experience_Model->update_by(array('id' => $this->input->post('Exp_id_' . $i, true)), $exp_input);
                } else {
                    $edu_id = $this->Employee_Experience_Model->insert($exp_input);
                }
            }
        }
        redirect(base_url('employee/'));
    }

    function promote()
    {
        $id = $this->input->get('id', true);
        $data['employee'] = $this->Employee_Model->get_by(array('id' => $id));
        $data['edus'] = $this->Employee_BG_Model->get_many_by(array('Employee_id' => $id));
        $data['history'] = $this->Employee_History_Model->get_by(array('Employee_id' => $id, 'Status' => 'Active'));
        $this->load->view('employee/promot', $data);
    }

    function pro_update()
    {
        $emp_input = array(
            'First_Name' => $this->input->post('First_Name', true),
            'Last_Name' => $this->input->post('Last_Name', true),
            'Middle_Name' => $this->input->post('Middle_Name', true),
            'Entry_Date' => $this->input->post('Entry_Date', true),
            'Phone' => $this->input->post('Phone', true),
            'Email' => $this->input->post('Email', true),
            'Position' => $this->input->post('Position', true),
            'Salary' => $this->input->post('Salary', true)
        );
        $emp_id = $this->input->post('id', true);
        $id = $this->Employee_Model->update_by(array('id' => $emp_id), $emp_input);
        $his_input = array(
            'Employee_id' => $emp_id,
            'Position' => $this->input->post('Position', true),
            'Salary' => $this->input->post('Salary', true),
            'Start_Date' => $this->input->post('Start_Date', true),
        );
        $this->Employee_History_Model->update_by(array('Employee_id' => $emp_id, 'Status' => 'Active'), array('Status' => date('Y-m-d')));
        $this->Employee_History_Model->insert($his_input);
        redirect(base_url('employee/'));
    }
}