<?php //new
namespace App\Http\Controllers;//new
use App\Prodi;//new
use Illuminate\Http\Request;//new
class ProdiController extends Controller//new
{//new
    /** 
     * Display a listing of the resource. 
     * 
     * @return \Illuminate\Http\Response 
     */ //new
    public function index()//new
    {//new
        $prodi = Prodi::all();//new
        return view('prodi.index', compact('prodi'));//new
    }//new
    /** 
     * Show the form for creating a new resource. 
     * 
     * @return \Illuminate\Http\Response 
     */ //new
    public function create()//new
    {//new
        ////new
        return view('prodi.create');//new
    }//new
 
    /** 
     * Store a newly created resource in storage. 
     * 
     * @param  \Illuminate\Http\Request  $request 
     * @return \Illuminate\Http\Response 
     */ 
    public function store(Request $request) //new
    {//new
        ////new
        $request->validate([//new
            'kode_prodi' => 'required|unique:prodi',//new
            'nama_prodi' => 'required',//new
            'kaprodi' => 'required',//new
        ]);//new
//new
        Prodi::create($request->all());//new
        return redirect()->route('prodi.index')->with('success', 'Data Berhasil Ditambahkan');//new
    }//new
//new
    /** 
     * Display the specified resource. 
     * 
     * @param  int  $id 
     * @return \Illuminate\Http\Response 
     */ 
    public function show($id)//new
    {//new
        ////new
        $prodi = Prodi::where('kode_prodi', $id)->first();//new
        return view('prodi.edit', compact('prodi'));//new
    }//new
//new
    /** 
     * Show the form for editing the specified resource. 
     * 
     * @param  int  $id 
     * @return \Illuminate\Http\Response 
     */ 
    public function edit($id) 
    { 
        ////new
    } //new
    /** 
     * Update the specified resource in storage. 
     * 
     * @param  \Illuminate\Http\Request  $request 
     * @param  int  $id 
     * @return \Illuminate\Http\Response 
     */ 
    public function update(Request $request, $id) //new
    { //new
        ////new
        $request->validate([//new
            'nama_prodi' => 'required',//new
            'kaprodi' => 'required',//new
        ]);//new
//new
        Prodi::where('kode_prodi', $id)//new
            ->update([//new
                'nama_prodi' => $request->nama_prodi,//new
                'kaprodi' => $request->kaprodi,//new
            ]);//new
        return redirect()->route('prodi.index')->with('success', 'Data Berhasil Diedit');//new
    }//new
//new
    /** 
     * Remove the specified resource from storage. 
     * 
     * @param  int  $id 
     * @return \Illuminate\Http\Response 
     */ 
    public function destroy($id) 
    {//new
        // //new
        Prodi::where('kode_prodi', $id)->delete();//new
        return redirect()->route('prodi.index')->with('success', 'Data Berhasil Dihapus');//new
    }//new
}//new