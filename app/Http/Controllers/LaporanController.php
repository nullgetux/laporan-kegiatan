<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Laporan;
use App\Http\Requests\LaporanRequest;
use App\Exports\LaporanExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class LaporanController extends Controller
{
    public function index()
    {
        $laporan = Laporan::all();
        return view ('laporan.index', ['laporan' => $laporan]);
    }
    
    public function create()
    {
        return view ("laporan.create");
    }

    public function show($id)
    {
        $laporan = Laporan::find($id);

        if (!$laporan) {
            return redirect()->back()->with('failed', 'Data Laporan yang akan ditampilkan tidak ditemukan!');
        }

        $data['laporan'] = $laporan;
        
        return view('laporan.show', $data);
    }


    public function store(LaporanRequest $request)
    {
        $imageName = time().'.'.$request->bukti->extension();
        $uploadedImage = $request->bukti->move(public_path('images'), $imageName);
        $imagePath = 'images/' . $imageName;

        $params = $request->validated();
        
        if ($laporan = Laporan::create($params)) {
            $laporan->bukti = $imagePath;
            $laporan->save();

            return redirect(route('laporan'))->with('success', 'Laporan Berhasil Ditambahkan!');
        }
    }

    public function export()
	{
		return Excel::download(new LaporanExport, 'laporan-kegiatan.xlsx');
	}

    public function exportpdf(Request $request, $id)
    {
        $laporan = Laporan::find($id);
        if (!$laporan) {
            // Handle case where the laporan with the given id is not found
            abort(404);
        }

        $laporan['laporan'] = $laporan;
        $pdf = PDF::loadView('laporan.test', ['laporan' => $laporan]);
        $pdf->setOption('enable-local-file-access', true);
        return $pdf->download('details.pdf');
    }
}
