<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth:admin');    
    }
 
    public function index() {
        return view('admins.pages.home');
    }

    public function create(){
        return view('admins.pages.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'first_name' => ['required', 'string', 'max:10'],
            'last_name' => ['required', 'string', 'max:10'],
            'user_name' => ['required', 'string', 'max:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed']
         ]);

         User::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'user_name' => $request['user_name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect('/admins');
    }

    public function showList() {
        $admins = User::all()->where('isAdmin', 1);
        return view('admins.pages.list')->with(compact('admins'));
    }
}
