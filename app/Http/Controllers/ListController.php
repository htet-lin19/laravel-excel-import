<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;

class ListController extends Controller
{

    public function index()
    {
        $lists = DB::table('list')->get();
        return view("list", ["lists" => $lists]);
    }
    public function create(Request $req)
    {
        DB::table('list')->insert([
            'code' => $req->input("code"),
            'recipient_name_1' => $req->input("recipient_name_1"),
            'recipient_name_2' => $req->input("recipient_name_2"),
            'yuu' => $req->input("yuu"),
            'address_1' => $req->input("address_1"),
            'address_2' => $req->input("address_2"),
            'address_3' => $req->input("address_3"),
            'phone' => $req->input("phone"),
            'shipping_category' => $req->input("shipping_category")
        ]);
        $users = DB::table('list')->get();
        return view("list", ["lists" => $users]);
    }
    public function search(Request $req)
    {
        $name = $req->input("search");
        if ($name == null) {
            $users = DB::table('list')->get();
        } else {
            $users = DB::table('list')
                ->where('recipient_name_1', 'like', "%" . $name . "%")
                ->get();
        }
        return view("list", ["lists" => $users]);
    }

    function import(Request $request)
    {

        $this->validate($request, [
            'file' => 'required|file|mimes:xls,xlsx'
        ]);

        $file = $request->file('file');
        Excel::import(new UsersImport, $file);
        return redirect()->back()->with('success', 'All data successfully imported!');



        // if ($request->file('file')) {
        //     $import =  Excel::import(new UsersImport, request()->file('file'));
        //     $msg_success = "Data Uploaded Succesfully! ";
        //     $msg_danger = "Data Uploaded failed! ";
        //     if ($import) {
        //         return redirect('/')->with('success', strtoupper($msg_success));
        //     } else {
        //         return redirect('/')->with('danger', strtoupper($msg_danger));
        //     }
        // } else {
        //     $msge = "please choose your file! ";
        //     return redirect('/')->with('choose_file', strtoupper($msge));
        // }
    }
}
