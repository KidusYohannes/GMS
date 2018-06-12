<?php 
/**
* 
*/
class AJAX extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function update_payment()
    {
        $data = array(
            'Payment'=>$this->input->post('payment', true)
        );
        $res = $this->Job_Card->update_by(array('id'=>$this->input->post('card_id', true)), $data);
    }
	function recieving_catagory()
	{
		$data = array(
			'Content'=>$this->input->post('content'),
			'Cat'=>'Services'
		);
		$this->Lookup_Model->insert($data);
		echo $data['Content'];
	}
	function search_customer()
	{
		$name = explode(" ", $this->input->post('name'));
		$data = array();
		if (count($name) > 1){
		    $f_name = $name[0];
		    $l_name = $name[1];
            unset($data);
            $data['customer'] = $this->Customer_Model->get_by(array('First_Name'=>$f_name, 'Last_Name'=>$l_name));
            $data['address'] = $this->Address_Model->get_by(array('Customer_id'=>$data['customer']['id']));
        }
		if (!empty($data['customer'])) {
            echo $data['customer']['First_Name'].'_'.$data['customer']['Last_Name'].'_'.$data['customer']['R_Date'].'_'.$data['customer']['Sex'].'_'.$data['customer']['Company_Name'].'_'.$data['address']['Region'].'_'.$data['address']['Subcity'].'_'.$data['address']['Wereda'].'_'.$data['address']['Phone'].'_'.$data['address']['Phone_O'].'_'.$data['address']['Email'].'_'.$data['address']['Web'].'_'.$data['customer']['id'];
		}else{
			echo "Error";
		}
	}
	function search_vehicle()
	{
		$id = (int)$this->input->post('id');
		$data_v = $this->Vehicle->get_by(array('Plate_No ='=>$id));
		if (!empty($data_v)) {
			$data['customer'] = $this->Customer_Model->get_by(array('id'=>$data_v['Customer_id']));
            $data['address'] = $this->Address_Model->get_by(array('Customer_id'=>$data_v['Customer_id']));
		}
		if (isset($data['customer'])) {
			echo$data['customer']['First_Name'].'_'.$data['customer']['Last_Name'].'_'.$data['customer']['R_Date'].'_'.$data['customer']['Sex'].'_'.$data['customer']['Company_Name'].'_'.$data['address']['Region'].'_'.$data['address']['Subcity'].'_'.$data['address']['Wereda'].'_'.$data['address']['Phone'].'_'.$data['address']['Phone_O'].'_'.$data['address']['Email'].'_'.$data['address']['Web'].'_'.$data_v['Model'].'_'.$data_v['Make'].'_'.$data_v['Year'].'_'.$data_v['Color'].'_'.$data_v['Door'].'_'.$data_v['VIN_No'].'_'.$data_v['Plate_No'].'_'.$data_v['Chanssis'].'_'.$data_v['id'];
		}else{
			echo "Error";
		}
	}
	function new_material()
	{
		$data = $this->input->post();
		$input = array(
            'Name'              =>$this->input->post('Name', true),
            'Brand'             =>$this->input->post('Brand', true),
            'Model'             =>$this->input->post('Model', true),
            'Quantity'          =>$this->input->post('Quantity', true),
            'Material_Status'   =>$this->input->post('Material_Status', true),
            'Card_id'           =>$this->input->post('card_id', true)
        );
		$id = $this->Material_Model->insert($input);
		if ($id)
        {
            echo $data['Name'].'_#_'.$data['Brand'].'_#_'.$data['Model'].'_#_'.$data['Quantity'].'_#_'.$data['Material_Status'];
        }else{
		    echo json_encode(array('status'=>false,'error'=>'not valid inputs'));
        }

	}
	function new_inspection()
	{
        $data = $this->input->post();
        $input = array(
            'Ins_id'    =>$this->input->post('ins_id', true),
            'Part_Name' =>$this->input->post('name', true),
            'C_Status'  =>$this->input->post('status', true),
            'F_Status'  =>$this->input->post('f_status', true),
            'Remark'    =>$this->input->post('remark', true)
        );
        $id = $this->INS_Parts_Model->insert($input);
        if ($id)
        {
            echo $data['name'].'_#_'.$data['status'].'_#_'.$data['f_status'].'_#_'.$data['remark'];
        }else{
            echo json_encode(array('status'=>false,'error'=>'not valid inputs'));
        }
	}
	function new_estimation()
	{
		$data = $this->input->post();
		$input = array(
		    'Est_id'        =>$this->input->post('est_id', true),
            'Part_Name'     =>$this->input->post('name', true),
            'C_Status'      =>$this->input->post('status', true),
            'F_Status'      =>$this->input->post('f_status', true),
            'Remark'        =>$this->input->post('remark', true)
        );
		$id = $this->EST_Parts_Model->insert($input);
		if ($id)
        {
            echo $data['name'].'_#_'.$data['status'].'_#_'.$data['f_status'].'_#_'.$data['remark'];
        }else{
            echo json_encode(array('status'=>false,'error'=>'not valid inputs'));
        }
	}
	function image_save()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']        = md5(date('r'));
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('c_img'))
        {
            $error = array('error' => $this->upload->display_errors());
            echo json_encode(array('status' => false, 'error' => $error));
        }
        else
        {
            $GLOBALS['c_img'] = $this->upload->data('file_name');
            /*$data1['location'.$i] = $this->upload->data('file_name');*/
        }
        /*$data['upload_data'] = $data1;*/
        echo $GLOBALS['c_img'];

    }
    function start_ins()
    {
	    $input = array(
	        'Card_id'       =>$this->input->post('card_id', true),
            'Employee_id'   =>$this->input->post('employee', true),
            'Payment'       =>$this->input->post('payment', true),
            'Remark'        =>$this->input->post('remark', true)
        );
	    $checker = $this->Inspection_Model->get_by(array('Card_id'=>$input['Card_id']));
	    if ($checker)
	    {
            $id = $this->Inspection_Model->update_by(array('Card_id' => $input['Card_id']),$input);
            if ($id) {
                echo $id . '_#_' . $input['Employee_id'] . '_#_' . $input['Payment'] . '_#_' . $input['Remark'];
            } else {
                echo json_encode(array('status' => false, 'error' => 'Fill The Fields Properly'));
            }
        }else {
            $id = $this->Inspection_Model->insert($input);
            if ($id) {
                echo $id . '_#_' . $input['Employee_id'] . '_#_' . $input['Payment'] . '_#_' . $input['Remark'];
            } else {
                echo json_encode(array('status' => false, 'error' => 'Fill The Fields Properly'));
            }
        }
    }
    function start_est()
    {
        $input = array(
            'Card_id'       =>$this->input->post('card_id', true),
            'Employee_id'   =>$this->input->post('employee', true),
            'Payment'       =>$this->input->post('payment', true),
            'Remark'        =>$this->input->post('remark', true)
        );
        $checker = $this->Estmation_Model->get_by(array('Card_id'=>$input['Card_id']));
        if ($checker)
        {
            $id = $this->Estmation_Model->update_by(array('Card_id' => $input['Card_id']),$input);
            if ($id) {
                echo $id . '_#_' . $input['Employee_id'] . '_#_' . $input['Payment'] . '_#_' . $input['Remark'];
            } else {
                echo json_encode(array('status' => false, 'error' => 'Fill The Fields Properly'));
            }
        }else {
            $id = $this->Estmation_Model->insert($input);
            if ($id)
            {
                echo $id.'_#_'.$input['Employee_id'].'_#_'.$input['Payment'].'_#_'.$input['Remark'];
            }else{
                echo json_encode(array('status' => false, 'error' => 'Fill The Fields Properly'));
            }
        }
    }
    function update_service()
    {
        $check = $this->Card_Service_Model->update_by(array('id'=>$this->input->post('id', true)), array('Status'=>$this->input->post('status', true)));
        if ($check)
        {
            echo $this->input->post('status', true);
        }
    }
    function new_tool()
    {
        $input = array(
            'Name'              =>$this->input->post('name', true),
            'Brand'             =>$this->input->post('brand', true),
            'Model'             =>$this->input->post('model', true),
            'Size'          =>$this->input->post('size', true),
            'Remark'   =>$this->input->post('remark', true),
            'Card_id'           =>$this->input->post('card_id', true)
        );
        $id = $this->Forgotten_Model->insert($input);
        if ($id)
        {
            echo $input['Name'].'_#_'.$input['Brand'].'_#_'.$input['Model'].'_#_'.$input['Size'].'_#_'.$input['Remark'];
        }else{
            echo json_encode(array('status'=>false,'error'=>'not valid inputs'));
        }
    }
    function attendance()
    {
        $date = explode("-",$this->input->post('date', true));
        $data = array(
            'Employee_id'=>$this->input->post('id', true),
            'Day'=>$date[2],
            'Month'=>$date[1],
            'Year'=>$date[0],
            'Status'=>$this->input->post('val', true),
            'Day_Time'=>$this->input->post('am', true)
        );
        $ch = $this->Attendance->get_by(array('Employee_id'=>$data['Employee_id'],'Day'=>$data['Day'],'Day_Time'=>$data['Day_Time']));
        if ($ch)
        {
            if ($data['Status']=='Pr'){
                $this->Attendance->delete_by(array('Employee_id'=>$data['Employee_id']));
            }else{
                $this->Attendance->update_by(array('Employee_id'=>$data['Employee_id']),$data);
            }
        }else{
            $this->Attendance->insert($data);
        }
    }
    function activate_employee()
    {
        $id = $this->input->post('id', true);
        $res = $this->Employee_Model->update_by(array('id'=>$id), array('Status'=>'Active'));
        echo $res;
    }
    function select_options()
    {
        $val = $this->input->post('val', true);
        $data = $this->Lookup_Model->get_many_by(array('Cat'=>$val, 'Status'=>'Active'));
        $response = '';
        $count = count($data);
        $i = 1;
        foreach ($data as $datum){
            if ($count == $i){
                $response = $response.$datum['Cat'].'_#_'.$datum['Content'];
            }else{
                $response = $response.$datum['Cat'].'_#_'.$datum['Content'].'*#*';
            }
            $i++;
        }
        echo $response;
    }
    function new_service()
    {
        /*print_r($this->input->post());*/
        $data = array(
            'Card_id'=>$this->input->post('card_id', true),
            'Type'=>$this->input->post('Type', true),
            'Catagory'=>$this->input->post('Catagory', true),
            'Service'=>$this->input->post('Spec', true),
            'Labor_Time'=>$this->input->post('Labor_Time', true),
            'Due_Date'=>$this->input->post('Due_Date', true),
            'Employee_id'=>$this->input->post('Employee_id', true),
            'Remark'=>$this->input->post('remark', true)
        );
        $this->Card_Service_Model->insert($data);
        echo $data['Catagory'].'_'.$data['Service'].'_'.$data['Type'].'_'.$data['Due_Date'].'_'.$data['Labor_Time'].'_'.$data['Employee_id'].'_'.$data['Remark'];

    }
    function update_labor()
    {
        $id = $this->input->post('id', true);
        $val = $this->input->post('labor', true);
        $this->Card_Service_Model->update_by(array('id'=>$id), array('Labor_Time'=>$val));
        echo $val;

    }
    function terminate_card()
    {
        $id = $this->input->post('id', true);
        $this->Job_Card->update_by(array('id'=>$id), array('Status'=>'Terminated'));
        echo $this->input->post('id', true);
    }
    function restart_card()
    {
        $id = $this->input->post('id', true);
        $this->Job_Card->update_by(array('id'=>$id), array('Status'=>'Workshop'));
        echo $this->input->post('id', true);
    }
    function reg_cost()
    {
        $input = array(
            'Cost'=>$this->input->post('cost', true),
            'date'=>date('Y-m-d'),
            'Status'=>'ተገዝቷል'
        );
        $this->Material_Model->update_by(array('id'=> $this->input->post('id', true)), $input);
    }
}