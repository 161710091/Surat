<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\surat_keluars;
use App\instansis;
use App\disposisis;

class SuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keluars = surat_keluars::with('KDisposisi', 'KInstansi')->get();
        return view('keluar.index', compact('keluars'));
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
        return view('keluar.create', compact('dis', 'ins'));
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
            'no_suratk' => 'required',
            'tgl_suratk' => 'required',
            'pengirimk' => 'required',
            'perihalk' => 'required',
            'id_instansi' => 'required',
            'alamatk' => 'required',
            'id_disposisi' => 'required',
            'ket_disposisik' => 'required',
            'filek' => 'required',
        ]);

        $keluars = new surat_keluars;
        $keluars->no_suratk = $request->no_suratk;
        $keluars->tgl_suratk = $request->tgl_suratk;
        $keluars->pengirimk = $request->pengirimk;
        $keluars->perihalk = $request->perihalk;
        $keluars->id_instansi = $request->id_instansi;
        $keluars->alamatk = $request->alamatk;
        $keluars->id_disposisi = $request->id_disposisi;
        $keluars->ket_disposisik = $request->ket_disposisik;
        $keluars->filek = $request->filek;

        if ($request->hasFile('filek')) {
            $file = $request->file('filek');
            $destinationPath = public_path().'/assets/file/file-keluar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $keluars->filek = $filename;
            }
        $keluars->save();
        return redirect()->route('surat_keluar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dis = disposisis::all();
        $selecteddis = surat_keluars::findOrFail($id)->id_disposisi;
        $ins = instansis::all();
        $selectedins = surat_keluars::findOrFail($id)->id_instansi;
        $keluars = surat_keluars::findOrFail($id);
        return view('keluar.edit', compact('dis', 'ins', 'keluars', 'selecteddis', 'selectedins'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $keluars = surat_keluars::findOrFail($id);
        $keluars->delete();
        return redirect()->route('surat_keluar.index');
    }
}
