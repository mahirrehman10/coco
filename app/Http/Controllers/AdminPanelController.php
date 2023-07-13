<?php

namespace App\Http\Controllers;
use App\Models\ProductModel;
use App\Models\CustomerRegModel;
use App\Models\ProductEntryModel;
use App\Models\PincodeModel;
use App\Models\CheckoutModel;
use App\Models\CartModel;
use App\Models\ContactusModel;

use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    
        public function product()
        {
            $product=ProductModel::all();
            return view('adminpanel.product',compact('product'));
        }
    
        public function insertproduct(Request $request)
        {
            $validated=$request->validate([
                'productname' =>'required|max:20',
            ]);
            
           $s=new ProductModel;
           $s->productname=$request->input('productname');
           $s->save();
           return redirect('/product')->with('status','Product Added Succesfully');
        }
    
        public function destroy($id)
        {
            $pdelete=ProductModel::find($id);
            $pdelete->delete();
            return redirect('/product')->with('status','Product Deleted Successfully');
        }
    
        public function edit($id)
        {
            $pedit=ProductModel::find($id);
            return view('/adminpanel.edit',compact('pedit'));
        }
    
        public function update(Request $request,$id)
        {
            $pupdate=ProductModel::find($id);
            $pupdate->productname=$request->input('productname');
            $pupdate->update();
            return redirect('/product')->with('status','Product Update Successfully');
        }
    
        public function viewcustomer()
        {
            $viewcustomer=CustomerRegModel::all();
            return view('adminpanel.viewcustomer',compact('viewcustomer'));
        }

        public function destroycustomer($id)
        {
            $cdelete=CustomerRegModel::find($id);
            $cdelete->delete();
            return redirect('/viewcustomer')->with('status','Product Deleted Successfully');
        }

        // product data dropdown
        public function productentrydropdown()
        {
            $data=ProductModel::all();
            return view('/adminpanel.productentry',['data'=>$data]);
        }

        public function insertproductentry(Request $request)
    {

        $validated=$request->validate([
            'category' => 'required|max:50',
            'pnameid' => 'required|max:50',
            'company' => 'required|max:5000',
            'flavours' => 'required',
            'size' => 'required|max:500',
            'description' => 'required|max:500',
            'image' => 'required',
            'image1' => 'required',
            'image2' => 'required',
            'price' => 'required|max:10',
            
        ]);

        $s=new ProductEntryModel;
        $s->category=$request->input('category');
        $s->pnameid=$request->input('pnameid');
        $s->company=$request->input('company');
        $s->flavours=$request->input('flavours');
        $s->size=$request->input('size');
        $s->description=$request->input('description');

        if($request->hasfile('image')){
        $file= $request->file('image');
            $extenstion=$file->getClientOriginalExtension();
            $filename=rand(11111, 99999).'.'.$extenstion;
            $file->move('image_upload/',$filename);
            $s->image=$filename;
        }

        if($request->hasfile('image1')){
        $file1= $request->file('image1');
            $extenstion=$file1->getClientOriginalExtension();
            $filename1=rand(11111, 99999).'.'.$extenstion;
            $file1->move('image_upload/',$filename1);
            $s->image1=$filename1;
        }

            if($request->hasfile('image2')){
        $file2= $request->file('image2');
            $extenstion=$file2->getClientOriginalExtension();
            $filename2=rand(11111, 99999).'.'.$extenstion;
            $file2->move('image_upload/',$filename2);
            $s->image2=$filename2;
        }

        
         $s->price=$request->input('price');

         $s->save();
         return redirect('/productentry')->with('status','Product Entry Added Successfully');
            
    }

    public function productentryview()
 {
    $product_entry=ProductEntryModel::with('product_entry')->get();
    $product=ProductModel::with('product')->get();//tabale data view
    return view('adminpanel.productentryview',compact('product_entry','product'));
 }


public function destroyproductentry($id)
{
    $cdelete=ProductEntryModel::find($id); 
    $cdelete->delete(); //to delete the data of product entry
    return redirect('/productentryview')->with('status','Deleted successfully');

}

public function pincode()
{
    $pincode=PincodeModel::all();  //to view the data
    return view('adminpanel.pincode',compact('pincode'));
}



public function pincodeinsert(Request $request)
{

   $validated=$request->validate([
    'pincode' =>'required|max:6',
    
   ]);
   

    $s=new PincodeModel;
    $s->pincode=$request->input('pincode');
     $s->save();  //to insert data in db
     return redirect('/pincode')->with('status','Pincode added successfully');
}



public function destroypincode($id)
{
    $pidelete=PincodeModel::find($id); 
    $pidelete->delete(); //to delete the data of pincode
    return redirect('/pincode')->with('status','Deleted successfully');

}


public function editpincode($id)
{
    $piedit=PincodeModel::find($id); 
    return view('/adminpanel.editpincode',compact('piedit'));//update data

}

public function updatepincode(Request $request,$id)
{
    $piupdate=PincodeModel::find($id); 
    $piupdate->pincode=$request->input('pincode');
    $piupdate->update();
    return redirect('/pincode')->with('status','Update successfully');


}

public function customerorder()
{
    $vieworder=CheckoutModel::all();  //to view the data
    return view('adminpanel.customerorder',compact('vieworder'));
}

public function viewcustomerorder($id)
{
  $viewcustomerorder=CartModel::where(['billno'=>$id])->get();  //to view the product in Detail
  
  return view('adminpanel.viewcustomerorder',compact('viewcustomerorder'));
}


public function customerbill($id)
{
  $v1=CheckoutModel::where(['billno'=>$id])->get();  //to view the product in Detail
  $b2=CartModel::where(['billno'=>$id])->get();
  return view('adminpanel.viewcustomerbill',compact('v1','b2'));
}

public function contacview1()
{
    $cview=ContactusModel::all();  //to view the data
  
    return view('adminpanel.contacview',compact('cview'));
}


public function feedbackview1($id)
{
  $feedbackv=CartModel::where(['id'=>$id])->get();  //to view the product in Detail
  
  return view('adminpanel.feedbackview',compact('feedbackv'));
}

}
