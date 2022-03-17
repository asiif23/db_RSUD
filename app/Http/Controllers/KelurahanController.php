<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelurahan;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Kelurahan::all();
        return view ('kelurahan.index', compact(
            'datas'
        ), [
            "title" => " Data Kelurahan",
            "judul" => "Data Kelurahan",
            "active" => "Data Kelurahan"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Kelurahan;
        return view('kelurahan.create', compact(
            'model'
        ),[
            "title" => " Input Kelurahan",
            "judul" => "Input Kelurahan",
            "active" => "Input Kelurahan"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Kelurahan;
        $model->kelurahan = $request->kelurahan;
        $model->kecamatan = $request->kecamatan;
        $model->kabupaten = $request->kabupaten;
        $model->save();
        return redirect ('kelurahan')->with('succes', "Kelurahan Berhasil ditambahkan !");
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
        $model = Kelurahan::find($id);
        return view('kelurahan.edit',compact(
            'model'
        ), [
            "title" => " Edit Kelurahan",
            "judul" => "Edit Kelurahan",
            "active" => "Edit Kelurahan"
        ]);
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
        $model = Kelurahan::find($id);
        $model->kelurahan = $request->kelurahan;
        $model->kecamatan = $request->kecamatan;
        $model->kabupaten = $request->kabupaten;

        $model->save();
        return redirect('kelurahan')->with('success', "Data Berhasil diperbarui !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Kelurahan::find($id);
        $model->delete();
        return redirect('kelurahan');
    }
}
