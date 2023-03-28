<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class kelascontroller extends Controller
{
    public function index()
    {
        $kelas =Kelas::all();

        return view('kelas.index', compact('kelas'));
    }

    public function tambah()
    {
        return view('kelas.tambah');
    }

    public function simpan(Request $request)
    {
        try{
            Kelas::create([
                'kelas' => $request->kelas,
                'kompetensi_keahlian' => $request->kompetensi_keahlian,


            ]);

            return redirect('kelas')->with('sukses' ,'data telah ditambahkan');
        }catch(\Exception $e){
            return redirect('kelas')->with('gagal' ,'data gagal ditambahkan');
        }
    }

    public function edit($id)
    {
        try{
            $kelas = Kelas::findOrFail($id);

        return view('kelas.edit', compact('kelas'));

            return redirect('kelas')->with('sukses' ,'data telah ditambahkan');
        }catch(\Exception $e){
            return redirect('kelas')->with('gagal' ,'data gagal ditambahkan');
        }
    }

    public function update(Request $request)
    {
        try{
            Kelas::where('id', $request->id)->update([
                'kelas' => $request->kelas,
                'kompetensi_keahlian' => $request->kompetensi_keahlian,
            ]);

            return redirect('kelas')->with('sukses' ,'data telah ditambahkan');
        }catch(\Exception $e){
            return redirect('kelas')->with('gagal' ,'data gagal ditambahkan');
        }
    }

    public function hapus($id)
    {
        try{
            Kelas::findOrFail($id);

            Kelas::destroy($id);

            return redirect('kelas')->with('sukses' ,'data telah di hapus');
        }catch(\Exception $e){
            return redirect('kelas')->with('gagal' ,'data gagal di hapus');
        }
    }
}
