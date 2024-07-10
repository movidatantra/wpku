<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\Nilai;
use App\Models\User;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{ 

    public function dashboard(){
        return view('dashboard');
    }
    public function news(){
        return view('news');
    }
    public function index(Request $request){

        $data = new User;

        if ($request->get('search')) {
            $data = $data->where('name', 'LIKE', '%' . $request->get('search') . '%')
                ->orWhere('email', 'LIKE', '%' . $request->get('search') . '%');
                
        }
        $data = $data->get();
        
        return view ('index',compact('data','request'));
    }
    public function create(){
        return view('create');
    }
    
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'nama' => 'required|string|max:255',
            'password' => 'required',
        ]);

        // Simpan data ke database
        $data = new User;
        $data->email = $request->email;
        $data->name = $request->nama;
        $data->password = Hash::make($request->password);; // Hash password sebelum menyimpan
        $data->save();

        // Redirect dengan pesan sukses
        return redirect()->route('index')->with('success', 'User berhasil ditambahkan.');
    }

    public function edit(Request $requset,$id){
        $data = User::find($id);

        
        return view('edit',compact('data'));
    }
  

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'nama' => 'required|string|max:255',
            'password' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $data = User::find($id);
        if (!$data) {
            return redirect()->back()->with('error', 'User tidak ditemukan.');
        }

        $data->email = $request->email;
        $data->name = $request->nama;

        if ($request->password) {
            $data->password = Hash::make($request->password);
        }

        $data->save();

        return redirect()->route('admin.index')->with('success', 'Data user berhasil diperbarui.');
    }
    
    public function delete($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'User tidak ditemukan.');
        }

        $user->delete();

        return redirect()->route('admin.index')->with('success', 'User berhasil dihapus.');
    }

    //SPK ALTERNATIF
    public function alternatif(Request $request){
     $data = Alternatif::get();
     if ($request->get('search')) {
        $data = $data->where('nama_kota', 'LIKE', '%' . $request->get('search') . '%');
            
    }

     
     return view('alternatif',compact('data'));
    }
    public function alternatif_create(){
        return view('altcreate');

    }
    public function storage(Request $request){
        $validator = Validator::make($request->all(),[
            'nama' => 'required|string|max:255',
            
        ]);
        // if($request->fails()) return redirect()->back()->withInput()->withErrors($request);
        
        
        // Simpan data ke database
        $data = new Alternatif();
        
        $data->nama_kota = $request->nama;
        
        $data->save();
        

        return redirect()->route('admin.alternatif')->with('success', 'Data berhasil disimpan.');
    }

    //edit spk
    public function alternatif_edit(Request $request, $id){
        $data = Alternatif::find($id);

        // var_dump($data);
        return view('altedit',compact('data'));

    }

    public function alternatif_update(Request $request, $id)
{
    $validator = Validator::make($request->all(), [
        'nama_kota' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withInput()->withErrors($validator);
    }

    $data['nama_kota'] = $request->nama_kota;

    Alternatif::whereId($id)->update($data);

    return redirect()->route('admin.alternatif');
}
public function alternatif_delete($id)
    {
        $alt = Alternatif::find($id);
        if (!$alt) {
            return redirect()->back()->with('error', 'User tidak ditemukan.');
        }

        $alt->delete();

        return redirect()->route('admin.alternatif')->with('success', 'User berhasil dihapus.');
    }


    // SPK KRITERIA
    public function kriteria(Request $request){
        $data = Kriteria::get();
        if ($request->get('search')) {
           $data = $data->where('nama_kriteria', 'LIKE', '%' . $request->get('search') . '%');
        }   
        return view('kriteria',compact('data'));
    }
    public function kriteria_create(Request $request){
        return view('kriteria-create');
    }
    public function storage_kriteria(Request $request){
        // var_dump($request->all());
        $validator = Validator::make($request->all(), [
            'nama_kriteria' => 'required|string',
            'label' => 'required|in:cost,benefit', // Validasi enum untuk label
        'bobot' => 'required|numeric',
            'flag' => 'required|string'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    
        $data = new Kriteria();
        $data->nama_kriteria = $request->nama_kriteria;
        $data->label = $request->label;
        $data->bobot = $request->bobot;
        $data->flag = $request->flag;
        $data->save();
    
        return redirect()->route('admin.kriteria')->with('success', 'Data berhasil disimpan');
    }
     //edit spk
     public function kriteria_edit(Request $request, $id){
        $data = Alternatif::find($id);

        // var_dump($data);
        return view('kriteria-edit',compact('data'));

    }
    public function kriteria_update(Request $request, $id)
{
    $validator = Validator::make($request->all(), [
        'nama_kriteria' => 'required',
        'label' => 'required|in:cost,benefit', // Validasi enum untuk
        'bobot' => 'required|numeric',
        'flag' => 'required|string'


    ]);

    if ($validator->fails()) {
        return redirect()->back()->withInput()->withErrors($validator);
    }

    $data['nama_kriteria'] = $request->nama_kriteria;
    $data['label'] = $request->label;
    $data['bobot'] = $request->bobot;
    $data['flag'] = $request->flag;


    Kriteria::whereId($id)->update($data);

    return redirect()->route('admin.kriteria');
}
public function kriteria_delete($id)
    {
        $krt = Kriteria::find($id);
        if (!$krt) {
            return redirect()->back()->with('error', 'Kriteria tidak ditemukan.');
        }

        $krt->delete();

        return redirect()->route('admin.kriteria')->with('success', 'Kriteria berhasil dihapus.');
    }

   // NILAI ALTERNATIF DAN KRITERIA

    
    public function nilai(Request $request){

        $data = new Nilai;

        $data = $data->get();
        
        return view ('nilai',compact('data','request'));
    }
    public function nilai_create(){
        return view('nilai-create');
    }
    
    public function storage_nilai(Request $request)
    {
        // var_dump($request->all());
        // Validasi data
        $request->validate([
            
            'c1' => 'required|numeric',
            'c2' => 'required|numeric',
            'c3' => 'required|numeric',
            'c4' => 'required|numeric',
            'c5' => 'required|numeric',
        ]);

        // Simpan data ke database
        $data = new Nilai;
       
        $data->c1 = $request->c1;
        $data->c2 = $request->c2;
        $data->c3 = $request->c3;
        $data->c4 = $request->c4;
        $data->c5 = $request->c5;
        $data->save();

        // Redirect dengan pesan sukses
        return redirect()->route('nilai')->with('success', 'Nilai alternatif berhasil ditambahkan.');
    }

    public function nilai_edit(Request $request, $id)
    {
        // Cari data nilai berdasarkan ID
        $data = Nilai::find($id);

        // Jika data tidak ditemukan, redirect dengan pesan error
        if (!$data) {
            return redirect()->route('admin.nilai')->with('error', 'Nilai tidak ditemukan.');
        }

        // Kirim data ke view untuk diedit
        return view('admin.nilai.edit-nilai', compact('data'));

        
        
    }
  

    public function nilai_update(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            'id_alt' => 'required',
            'nama_alternatif' => 'required|string|max:255',
            'c1' => 'required|numeric',
            'c2' => 'required|numeric',
            'c3' => 'required|numeric',
            'c4' => 'required|numeric',
            'c5' => 'required|numeric',
        ]);

        // Cari data berdasarkan ID dan update
        $data = Nilai::findOrFail($id);
        
        $data->id_alt = $request->id_alt;
        $data->nama_alternatif = $request->nama_alternatif;
        $data->c1 = $request->c1;
        $data->c2 = $request->c2;
        $data->c3 = $request->c3;
        $data->c4 = $request->c4;
        $data->c5 = $request->c5;
        $data->save();

        // Redirect dengan pesan sukses
        return redirect()->route('nilai')->with('success', 'Nilai alternatif berhasil diperbarui.');
    }
    
    public function nilai_delete($id)
    {
        // Cari data nilai berdasarkan ID
        $nilai = Nilai::find($id);

        // Jika data tidak ditemukan, redirect dengan pesan error
        if (!$nilai) {
            return redirect()->back()->with('error', 'Nilai tidak ditemukan.');
        }

        // Hapus data nilai
        $nilai->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.nilai')->with('success', 'Nilai berhasil dihapus.');
    }

}
