<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;


class PdfController extends Controller
{

    public function store(Request $request)
     {

        $items = Ticket::all();
        view()->share('items',$items);


        if($request->has('download')){
            $pdf = PDF::loadView('pdfview');
            return $pdf->download('pdfview.pdf');
        }


        return view('tickets');
     }
}
