<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerRegModel;
use App\Models\ProductModel;
use Session;
class CustomerRegController extends Controller
{
    public function register()
    {
        return view('userpanel.reg');
    }

    public function insertdata(Request $request)



    
    {


        $email = $request->input('email');
        if (CustomerRegModel::where('email', '=', $email)->count() > 0) {
            return back()->with('status','Email Id Already Exists');
        } else {
         
$validated=$request->validate([
    'fname' =>'required|max:20',
    'uname' =>'required|max:20',
    'gender' =>'required|max:100',
    'address' =>'required|min:5',
    'dob' =>'before:10/19/2004',
    'mobilenumber' =>'required',
    'email' =>'required|email|max:255|unique:users',
    'psw' =>'required',

]);
       $s=new CustomerRegModel;
       $s->fullname=$request->input('fname');
       $s->username=$request->input('uname');
       $s->gender=$request->input('gender');
       $s->address=$request->input('address');
       $s->dob=$request->input('dob');
       $s->mobilenumber=$request->input('mobilenumber');
       $s->email=$request->input('email');
       $s->password=$request->input('psw');
       $s->save();
       return redirect('/reg')->with('status','Registration Successfully');
    }
}

    public function profile()
    {
        $id=Session::get('CustomerLogginId')['id'];
        $profile=CustomerRegModel::where('id',$id)->get();
        return view('customerpanel.profile',compact('profile'));
    }

    public function editprofile($id)
{
    $pvedit=CustomerRegModel::find($id); 
    return view('/customerpanel.editprofile',compact('pvedit'));//update data

}

public function updateprofile(Request $request,$id)
{
    $pvupdate=CustomerRegModel::find($id); 
    $pvupdate->fullname=$request->input('fullname');
    $pvupdate->username=$request->input('username');
    $pvupdate->address=$request->input('address');
    $pvupdate->mobilenumber=$request->input('mobilenumber');
    $pvupdate->update();
    return redirect('/profile')->with('status',' Profile Update successfully'); //profile update


}

public function productentrydropdown()
{
    $data=ProductModel::all();  //dropdown product customerside
    return view('customerpanel.index',['data'=>$data]);

}

}
