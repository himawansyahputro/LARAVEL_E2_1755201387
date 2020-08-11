<?php  
  
namespace App; 
//new
use Illuminate\Database\Eloquent\Model;//new
//new
class Matkul extends Model//new
{//new
    protected $table = 'matkul';//new
    protected $fillable = ['kode_matakuliah', 'nama_matakuliah', 'sks', 'semester'];//new
}//new