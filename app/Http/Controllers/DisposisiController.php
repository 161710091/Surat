<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\disposisis;

class DisposisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dis = disposisis::all();
        return view('disposisi.index', compact('dis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('disposisi.create');
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
            'disposisi'=>'required|max:255',
        ]);

        $dis = new disposisis;
        $dis->disposisi = $request->disposisi;
        $dis->save();
        return redirect()->route('disposisi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dis = disposisis::findOrFail($id);
        return view('disposisi.show', compact('dis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dis = disposisis::findOrFail($id);
        return view('disposisi.edit', compact('dis'));
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
            'disposisi'=>'required|max:255',
        ]);

        $dis = disposisis::findOrFail($id);
        $dis->disposisi = $request->disposisi;
        $dis->save();
        return redirect()->route('disposisi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dis = disposisis::findOrFail($id);
        $dis->delete();
        return redirect()->route('disposisi.index');
    }
}
