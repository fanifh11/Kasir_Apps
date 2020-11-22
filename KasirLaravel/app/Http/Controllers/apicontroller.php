<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BukuModel;

class apicontroller extends Controller
{
    public function read(){
        $daftar_buku = BukuModel::all();
        return response([
            'status' => true,
            'message' => 'Daftar Buku',
            'data' => $daftar_buku
        ], 200);
    }

    public function insert (Request $request){
        BukuModel::create([
            'judul_buku' => $request->judulBuku,
            'jumlah_stock' => $request->jmlStock
        ]);
        
        return response([
            'status' => true,
            'message' => 'Data berhasil dimasukkan',
        ],200);
    }


    public function update (Request $request, $kode_buku){
        $check= BukuModel::find($kode_buku);

        if ($check) {
            BukuModel :: find($kode_buku)->update([
                'judul_buku' => $request->judulBuku,
                'jumlah_stock' => $request->jmlStock,
            ]);
    
            return response([
                'status' => true,
                'message' => 'Data berhasil diubah',
            ],200);
            
        } else{
            return response([
                'status' => false,
                'message' => "Kode barang tidak ditemukan"
            ],404);
        }
    }

    public function delete ($kode_buku){
        $check = BukuModel::find($kode_buku);

        if ($check){
            BukuModel::destroy($kode_buku);
            return response([
                'status' => true,
                'messsage' => 'Data Dihapus',
            ],200);
        } else {
            return response([
                'status' => false,
                'messsage' => 'Data Tidak Ditemukan',
            ],404);
        }
    }
}
