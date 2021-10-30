<?php

namespace App\Http\Controllers;

use App\Models\provinsi;
use Illuminate\Http\Request;



class provinsicontroller extends Controller
{
    public function provinsi(){
        $provinsi = provinsi::all();

        return view('dashboard.provinsi', ['provinsi' => $provinsi]);
    }
    public function tambahdataprovinsi(){
        
        return view('dashboard.tambahprovinsi');
    }
    public function simpandataprovinsi(Request $request){
        $provinsi = new provinsi();
        $provinsi->nama = $request->provinsi;    
        if($provinsi->save()){
            echo "
                <script>
                    alert('Data berhasil dirubah');
                    document.location.href = '/provinsi'
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data gagal dirubah');
                    document.location.href = '/tambahprovinsi'
                </script>
            ";
        }

        
    }
    public function hapusprovinsi(Request $request){
        $provinsi =provinsi::where('id',$request->id);
        if($provinsi->delete()){
            echo "
                <script>
                    alert('Data berhasil dihapus');
                    document.location.href = '/provinsi'
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data gagal dihapus');
                    document.location.href = '/provinsi'
                </script>
            ";
        }

        
    }
    public function editprovinsi(Request $request){
        $provinsi =provinsi::where('id',$request->id);
        return view('dashboard.editprovinsi',['provinsi' => $provinsi],['request' => $request]);
    }
    // public function updateprovinsi(Request $request){
    //     $provinsi = new provinsi();
    //     $provinsi->nama = $request->provinsi;    
    //     if($provinsi->save()){
    //         echo "
    //             <script>
    //                 alert('Data berhasil dirubah');
    //                 document.location.href = '/provinsi'
    //             </script>
    //         ";
    //     } else {
    //         echo "
    //             <script>
    //                 alert('Data gagal dirubah');
    //                 document.location.href = '/tambahprovinsi'
    //             </script>
    //         ";
    //     }

        
    // }
    public function updateprovinsi(Request $request){
        $provinsi = provinsi::find($request->id)->where('id',$request->id)->update([
        'id' => $request->id,
        'nama' => $request->provinsi
        
    ]);
        
        return redirect('provinsi');
    }
}
