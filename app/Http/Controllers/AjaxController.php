<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kecamatan;
use App\Kelurahan;

class AjaxController extends Controller
{
    public function kecamatan($kota_id) {
        $html = '<option value="">Pilih Kecamatan</option>';
        $kecamatans = Kecamatan::where('kota_id', $kota_id)->get();
        foreach ($kecamatans as $kecamatan) {
            $html .= '<option value="'.$kecamatan->id.'">'.$kecamatan->nama.'</option>';
        }
    
        return response()->json(['html' => $html]);
     }

     public function kelurahan($kecamatan_id) {
        $html = '<option value="">Pilih Kelurahan</option>';
        $kelurahans = Kelurahan::where('kecamatan_id', $kecamatan_id)->get();
        foreach ($kelurahans as $kelurahan) {
            $html .= '<option value="'.$kelurahan->id.'">'.$kelurahan->nama.'</option>';
        }
    
        return response()->json(['html' => $html]);
     }
}
