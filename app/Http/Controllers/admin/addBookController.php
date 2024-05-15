<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class addBookController extends Controller
{
    public function viewAdd(){
        return view ('login.admin');
    }
    public function addBook(Request $request){


        $inserted = DB::table('books')->insert([
            'book_name' => $request->input('bname'), 
            'author' => $request->input('author'),
            'publish_date' => $request->input('pdate'),
            'is_borrowed' => 0,
            'updated_at' => now(),
            'created_at' => now(),
            'cost'=> $request ->input('cost'), 
        ]);
       /* if ($inserted) {
            return redirect('/homepage');->route('home.view')->with('success', 'Adoption application submitted successfully!');
        } else {
            return redirect('/register');
        }*/
    }
}
