<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\instansis;

class InstansiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ins = instansis::all();
        return view('instansi.index', compact('ins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instansi.create');
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
            'nama_instansi' => 'required|max:255',
            'kab_kota' => 'required|max:255',
            'telp' => 'required|max:255|unique:instansis',
            'email' => 'required|max:255|unique:instansis',
            'alamat' => 'required|max:255',
            'kepala' => 'required|max:255',
            'nip_kepala' => 'required|max:255|unique:instansis',
        ]);

        $ins = new instansis;
        $ins->nama_instansi = $request->nama_instansi;
        $ins->kab_kota = $request->kab_kota;
        $ins->telp = $request->telp;
        $ins->email = $request->email;
        $ins->alamat = $request->alamat;
        $ins->kepala = $request->kepala;
        $ins->nip_kepala = $request->nip_kepala;
        $ins->save();
        return redirect()->route('instansi.index');
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
        $ins = instansis::findOrFail($id);
        return view('instansi.edit', compact('ins'));
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
            'nama_instansi' => 'required|max:255',
            'kab_kota' => 'required|max:255',
            'telp' => 'required|max:255',
            'email' => 'required|max:255',
            'alamat' => 'required|max:255',
            'kepala' => 'required|max:255',
            'nip_kepala' => 'required|max:255',
        ]);

        $ins = instansis::findOrFail($id);
        $ins->nama_instansi = $request->nama_instansi;
        $ins->kab_kota = $request->kab_kota;
        $ins->telp = $request->telp;
        $ins->email = $request->email;
        $ins->alamat = $request->alamat;
        $ins->kepala = $request->kepala;
        $ins->nip_kepala = $request->nip_kepala;
        $ins->save();
        return redirect()->route('instansi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ins = instansis::findOrFail($id);
        $ins->delete();
        return redirect()->route('instansi.index');
    }
}
