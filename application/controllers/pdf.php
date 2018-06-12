<?php
require_once APPPATH.'third_party/fpdf/fpdf-1.8.php';
/**
* 
*/
$id = (int)$_GET['id'];
class Pdf extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $data = array();
    }
    function inializing($id)
    {
        $data['title'] = 'Job Card | Garage Management System';
        /*$id = (int)$this->input->get('id');*/
        $info = $this->Vehicle->cards($id);
        $data['info'] = $info[0];
        $data['employees'] = $this->Employee_Model->get_all();
        $data['services'] = $this->Card_Service_Model->get_many_by(array('Card_id'=>$id));
        $data['tools'] = $this->Forgotten_Model->get_many_by(array('Card_id'=>$id));
        $data['materials'] = $this->Material_Model->get_many_by(array('Card_id'=>$id));
        if ($this->Estmation_Model->get_by(array('Card_id'=>$id)))
        {
            $data['estimation'] = $this->Estmation_Model->get_by(array('Card_id'=>$id));
            $data['est_parts'] = $this->Estmation_Model->get_estimations($id);
            $data['est_status']='';
        }else{
            $data['est_status']='disabled';
        }
        if ($this->Inspection_Model->get_by(array('Card_id'=>$id)))
        {
            $data['inspection'] = $this->Inspection_Model->get_by(array('Card_id'=>$id));
            $data['ins_parts'] = $this->Inspection_Model->get_inspections($id);
            $data['ins_status']= '';
        }else{
            $data['ins_status']='disabled';
        }
        while (strlen($data['info']['id']) < 4){
            $data['info']['id'] = '0'.$data['info']['id'];
        }
        return $data;
    }
}

class PDF_FPDF extends FPDF
{
// Page header
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Logo
    $this->Cell(0,6,'Garage Management System',0,1,'C');
    $this->SetFont('Arial','',8);
    // Move to the right
    $this->Cell(80,8,'',0,0);
    // Title
    $this->Cell(30,8,'Job Card Reciept',0,0,'C');
    // Line break
    $this->Ln(10);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,1,'C');
    $this->Cell(0,3,'© '.date('Y').' Abissinya Tech IT Solution. All rights reserved.',0,0,'C');
}
}

// Instanciation of inherited class

