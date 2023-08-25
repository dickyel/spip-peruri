<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guide;
use RealRashid\SweetAlert\Facades\Alert;

class GuideController extends Controller
{
    //
    public function index()
    {
        $guides = Guide::all();
        return view('pages.dashboard.method.index-guide',compact('guides'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
 
        $guide = Guide::findOrFail($id);

        $guide->update($data);

        if($guide){
            Alert::success('Berhasil','Data Telah diupdate');
            return back();
        }
        else{
            Alert::error('Gagal','Data gagal Diupdate');
            return back();
        }

        return redirect()->route('guide.index');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $guide = Guide::create($data);

        if($guide){
            Alert::success('Berhasil','Data Telah Ditambahkan');
            return back();
        }
        else{
            Alert::error('Gagal','Data  Tidak Ditambahkan');
            return back();
        }

        return redirect()->route('guide.index');
    }

    public function destroy($id)
    {
        $guide = Guide::findOrFail($id);
        $guide->delete();

        return redirect()->route('guide.index');
    }
}
