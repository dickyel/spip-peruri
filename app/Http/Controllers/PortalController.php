<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Method;
use App\Models\Guide;
use App\Models\Other;

class PortalController extends Controller
{
    //
    public function index()
    {
        $methods = Method::all();
        $guides = Guide::all();
        $others = Other::all();
        
        return view('pages.portal.index',compact('methods','guides','others'));
    }
}
