<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AjaxTestController extends Controller
{
    public function getData(Request $request){
        var_dump($request->all());die;
    }
}