$info = new Pdf();
/*$data->inializing($id);*/
/*var_dump($data->inializing());
echo count($data->inializing());*/
$data = $info->inializing($id);
/*var_dump($data['info']);*/
$pdf = new PDF_FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',11);
$pdf->Cell(30,5,'Job Card Number:',0,0,'B');
$pdf->Cell(35,5,$data['info']['id'],'B',0);
$pdf->Cell(25,5,'Total Payment:',0,0);
$pdf->Cell(35,5,'','B',0);
$pdf->Cell(30,5,'Days',0,0);
$pdf->Cell(35,5,'','B',1);
$pdf->Cell(0,8,'',0,1);
$pdf->SetFont('Times','B',12);
$pdf->Cell(95,5,'Customer ID: '.$data['info']['Customer_ID'],0,0);
$pdf->Cell(95,5,'Vehicle Plate Number: '.$data['info']['Plate_No'],0,1);
$pdf->SetFont('Times','',11);
$pdf->Cell(25,5,'Name:','LT',0);
$pdf->Cell(70,5,$data['info']['First_Name'].' '.$data['info']['Last_Name'],'T',0);
$pdf->Cell(45,5,'Model: '.$data['info']['Model'],'LT',0);
$pdf->Cell(50,5,'Make: '.$data['info']['Make'],'TR',1);
$pdf->Cell(25,5,'Phone','LB',0);
$pdf->Cell(70,5,$data['info']['Phone'],'B',0);
$pdf->Cell(45,5,'Year: '.$data['info']['Year'],'LB',0);
$pdf->Cell(50,5,'Color: '.$data['info']['Year'],'BR',1);
$pdf->Cell(0,8,'',0,1);
if (!empty($data['services'])) {
    $pdf->SetFont('Times','BU',14);
    $pdf->Cell(95,10,'Services',0,1);
    $pdf->SetFont('Times','B',12);
    $pdf->Cell(8,5,'S/N',1,0);
    $pdf->Cell(27,5,'Requested By',1,0);
    $pdf->Cell(35,5,'Catagory',1,0);
    $pdf->Cell(25,5,'Service',1,0);
    $pdf->Cell(25,5,'Due Date',1,0);
    $pdf->Cell(30,5,'Labor Time',1,0);
    $pdf->Cell(20,5,'Remark',1,0);
    $pdf->Cell(20,5,'Status',1,1);
    $pdf->SetFont('Times','',11);
    $count = 1;
    foreach ($data['services'] as $service){
        $pdf->Cell(8,5,$count,1,0);
        $pdf->Cell(27,5,$service['Type'],1,0);
        $pdf->Cell(35,5,$service['Catagory'],1,0);
        $pdf->Cell(25,5,$service['Service'],1,0);
        $pdf->Cell(25,5,$service['Due_Date'],1,0);
        $pdf->Cell(30,5,$service['Labor_Time'],1,0);
        $pdf->Cell(20,5,$service['Remark'],1,0);
        $pdf->Cell(20,5,$service['Status'],1,1);
        $count++;
    }
$pdf->Cell(0,8,'',0,1);
}
if (!empty($data['materials'])) {
    $pdf->SetFont('Times','BU',14);
    $pdf->Cell(95,10,'Materials',0,1);
    $pdf->SetFont('Times','B',12);
    $pdf->Cell(8,5,'S/N',1,0);
    $pdf->Cell(32,5,'Name',1,0);
    $pdf->Cell(35,5,'Brand',1,0);
    $pdf->Cell(30,5,'Model',1,0);
    $pdf->Cell(30,5,'Quantity',1,0);
    $pdf->Cell(35,5,'Condition',1,0);
    $pdf->Cell(20,5,'Status',1,1);
    $pdf->SetFont('Times','',11);
    foreach ($data['materials'] as $material) {
        $count = 1;
        $pdf->Cell(8,5,$count,1,0);
        $pdf->Cell(32,5,$material['Name'],1,0);
        $pdf->Cell(35,5,$material['Brand'],1,0);
        $pdf->Cell(30,5,$material['Model'],1,0);
        $pdf->Cell(30,5,$material['Quantity'],1,0);
        $pdf->Cell(35,5,$material['Material_Status'],1,0);
        $pdf->Cell(20,5,$material['Status'],1,1);
    }
$pdf->Cell(0,8,'',0,1);
}
if (!empty($data['ins_parts'])){
    $pdf->SetFont('Times','BU',14);
    $pdf->Cell(0,10,'Inspected Parts',0,1);
    $pdf->SetFont('Times','B',12);
    $pdf->Cell(8,5,'S/N',1,0);
    $pdf->Cell(47,5,'Name',1,0);
    $pdf->Cell(60,5,'Current Status',1,0);
    $pdf->Cell(35,5,'Operation',1,0);
    $pdf->Cell(40,5,'Remark',1,1);
    $pdf->SetFont('Times','',11);
    foreach ($data['ins_parts'] as $service){
        $count = 1;
        $pdf->Cell(8,5,$count,1,0);
        $pdf->Cell(47,5,$service['Part_Name'],1,0);
        $pdf->Cell(60,5,$service['C_Status'],1,0);
        $pdf->Cell(35,5,$service['F_Status'],1,0);
        $pdf->Cell(40,5,$service['Remark'],1,1);
        $count++;
    }
$pdf->Cell(0,8,'',0,1);
}
if (!empty($data['est_parts'])){
    $pdf->SetFont('Times','BU',14);
    $pdf->Cell(0,10,'Estimated Parts',0,1);
    $pdf->SetFont('Times','B',12);
    $pdf->Cell(8,5,'S/N',1,0);
    $pdf->Cell(47,5,'Name',1,0);
    $pdf->Cell(60,5,'Current Status',1,0);
    $pdf->Cell(35,5,'Operation',1,0);
    $pdf->Cell(40,5,'Remark',1,1);
    $pdf->SetFont('Times','',11);
    foreach ($data['est_parts'] as $service){
        $count = 1;
        $pdf->Cell(8,5,$count,1,0);
        $pdf->Cell(47,5,$service['Part_Name'],1,0);
        $pdf->Cell(60,5,$service['C_Status'],1,0);
        $pdf->Cell(35,5,$service['F_Status'],1,0);
        $pdf->Cell(40,5,$service['Remark'],1,1);
        $count++;
    }
$pdf->Cell(0,8,'',0,1);
}
if (!empty($data['tools'])){
    $pdf->SetFont('Times','BU',14);
    $pdf->Cell(95,10,'Customer Tools',0,1);
    $pdf->SetFont('Times','B',12);
    $pdf->Cell(8,5,'S/N',1,0);
    $pdf->Cell(42,5,'Name',1,0);
    $pdf->Cell(40,5,'Brand',1,0);
    $pdf->Cell(35,5,'Model',1,0);
    $pdf->Cell(35,5,'Size',1,0);;
    $pdf->Cell(30,5,'Remark',1,1);
    $pdf->SetFont('Times','',11);
    foreach ($data['tools'] as $service){
        $count = 1;
        $pdf->Cell(8,5,$count,1,0);
        $pdf->Cell(42,5,$service['Name'] ,1,0);
        $pdf->Cell(40,5,$service['Brand'] ,1,0);
        $pdf->Cell(35,5,$service['Model'] ,1,0);
        $pdf->Cell(35,5,$service['Size'] ,1,0);
        $pdf->Cell(30,5,$service['Remark'] ,1,1);
        $count++;
    }
}
$pdf->Output();
?>