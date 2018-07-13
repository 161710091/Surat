<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\surat_masuks;
use App\instansis;
use App\disposisis;

class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masuks = surat_masuks::with('MDisposisi', 'MInstansi')->get();
        return view('masuk.index', compact('masuks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dis = disposisis::all();
        $ins = instansis::all();
        return view('masuk.create', compact('dis', 'ins'));
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
            'no_suratm' => 'required',
            'id_instansi' => 'required',
            'perihalm' => 'required',
            'id_disposisi' => 'required',
            'ket_disposisim' => 'required',
            'filem' => 'required',
        ]);

        $masuks = new surat_masuks;
        $masuks->no_suratm = $request->no_suratm;
        $masuks->id_instansi = $request->id_instansi;
        $masuks->perihalm = $request->perihalm;
        $masuks->id_disposisi = $request->id_disposisi;
        $masuks->ket_disposisim = $request->ket_disposisim;
        $masuks->filem = $request->filem;
        if ($request->hasFile('filem')) {
            $file = $request->file('filem');
            $destinationPath = public_path().'/assets/file/file-masuk/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $masuks->filem = $filename;
        }
        $masuks->save();
        return redirect()->route('surat_masuk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $masuks = surat_masuks::findOrFail($id);
        $dis = disposisis::all();
        $ins = instansis::all();
        return view('masuk.show', compact('masuks', 'dis', 'ins'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $masuks = surat_masuks::findOrFail($id);
        $ins = instansis::all();
        $dis = disposisis::all();
        $selectedins = surat_masuks::findOrFail($id)->id_instansi;
        $selecteddis = surat_masuks::findOrFail($id)->id_disposisi;
        return view('masuk.edit', compact('masuks', 'ins', 'dis', 'selecteddis', 'selectedins'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'no_suratm' => 'required',
            'id_instansi' => 'required',
            'perihalm' => 'required',
            'id_disposisi' => 'required',
            'ket_disposisim' => 'required',
            'filem' => 'required',
        ]);

        $masuks = surat_masuks::findOrFail($id);
        $masuks->no_suratm = $request->no_suratm;
        $masuks->id_instansi = $request->id_instansi;
        $masuks->perihalm = $request->perihalm;
        $masuks->id_disposisi = $request->id_disposisi;
        $masuks->ket_disposisim = $request->ket_disposisim;
        $masuks->filem = $request->filem;
        
        if ($request->hasFile('filem')) {
            $file = $request->file('filem');
            $destinationPath = public_path().'/assets/file/file-masuk/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $masuks->filem = $filename;
        }
        $masuks->save();
        return redirect()->route('surat_masuk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $masuks = surat_masuks::findOrFail($id);
        $masuks->delete();
        return redirect()->route('surat_masuk.index');
    }
}
