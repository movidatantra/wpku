<?php

namespace App\Http\Controllers;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class DataTableController extends Controller
{

    
    public function clientside(Request $request){

        $data = new User;

        if ($request->get('search')) {
            $data = $data->where('name', 'LIKE', '%' . $request->get('search') . '%')
                ->orWhere('email', 'LIKE', '%' . $request->get('search') . '%');
                
        }
        $data = $data->get();
        
        return view ('datatable.clientside',compact('data','request'));
    }

    public function serverside(Request $request){

        $data = new User;

        if ($request->get('search')) {
            $data = $data->where('name', 'LIKE', '%' . $request->get('search') . '%')
                ->orWhere('email', 'LIKE', '%' . $request->get('search') . '%');
                
        }
        // $data = $data->get();
        
        return view ('datatable.serverside',compact('data','request'));
    }
    
}