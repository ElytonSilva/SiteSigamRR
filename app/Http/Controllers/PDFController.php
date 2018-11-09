<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\PreMatricula;
use App\Anotacao;
use PDF;

class PDFController extends Controller
{
    public function gerarpdf($id){
        $prematricula = PreMatricula::find($id);
        $anotacoes = Anotacao::all();
        
        $pdf=PDF::loadView('dashboard.prematricula.confirmacaopdf',['prematricula'=>$prematricula],['anotacoes'=>$anotacoes]);
        return $pdf->stream('Comprovante Pré Matricula.pdf');

    }
}
