<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use PDF;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biodatas = Biodata::all();
        $biodatas = Biodata::latest()->paginate(100);

        return view('biodatas.index',compact('biodatas'))
            ->with('i', (request()->input('page', 1) - 1) * 100);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('biodatas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'NIS' => 'required',
            'NAMA' => 'required',
            'Jns_kelamin' => 'required',
            'Temp_lahir' => 'required',
            'Tgl_lahir' => 'required',
            'Alamat' => 'required',
            'Asal_sekolah' => 'required',
            'Kelas' => 'required',
            'Jurusan' => 'required'
        ]);

        Biodata::create($request->all());
        return redirect()->route('biodatas.index')
                        ->with('Sukses','Siswa Telah Terdaftar');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function show(Biodata $biodata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function edit(Biodata $biodata)
    {
        return view('biodatas.edit', compact('biodata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Biodata $biodata)
    {
        $request->validate([
            'NIS' => 'required',
            'NAMA' => 'required',
            'Jns_kelamin' => 'required',
            'Temp_lahir' => 'required',
            'Tgl_lahir' => 'required',
            'Alamat' => 'required',
            'Asal_sekolah' => 'required',
            'Kelas' => 'required',
            'Jurusan' => 'required'
        ]);

        $biodata->update($request->all());
        return redirect()->route('biodatas.index')
                        ->with('Sukses','Data Siswa Telah Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Biodata $biodata)
    {
        $biodata->delete();
        return redirect()->route('biodatas.index')
                        ->with('Sukses', 'Data Siswa Telah Terhapus');
    }
    
    public function downloadPDF()
    {
        $biodatas = Biodata::all();

        $pdf = PDF::loadview('biodatas.biodata-pdf',['biodata'=>$biodatas]);
        return $pdf->download('laporan-data-ppdb');
    }
}
