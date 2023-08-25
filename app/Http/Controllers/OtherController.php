<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Other;
use RealRashid\SweetAlert\Facades\Alert;

class OtherController extends Controller
{
    //
    public function index()
    {
        $others = Other::all();  
        return view('pages.dashboard.method.index-other', compact('others'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
 
        $other = Other::findOrFail($id);

        $other->update($data);

        if($other){
            Alert::success('Berhasil','Data Telah diupdate');
            return back();
        }
        else{
            Alert::error('Gagal','Data gagal Diupdate');
            return back();
        }

        return redirect()->route('other.index');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $other = Other::create($data);

        if($other){
            Alert::success('Berhasil','Data Telah Ditambahkan');
            return back();
        }
        else{
            Alert::error('Gagal','Data  Tidak Ditambahkan');
            return back();
        }

        return redirect()->route('other.index');
    }

    public function destroy($id)
    {
        $other = Other::findOrFail($id);
        $other->delete();

        return redirect()->route('other.index');
    }
}
