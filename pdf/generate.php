<?php
require('fpdf.php');
$pdf = new FPDF();
if(isset($_POST['create'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $clinic=$_POST['clinic'];
    $purpose=$_POST['purpose'];
    $dname=$_POST['dname'];
    $cost=$_POST['cost'];
    $date=$_POST['date'];
    $vdate=$_POST['vdate'];


    $pdf->AddPage();
    $pdf->Image('r.png',0,0);
    $pdf->SetFont("Arial","B",19);
    $pdf->Cell(71 ,10,'',0,0);
    $pdf->Cell(59 ,5,'Clinic visit',0,0);
    $pdf->Cell(59 ,10,'',0,1);
    $pdf->Cell(60,10,"Firstname",1,0);
    $pdf->Cell(135,10,$fname,1,1);
    $pdf->Cell(60,10,"Lastname",1,0);
    $pdf->Cell(135,10,$lname,1,1);
    $pdf->Cell(60,10,"Clinic name",1,0);
    $pdf->Cell(135,10,$clinic,1,1);
    $pdf->Cell(60,10,"Visit purpose",1,0);
    $pdf->Cell(135,10,$purpose,1,1);
    $pdf->Cell(60,10,"Dr name",1,0);
    $pdf->Cell(135,10,$dname,1,1);
    $pdf->Cell(60,10,"Cost of visit",1,0);
    $pdf->Cell(135,10,$cost,1,1);
    $pdf->Cell(60,10,"Visit date",1,0);
    $pdf->Cell(135,10,$vdate,1,1);
    $pdf->Cell(60,10,"Next appointment",1,0);
    $pdf->Cell(135,10,$date,1,1);
    



    $pdf->Output();
}
?>