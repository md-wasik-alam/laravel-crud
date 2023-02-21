<?php

namespace App\Http\Controllers;

use App\Models\Emp_records;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class HomeController extends Controller
{
  
    public function storeData(Request $req): RedirectResponse{
        $data = $req->validate([
            'fullname' => 'required',
            'contact' => 'required|integer|unique:App\Models\Emp_records,contact',
            'email'=>'required',
            'salary'=>'required',
            'address'=>'required'
        ]);

        Emp_records::create($data);
        return redirect()->route('home'); 



    }

    public function readData(): View{
        $edata=Emp_records::all();
        return view("home",['dataa'=>$edata]);
    }
}
