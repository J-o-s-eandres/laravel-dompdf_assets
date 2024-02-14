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
        $pdf = Pdf::setPaper('a4', 'landscape')->loadView('pdf.example');//nombre de la vista 'resources/pdf/example.blade.php
        $pdf->save('/my_file.pdf');
        return $pdf->download('my-example.pdf');
    }

}
