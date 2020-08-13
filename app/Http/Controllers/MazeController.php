<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MazeController extends Controller
{
    public function index()
    {
        return view('pages.maze');
    }

    public function generate(Request $request)
    {
        $maze = "";

        $s = $request->input('suku');

        if($this->checkInput($s)){
            return response()->json([
                'maze' => $maze,
                's' => $s
            ]);
        }

        // buat polanya dinding pintu kiri, jalan, sama dindin pintu kanan
        $repeat = $s - 2;
        $dindingPintuKiri = "<pre>@</pre>"."<pre>&nbsp;</pre>".str_repeat("<pre>@</pre>", $repeat);
        $jalan = "<pre>@</pre>".str_repeat("<pre>&nbsp;</pre>", $repeat)."<pre>@</pre>";
        $dindingPintuKanan = str_repeat("<pre>@</pre>", $repeat)."<pre>&nbsp;</pre>"."<pre>@</pre>";
    
        // buat pola mazenya
        $maze = "";
        $kiriStatus = true;
        $jalanStatus = false;
        $kananStatus = false;
        $kiriCounter = 0;
        $kananCounter = 0;
        
        for($j=0;$j<$s;$j++){
            $maze = $maze."<span class='maze-row'>";
            if($kiriStatus){
                $maze = $maze.$dindingPintuKiri;
                $kiriStatus = false;
                $jalanStatus = true;
                $kiriCounter++;
            } else if($jalanStatus){
                $maze = $maze.$jalan;
                if($kiriCounter == $kananCounter){
                    $kiriStatus = true;
                } else {
                    $kananStatus = true;	
                }
                $jalanStatus = false;
            } else if($kananStatus){
                $maze = $maze.$dindingPintuKanan;
                $kananStatus = false;
                $jalanStatus = true;
                $kananCounter++;
            }
            $maze = $maze."</span>";
        }
        // end pola maze

        return response()->json([
            'maze' => $maze,
            's' => $s
        ]);
    }

    public function checkInput($s)
    {
        $n = ($s+1)/4;
        if(!preg_match('/^\d+$/', $n)){
            return true;
        }
        return false;
    }
}
