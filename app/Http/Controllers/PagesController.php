<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class PagesController extends Controller
{
    //
    public function login(){
        return view('home.login');
    }
    public function index(){
        return view('home.index');
    }
    public function register(){
        return view('home.register');
    }
    public function registersubmit(Request $req){
        /*$req->validate(
            [
                'name'=>'required|regex:/^[A-Z a-z]+$/',
                'uname'=>'required|min:5|max:20|starts_with:U,u,user',
                'password'=>'required',
                'conf_password'=>'required|same:password',
                'id'=>'regex:/^[0-9]{2}-[0-9]{5}-[1-3]{1}$/'
                
            ],
            [
                'uname.required'=>'Please provide your username',
                'uname.max'=> 'Username should not exceed 20 characters',
                'uname.min'=> 'Username  should contain at least 5 characters'
            ]
    
    );*/

       $this->validate($req,
            [
                'name'=>'required|regex:/^[A-Z a-z]+$/',
                'uname'=>'required|min:5|max:20|starts_with:U,u,user',
                'password'=>'required',
                'conf_password'=>'required|same:password',
                'id'=>'regex:/^[0-9]{2}-[0-9]{5}-[1-3]{1}$/'
            ],
            [
                'uname.required'=>'Please provide your username',
                'uname.max'=> 'Username should not exceed 20 characters',
                'uname.min'=> 'Username  should contain at least 5 characters'
            ]
    
        );
        //end of validation
        $st = new Student();
        $st->name = $req->name;
        $st->user_id = $req->id;
        $st->username = $req->uname;
        $st->password = $req->password;
        $st->save();
        return "<h1>form Submitted with $req->uname and $req->password</h1>";
    }
    public function loginsubmit(Request $req){
        /*$req->validate(
            [
                'name'=>'required|regex:/^[A-Z a-z]+$/',
                'uname'=>'required|min:5|max:20|starts_with:U,u,user',
                'password'=>'required',
                'conf_password'=>'required|same:password',
                'id'=>'regex:/^[0-9]{2}-[0-9]{5}-[1-3]{1}$/'
                
            ],
            [
                'uname.required'=>'Please provide your username',
                'uname.max'=> 'Username should not exceed 20 characters',
                'uname.min'=> 'Username  should contain at least 5 characters'
            ]
    
    );*/

       $this->validate($req,
            [
                'name'=>'required|regex:/^[A-Z a-z]+$/',
                'uname'=>'required|min:5|max:20|starts_with:U,u,user',
                'password'=>'required',
                'conf_password'=>'required|same:password',
                'id'=>'regex:/^[0-9]{2}-[0-9]{5}-[1-3]{1}$/'
            ],
            [
                'uname.required'=>'Please provide your username',
                'uname.max'=> 'Username should not exceed 20 characters',
                'uname.min'=> 'Username  should contain at least 5 characters'
            ]
    
        );
        return "<h1>form Submitted with $req->uname and $req->password</h1>";
    }
}
