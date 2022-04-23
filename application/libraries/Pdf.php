<?php
include_once APPPATH . 'third_party\fpdf\fpdf.php';

class Pdf extends FPDF
{

   // Page footer
   function Footer()
   {
      // Position at 1.5 cm from bottom
      $this->SetY(-25);

      //$this->Image('assets/bsre.png', 157, $this->GetY()+1, 32, 13);

      $this->SetFont('Arial', 'I', 7);
   }
}
