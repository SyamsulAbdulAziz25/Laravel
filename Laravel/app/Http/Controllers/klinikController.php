<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\klinikModel;

class klinikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kli=klinikModel::all();
        return view('index',compact('kli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'alamat' => 'required'
        ]);
        klinikModel::create([
            'id' => $request->id,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'keluhan' => $request->keluhan
        ]);
 
        return redirect('/');
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
        $klin= klinikModel::where('id',$id)->get();
        return view('ubah',compact('klin'));    
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
        $kl = klinikModel::where('id',$id)->first();
        $kl->nama = $request->nama_ubah;
        $kl->alamat = $request->alamat_ubah;
        $kl->keluhan = $request->keluhan_ubah;
        $kl->save();
        return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = klinikModel::find($id);
        $del->delete();
        return redirect('/');
    }
}
