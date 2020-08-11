 @extends('layouts.app')
 @section('title','Prodi Page')
 @section('bread1','Prodi')
 @section('bread2','Data')
 @section('content')
 <h3>Form Prodi</h3><hr>
 @include('layouts.alert')
   <form action="{{ route('matkul.update', $matkul->kode_matakuliah) }}" method="POST">
   @csrf
   @method('PUT')
 
   <div class="form-group row">
     <label for="kode_matakuliah" class="col-sm-12">Kode Matkul</label>
       <div class="col-sm-3">
       <input type="text" name="kode_matakuliah" class="form-control" id="kode_matakuliah"
       placeholder="Masukan kode mata kuliah" value="{{ $matkul->kode_matakuliah }}" readonly>
       @error('kode_matakuliah')
       <small id="kode_matakuliah" class="form-text text-danger">
         {{ $message }}
       </small>
       @enderror
     </div>
   </div>
   <div class="form-group row">
     <label for="nama_matakuliah" class="col-sm-12">Nama Matkul</label>
     <div class="col-sm-5">
     <input type="text" name="nama_matakuliah" class="form-control" id="nama_matakuliah" placeholder="Masukan nama mata kuliah" value="{{ $matkul->nama_matakuliah }}">
       @error('nama_matakuliah')
         <small id="nama_matakuliah" class="form-text text-danger">
           {{ $message }}
         </small>
       @enderror
     </div>
   </div>
   <div class="form-group row">
     <label for="sks" class="col-sm-12">SKS</label>
     <div class="col-sm-5">
     <input type="text" name="sks" class="form-control" id="sks" placeholder="Masukan SKS mata kuliah" value="{{ $matkul->sks }}">
       @error('sks')
         <small id="sks" class="form-text text-danger">
           {{ $message }}
         </small>
       @enderror
     </div>
   </div>
   <div class="form-group row">
     <label for="semester" class="col-sm-12">Semester</label>
     <div class="col-sm-5">
     <input type="text" name="semester" class="form-control" id="semester" placeholder="Masukan semester mata kuliah" value="{{ $matkul->semester }}">
       @error('semester')
         <small id="semester" class="form-text text-danger">
           {{ $message }}
         </small>
       @enderror
     </div>
   </div>
 
     <button class="btn btn-primary" type="submit">Simpan</button>
       <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
     </form>
     @endsection 