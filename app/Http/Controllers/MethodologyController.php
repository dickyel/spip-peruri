<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Method;
use RealRashid\SweetAlert\Facades\Alert;

class MethodologyController extends Controller
{
    //
    public function index()
    {
        $methods = Method::all();

        return view('pages.dashboard.method.index-method',compact('methods'));
    }

    public function update(Request $request, $id){
        $data = $request->all();
 
        $method = Method::findOrFail($id);

        $method->update($data);

        if($method){
            Alert::success('Berhasil','Data Telah diupdate');
            return back();
        }
        else{
            Alert::error('Gagal','Data gagal Diupdate');
            return back();
        }

        return redirect()->route('methodology.index');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $method = Method::create($data);

        if($method){
            Alert::success('Berhasil','Data Telah Ditambahkan');
            return back();
        }
        else{
            Alert::error('Gagal','Data  Tidak Ditambahkan');
            return back();
        }

        return redirect()->route('methodology.index');
    }

    public function destroy($id)
    {
        $method = Method::findOrFail($id);
        $method->delete();

        return redirect()->route('methodology.index');
    }
}
