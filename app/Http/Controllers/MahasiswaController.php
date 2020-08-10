<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
//use App\prodi;//bikin app prodi
use Illuminate\Http\Request;
//use DataTables;//pertemuan 12
use Yajra\DataTables\Facades\DataTables;
class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  return "Halaman index Mahasiswa";//Praktek Pertemuan 10  //
      // $mhs = Mahasiswa::where('nim', '1755201387')->first();//Praktek Pertemuan 10
      // return $mhs->nama_lengkap;//Praktek Pertemuan 10
      return view('mahasiswa.index'); 
    }

    public function mhs_list()//pertemuan 12
    {
       return Datatables::of(Mahasiswa::all())//pertemuan 12
       ->addIndexColumn()//pertemuan 12
      // ->make(true);//pertemuan 12
      ->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
