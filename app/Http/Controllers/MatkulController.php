<?php
namespace App\Http\Controllers;//new
use App\Matkul;//new
use Illuminate\Http\Request;//new

class MatkulController extends Controller//new
{//new
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()//new
    {//new
        $matkul = Matkul::all();//new
        return view('matkul.index', compact('matkul'));//new
    }//new

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()//new
    {//new
        return view('matkul.create');//new
    }//new

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//new
    {//new
        $request->validate([//new
            'kode_matakuliah' => 'required|unique:matkul',//new
            'nama_matakuliah' => 'required',//new
            'sks' => 'required',//new
            'semester' => 'required',//new
        ]);//new

        Matkul::create($request->all());//new
        return redirect()->route('matkul.index')->with('success', 'Data Berhasil Ditambahkan');//new
    }//new

    /**
     * Display the specified resource.
     *
     * @param  \App\Matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function show(Matkul $matkul)//new
    {//new
        ////new
    }//new
//new
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function edit($id)//new
    {//new
        $matkul = Matkul::where('kode_matakuliah', $id)->first();//new
        return view('matkul.edit', compact('matkul'));//new
    }//new

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)//new
    {//new
        $request->validate([//new
            'nama_matakuliah' => 'required',//new
            'sks' => 'required',//new
            'semester' => 'required',//new
        ]);//new
        Matkul::where('kode_matakuliah', $id)//new
            ->update([//new
                'nama_matakuliah' => $request->nama_matakuliah,//new
                'sks' => $request->sks,//new
                'semester' => $request->semester,//new
            ]);//new
        return redirect()->route('matkul.index')->with('success', 'Data Berhasil Diedit');//new
    }//new

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)//new
    {//new
        Matkul::where('kode_matakuliah', $id)->delete();//new
        return redirect()->route('matkul.index')->with('success', 'Data Berhasil Dihapus');//new
    }//new
}//new