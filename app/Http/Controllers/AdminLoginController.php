<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminLoginModel;
use App\Models\CustomerRegModel;
use Session;

class AdminLoginController extends Controller
{
        public function login()
        {
            return view('userpanel.login');
        }
        public function check(Request $request)
        {

            if($request->user=="admin")
            {
                $data=AdminLoginModel::where(['email'=>$request->email,'password'=>$request->password])->first();

                if($data)
                {
                    $request->session()->put('AdminLogginId',$data);
                    return redirect('/adminindex');
                }
                else
                {
                       return back()->with('fail','Invalid Email id & Password');
                }
            }
            elseif($request->user=="customer")
            {
                $data=CustomerRegModel::where(['email'=>$request->email,'password'=>$request->password])->first();

                if($data)
                {
                    $request->session()->put('CustomerLogginId',$data);
                    return redirect('/customerindex');
                }
                else
                {
                        return back()->with('fail','Invalid Email id & Password');
                }
            }
        }

        public function AdminLogout(Request $request)
        {
            Session::Forget('AdminLogginId');
            return redirect('/login');
        }

        public function CustomerLogout(Request $request)
        {
            Session::Forget('CustomerLogginId');
            return redirect('/login');
        }

}

