<?php
/**
 * Created by PhpStorm.
 * User: Kidus
 * Date: 4/12/2017
 * Time: 9:29 AM
 */

class trial extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data = array(
            '1'=>array(
                'id'=>1,
                'name'=>'kidus',
                'age'=>23
            ),
            '2'=>array(
                'id'=>2,
                'name'=>'kebede',
                'age'=>34
            )
        );
        if (array_search('3', array_column($data, 'id'))){
            echo array_search('2', array_column($data, 'id'));
        }else{
            echo 'false';
        }
        if ('true'==true){
            echo 'works';
        }
        $data1 = array();
        $ech=  !empty($data1)?'true':'false';
        echo $ech."<br>";
        echo date('Y-m-d', strtotime("+10 days"));
    }
    /*public function pdf() {   
        $this->load->library('fpdf_master');
        
        $this->fpdf->SetFont('Arial','B',18);
        
        $this->fpdf->Cell(50,10,'Hello World!');
        
        echo $this->fpdf->Output('hello_world.pdf','D');// Name of PDF file
        //Can change the type from D=Download the file      
    }*/
    public function pdf() {   
        $this->load->library('fpdf_gen');
        
        $this->fpdf->SetFont('Arial','B',16);
        $this->fpdf->Cell(40,10,'Hello World!');
        $this->fpdf->Cell(60,10,'Powered by FPDF.',0,1,'C');
        
        echo $this->fpdf->Output('first.pdf','D');
    }
}