<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    public function index(Request $request){
//        dd(Gate::allows('view-admin-dashboard'));

        if (!Gate::allows('view-admin-dashboard')){
            abort(403);
        }

        return view('admin/index');
    }
}
