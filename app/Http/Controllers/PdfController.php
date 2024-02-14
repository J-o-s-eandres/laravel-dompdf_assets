<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;
class PdfController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function download(){
        $pdf = Pdf::setOption(['dpi' =>300, 'defaultFont'=>'arial', 'defaultPaperSize' => 'letter'])->loadView('pdf.example');//nombre de la vista 'resources/pdf/example.blade.php
        return $pdf->download('my-example.pdf');
    }

}
