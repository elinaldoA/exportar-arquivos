<?php

namespace App\Http\Controllers;
use PDF;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    //
    public function preview()
    {
        return view('preview');
    }
    public function generatePDF()
    {
        $pdf = PDF::loadview('preview');
        return $pdf->download('demo.pdf');
    }
}
