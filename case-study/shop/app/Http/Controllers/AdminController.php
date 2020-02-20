<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;

session_start();

use App\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin_login');
    }

    public function show_dashboard()
    {
        return view('admin.dashboard');
    }

    public function dashboard(Request $req)
    {
        // $credentials = array('email'=>$req->email,'password'=>$req->password);

        // $email = $req->email;
        // $password = $req->password;
        // $admin = Admin::all();
        // $flag = false;
        // foreach($admin as $key => $value){
        //     if($value['admin_email'] == $email && $value['admin_password'] == $password){
        //         $flag = true;
        //     }
        // }

        // if($flag == true){
        //     return redirect()->route('dashboard')->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
        // }else{
        //     return redirect()->route('admin')->with(['flag'=>'danger','message'=>'Tài khoản chưa kích hoạt']); 
        // }

        $admin_email = $req->email;
        $admin_password = $req->password;

        $result = DB::table('admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        if ($result) {
            session::put('admin_name', $result->admin_name);
            session::put('admin_password', $result->admin_password);
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('admin')->with('error', 'Đăng nhập sai tài khoản hoặc mật khẩu');;
        }
    }


    public function admin_logout()
    {
        session::put('admin_name', null);
        session::put('admin_password', null);
        return redirect()->route('admin');
    }
}
