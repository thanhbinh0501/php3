<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    public function Output(){
        return 'hello';
    }
    public function index(){
        $data = DB::table('sinhvien')->join('lophoc', 'sinhvien.MaLop', '=', 'lophoc.MaLop')->select('*')->get();
        foreach($data as $sv) {
            echo $sv->TenSV . '<br>';
        }
    }
}
