<?php

namespace App\Http\Controllers;
use App\Models\absen;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $datas = absen::all();
        return view('Dashboard.datamhs', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new absen;
        return view('absensi.absensimhs', compact('model'), [
            'title' => 'ABSENSI',
            'active' => 'ABSENSI'
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
        $model = new absen();
        $model->name = $request->name;
        $model->nim = $request->nim;
        $model->email = $request->email;
        $model->kelas_id = $request->kelas_id;
        $model->fakultas_id = $request->fakultas_id;
        $model->tanggal_absen = $request->tanggal_absen;
        
        $model->save();

        return redirect('/berhasil');
        // $model = $request->validate([
        //     'name' => 'required|max:255',
        //     'nim' => ['required', 'min:3', 'max:255', 'unique:absen'],
        //     'kelas_id' => 'required|max:255',
        //     'fakultas_id' => 'required|max:255',
        //     'email' => 'required|email|unique:absen',
        //     'tanggal_absen' => 'required|max:255'
        // ]);
        
        // absen::create($model);
        // return redirect('/berhasil');
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
        //
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
        //
    }
}
