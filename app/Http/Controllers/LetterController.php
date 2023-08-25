<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Letter;
use Illuminate\Support\Facades\Storage;
use \PDF;
use RealRashid\SweetAlert\Facades\Alert;



class LetterController extends Controller
{
    //
    public function index(Request $request)
    {
        $letters = Letter::when(request()->keyword, function($letters) {
            $letters = $letters->where('judul', 'like', "%". request()->keyword . '%');
        })->latest()->paginate(10);
        return view('pages.dashboard.surat-tugas.index',[
            'letters' => $letters
        ]);
    }

    public function store(Request $request)
    {

        $data = $request->all();
     
        $data['file'] = $request->file('file')->store('assets/letter','public');

        $letter = Letter::create($data);

        if($letter){
            Alert::success('Berhasil','Data Telah ditambahkan');
            return back();
        }
        else{
            Alert::error('Gagal','Data gagal Ditambahkan');
            return back();
        }

        return redirect()->route('letter.index');
    }

    public function preview($id)
    {
        $letter = Letter::find($id);
        $pdf = \PDF::loadView('pages.preview', compact('letter'));

        return $pdf->stream('preview.pdf');
    }

    
    public function download($id)
    {
        $letter = Letter::find($id);
        // Mendapatkan path file report yang disimpan
        $filePath = storage_path('app/public/' . $letter->file);
        // Menggunakan helper download untuk mengirimkan file ke browser pengguna
        return response()->download($filePath);
    }

    public function destroy($id)
    {
        $letter = Letter::find($id);

        // Hapus file thumbnail dan 
        Storage::disk('public')->delete($letter->file);

        // Hapus laporan dari database
        $letter->delete();

        if($letter){
            Alert::success('Berhasil','Data Telah dihapus');
            return back();
        }
        else{
            Alert::error('Gagal','Data gagal Dihapus');
            return back();
        }

        return redirect()->route('letter.index')->with('success', 'Laporan berhasil dihapus.');
    }

    public function edit($id)
    {
        $letter = Letter::findOrFail($id);

        return view('pages.dashboard.surat-tugas.edit',[
            'letter' => $letter,
        ]);
    }

    public function update(Request $request, $id)
    {

        $data = $request->all();

        $letter = Letter::findOrFail($id);
     
        $data['file'] = $request->file('file')->store('assets/letter','public');

        $letter->update($data);

        return redirect()->route('letter.index');
    }
}
