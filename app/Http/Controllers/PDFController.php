<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;
use App\Usuario;
use App\User;
class PDFController extends Controller
{
    public function index(Request $req)
    {
    	$blogs = User::all();
    	view()->share('blogs', $blogs);
    	if($req->has('download'))
    	{
    		$pdf = PDF::loadView('pdfnombramiento')->setPaper('a4','landscape');
    		return $pdf->download('nombramiento.pdf');
    	}
    	return view('index');
    }
}
