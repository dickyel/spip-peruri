<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Facades\Storage;
use \PDF;
use RealRashid\SweetAlert\Facades\Alert;


class ReportController extends Controller
{
    //
    public function index(Request $request)
    {
        $reports = Report::when(request()->keyword, function($reports) {
            $reports = $reports->where('judul', 'like', "%". request()->keyword . '%');
        })->latest()->paginate(10);
        return view('pages.dashboard.report.index',[
            'reports' => $reports
        ]);
    }

    public function store(Request $request)
    {

        $data = $request->all();
     
      
        $data['file'] = $request->file('file')->store('assets/report','public');

        $report = Report::create($data);

        if($report){
            Alert::success('Berhasil','Data Telah Ditambahkan');
            return back();
        }
        else{
            Alert::error('Gagal','Data  Tidak Ditambahkan');
            return back();
        }

        return redirect()->route('report.index');
    }

    public function preview($id)
    {
        $report = Report::find($id);
        $pdf = \PDF::loadView('pages.preview', compact('report'));

        return $pdf->stream('preview.pdf');
    }

    
    public function download($id)
    {
        $report = Report::find($id);
        // Mendapatkan path file report yang disimpan
        $filePath = storage_path('app/public/' . $report->file);
        // Menggunakan helper download untuk mengirimkan file ke browser pengguna
        return response()->download($filePath);
    }

    public function destroy($id)
    {
        $report = Report::find($id);

        // Hapus file thumbnail dan 
        Storage::disk('public')->delete($report->file);

        // Hapus laporan dari database
        $report->delete();

        if($report){
            Alert::success('Berhasil','Data Telah terhapus');
            return back();
        }
        else{
            Alert::error('Gagal','Data  Tidak Dihapus');
            return back();
        }

        return redirect()->route('report.index')->with('success', 'Laporan berhasil dihapus.');
    }

    public function edit($id)
    {
        $report = Report::findOrFail($id);

        return view('pages.dashboard.report.edit',[
            'report' => $report,
        ]);
    }

    public function update(Request $request, $id)
    {

        $data = $request->all();

        $report = Report::findOrFail($id);
     
        $data['file'] = $request->file('file')->store('assets/report','public');

        $report->update($data);

        return redirect()->route('report.index');
    }
}
