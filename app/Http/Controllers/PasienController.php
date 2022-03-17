<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasien = Pasien::all();

        return view('pasien.index', [
            "title" => " Daftar Pasien",
            "judul" => "Data Pasien",
            "active" => "Daftar Pasien",
            "pasien" => $pasien
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasien.create', [
            "title" => " Tambah Pasien",
            "judul" => "Input Data Pasien",
            "active" => "Tambah Pasien"
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
        $id = IdGenerator::generate(['table' => 'pasien', 'length' => 10, 'prefix' =>date('ym')]);
        $todo = new Pasien();
	    $todo->id = $id;
        $todo->nama = $request->nama;
        $todo->alamat = $request->alamat;
        $todo->noHp = $request->noHp;
        $todo->rtRW = $request->rtRW;
        $todo->Kelurahan = $request->Kelurahan;
        $todo->tanggalLahir = $request->tanggalLahir;
        $todo->jenisKelamin = $request->jenisKelamin;
        $todo->save();

        $this->validate($request,[
            'nama' => 'required',
            'alamat' => 'required',
            'noHp' => 'required',
            'rtRW' => 'required',
            'Kelurahan' => 'required',
            'tanggalLahir' => 'required',
            'jenisKelamin' => 'required'
        ]);

        Pasien::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'noHp' => $request->noHp,
            'rtRW' => $request->rtRW,
            'Kelurahan' => $request->Kelurahan,
            'tanggalLahir' => $request->tanggalLahir,
            'jenisKelamin' => $request->jenisKelamin
        ]);

        return redirect('/pasien')->with('succes',"Data Berhasil Di input!");
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
        $pasien = Pasien::find($id);
        return view ('pasien.edit',
        [
            'pasien' => $pasien,
            "title" => " Edit Data Pasien",
            "judul" => "Edit Data Pasien",
            "active" => "Edit Pasien"
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
        $this->validate($request, [
            'nama'      =>      'required',
            'alamat'      =>      'required',
            'noHp'      =>      'required',
            'rtRW'      =>      'required',
            'Kelurahan'      =>      'required',
            'tanggalLahir'      =>      'required',
            'jenisKelamin'      =>      'required'
        ]);

        $pasien= Pasien::find($id);
        $pasien->nama = $request->nama;
        $pasien->alamat = $request->alamat;
        $pasien->noHp = $request->noHp;
        $pasien->rtRW = $request->rtRW;
        $pasien->Kelurahan = $request->Kelurahan;
        $pasien->tanggalLahir = $request->tanggalLahir;
        $pasien->jenisKelamin = $request->jenisKelamin;

        // $pasien = Pasien::find($id);
        // $pasien -> update($request->all());
        $pasien->save();
        return redirect('pasien');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();
        return redirect('pasien')->with('success',"Berhasil Dihapus !");
    }
}
