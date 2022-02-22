<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class HTMLPDFController extends Controller
{
   
public function htmlPdf()
    {
        // selecting PDF view
        $pdf = PDF::loadView('tableExam');


        // download pdf file
        return $pdf->download('pdfview.pdf');
    }}