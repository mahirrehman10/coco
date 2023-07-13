<?php

namespace App\Http\Controllers;
use App\Models\ProductEntryModel;
use Illuminate\Http\Request;
use App\Models\CartModel;
use App\Models\PincodeModel;
use App\Models\CheckoutModel;
use App\Models\ProductModel;
use App\Models\ContactusModel;
use DB;
use PDF;
use Session;

class CustomerPanelController extends Controller
{
    public function __construst()
    {
        parent::__construct();
    }
    public function productentrydropdown()
    {
        return view('customerpanel.customerindex');
    }

    public function viewproduct(Request $request)
    {
       $product_entry=ProductEntryModel::with('product_entry')->get();
    //    $product=ProductModel::with('product')->get();
       return view('customerpanel.viewproduct',compact('product_entry'));
    }

    public function viewdetail($id)
    {
        $viewdetail1=ProductEntryModel::where['pnameid=>$id']->get();
        return view('customerpanel.viewdetail1',compact('viewdetail1'));
    }

    public function viewdetail1($id)
{
    $viewdetail1=ProductEntryModel::where(['id'=>$id])->get();  //to view the product in Detail
    return view('customerpanel.viewdetail1',compact('viewdetail1'));

}

static function cartitem()  //Quantity Count
  {
    $id=session::get('CustomerLogginId')['id'];
    return CartModel::where(['userid'=>$id,'pstatus'=>'cart'])->count();
  }


    public function addtocart(Request $request)
    {
    if($request->session()->has('CustomerLogginId'))
    {
        $check=CartModel::where(['productid'=>$request->productid,'pstatus'=>'cart','userid'=>$request->session()->get('CustomerLogginId')['id']])->first();
        if($check)
        {
                $s= CartModel::find($check->id);
                $s->qty=$s->qty+1;
                $s->update();
        }
        else
    {
       $cart=new CartModel;
       $cart->userid=$request->session()->get('CustomerLogginId')['id'];
       $cart->productid=$request->productid;
       $cart->qty=$request->productqty;
       $cart->pprice=$request->pprice;
       $cart->billno=$request->billno;
       $cart->pstatus=$request->productcart;
       $cart->feedbacktitle=$request->feedbacktitle;
       $cart->feedbackdesc=$request->feedbackdesc;
       $cart->feedbackdate=$request->feedbackdate;
       $cart->feedbackimage=$request->feedbackimage;
       $cart->save();
       
    }
    return redirect('/viewproduct')->with('status','Product Added To Cart Successfully');
}
    
    }

    public function viewcart(Request $request)
  {
    $id=Session::get('CustomerLogginId')['id'];
    $data2=PincodeModel::all();
    $cust=CartModel::where(['userid'=>$id,'pstatus'=>'cart'])->get();  //to view the product in Detail
    return view('customerpanel.addtocart',compact('cust','data2'));
}

public function editqty($id)
{
    $cedit=CartModel::find($id);
    return view('/customerpanel.cartedit',compact('cedit'));//update data

}

public function updateqty(Request $request,$id)
{
    $cupdate=CartModel::find($id);
    $cupdate->qty=$request->input('qty');
    $cupdate->update();
    return redirect('/addtocart')->with('status','Update Quantity successfully');


}

public function destroycart($id)
{
    $c1delete=CartModel::find($id);
    $c1delete->delete(); //to delete the data of product
    return redirect('/addtocart')->with('status','Deleted successfully');
}

public function checkoutinsertdata(Request $request)
{

   if($request->session()->has('CustomerLogginId'))
   {

    $cart=new CheckoutModel;
    $cart->custid=$request->session()->get('CustomerLogginId')['id'];
    $cart->custname=$request->custname;
    $cart->address1=$request->address1;
    $cart->mobileno=$request->mobileno;
    $cart->custemail=$request->custemail;
    $cart->pincode=$request->pincode;
    $cart->billno=$request->billno;
    $cart->shippingtype=$request->shippingtype;
    $cart->gst=$request->gst;
    $cart->total=$request->total;
    $cart->orderdate=$request->orderdate;
     $cart->save();

     $checkoutid = $cart->id;
     $cart->billno=$checkoutid;
     $cart->update();

     $updatearry=[
        'billno'=>$checkoutid,
        'pstatus'=>'order'
     ];

     DB::table('cart_models')->where(['userid'=>$cart->custid,'pstatus'=>'cart','billno'=>'0'])->update($updatearry);

     return redirect('/viewproduct')->with('status','Checkout Successfully');
   }
}

public function vieworder()
{
    $id=Session::get('CustomerLogginId')['id'];
    $myorder=CheckoutModel::where('custid',$id)->get();
    return view('customerpanel.myorder',compact('myorder'));
}

public function vieworder1($id)
{
  $viewmyorder1=CartModel::where(['billno'=>$id])->get();  //to view the product in Detail
  return view('customerpanel.viewmyorder',compact('viewmyorder1'));
}

public function viewbill1($id)
{
  $viewbill1=CheckoutModel::where(['billno'=>$id])->get();  //to view the product in Detail
  $bill2=CartModel::where(['billno'=>$id])->get();
  return view('customerpanel.viewbill',compact('viewbill1','bill2'));
}

public function invoice_pdf($id)
{
  $viewbill1=CheckoutModel::where(['billno'=>$id])->get();  //to view the product in Detail
  $bill2=CartModel::where(['billno'=>$id])->get();
  $pdf=PDF::loadview('customerpanel.bill_pdf',array('viewbill1'=>$viewbill1,'bill2'=>$bill2));
  return view('customerpanel.bill_pdf',compact('viewbill1','bill2'));

  //return $pdf->stream();
  return $pdf->download('invoice.pdf');
}
 
public function feedback($id)
{
    $custprofile=CartModel::find($id);  //to view the data of feedback
    return view('customerpanel.feedback',compact('custprofile'));
}


public function productinsert(Request $request,$id)
{
    $s= CartModel::find($id);
    $s->feedbacktitle=$request->input('feedbacktitle');
    $s->feedbackdesc=$request->input('feedbackdesc');
    $s->feedbackdate=$request->input('feedbackdate');

      $file= $request->file('feedbackimage');
          $extenstion=$file->getClientOriginalExtension();
          $filename=rand(11111, 99999).'.'.$extenstion;
          $file->move('image_upload/',$filename);
          $s->feedbackimage=$filename;
    $s->update();
    return redirect('/myorder')->with('status',' Feedback Added successfully');
}

public function viewfeedback($id)
{
    $feedback1=CartModel::where(['id'=>$id])->get();  //to view the data
    return view('customerpanel.viewfeedback',compact('feedback1'));
}

public function contacinsert(Request $request)
{

    $validated=$request->validate([
        'cname' =>'required|max:20',
        'cemail' =>'required|max:20',
        'mobilenumber1' =>'required|max:10',
        'productname1' =>'required|max:20',
        'message' =>'required|max:1000',
        
    ]);

    $s=new ContactusModel;
    $s->cname=$request->input('cname');
    $s->cemail=$request->input('cemail');
    $s->mobilenumber1=$request->input('mobilenumber1');
    $s->productname1=$request->input('productname1');
    $s->message=$request->input('message');
     $s->save();
     return redirect('/contactus')->with('status','Your Response Saved Successfully');;
     
}

public function pdropdown()
{
    $pd=ProductModel::all();  //Dropdown Data View
    return view('userpanel.contactus',['pd'=>$pd]);
}

}