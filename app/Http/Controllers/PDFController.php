<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\PreMatricula;
use PDF;

class PDFController extends Controller
{
    public function gerarpdf($id){
        $prematricula = PreMatricula::find($id);
        
        $pdf=PDF::loadView('dashboard.prematricula.confirmacaopdf',['prematricula'=>$prematricula]);
        return $pdf->stream('Comprovante Pré Matricula.pdf');

    }
}
