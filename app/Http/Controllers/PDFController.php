<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;
class PDFController extends Controller
{
    public function imprimirPDF2()
    {
        $Fecha=$fechaActual = Carbon::now();
        Pdf::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $data = []; // Agrega aquí los datos que deseas pasar a la vista

        $pdf = PDF::loadView('pdf.Consentimeinto',compact('Fecha'))->setPaper('a4', 'letter');
        // Agrega la cabecera al PDF
    
        
        return $pdf->stream('login.pdf');
    }
    public function imprimirPDF()
    {
        $Fecha=$fechaActual = Carbon::now();
        Pdf::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $data = []; // Agrega aquí los datos que deseas pasar a la vista

        $pdf = PDF::loadView('pdf.Receta',compact('Fecha'))->setPaper('a4', 'letter');
        // Agrega la cabecera al PDF
    
        
        return $pdf->stream('login.pdf');
    }


}
