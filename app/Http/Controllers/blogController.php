<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
Use App\Models\Post;
Use Session;

class blogController extends Controller
{
    //
    public function adminRegister(){
        return view('admin-register');
    }

    public function adminLogin(){
        return view('admin-login');
    }

    public function postAuthor(){
        return view('post-author');
    }
    public function postAdmin(){
        return view('post-admin');
    }

    public function berandaAdmin(){
        $post = Post::all();
        return view('admin-beranda', ['post'=>$post]);
    }

    public function storeAuthor(Request $request){
        $title = $request -> title;
        $content = $request -> content;

        $request -> validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $post = Post::create([
            'username' => 'Author',
            'title' => $title,
            'content' => $content,
            'date' => NOW()
        ]);

        return redirect('/post-author');
    }

    public function storeDaftar(Request $request){
        $nama = $request -> nama;
        $username = $request -> username;
        $password = $request -> password;

        $request -> validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        $post = Account::create([
            'username' => $username,
            'password' => $password,
            'name' => $nama,
            'role' => 'Admin'
        ]);

        return redirect('/admin-login');
    }

    public function storeLogin(Request $request){
        $username = $request -> username;
        $password = $request -> password;

        $check = Account::where('username', $username)->first();
        
        $user_check = $check->username;
        $pwd_check = $check->password;

        if($username != $user_check || $password != $pwd_check){
            echo"Username atau password salah!";
        }
        else{
            $session_admin = Session::put('username', $username);
            return redirect('/beranda-admin');
        }
    }

    public function storeAdmin(Request $request){
        $title = $request -> title;
        $content = $request -> content;
        $request_session = Session::get('username');

        $request -> validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $post = Post::create([
            'username' => $request_session,
            'title' => $title,
            'content' => $content,
            'date' => NOW()
        ]);

        return redirect('/post-author');
    }
}
