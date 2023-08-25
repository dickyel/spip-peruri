<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Meet;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use \PDF;
use Yajra\DataTables\Facades\Datatables;


class MeetController extends Controller
{
    //
    public function index(Request $request)
    {
        $meets = Meet::all();
        return view('pages.dashboard.meet.index',[
            'meets' => $meets
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        
        $meet = Meet::create($data);

        if($meet){
            Alert::success('Berhasil','Data Telah Ditambahkan');
            return back();
        }
        else{
            Alert::error('Gagal','Data  Tidak Ditambahkan');
            return back();
        }

        return redirect()->route('meet.index');
    }

    public function edit($id)
    {
        $meet = Meet::findOrFail($id);

        return view('pages.dashboard.meet.edit',[
            'meet' => $meet,
        ]);
    }
    
    public function update(Request $request, $id)
    {

        $data = $request->all();
        
        $meet = Meet::findOrFail($id);

        $meet->update($data);

        return redirect()->route('meet.index');
    }
}
