<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerRegController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\CustomerPanelController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/index', function () {
    return view('userpanel.index');//index route
});

Route::get('/contactus', function () {
    return view('userpanel.contactus');//contactus route
});


Route::get('/login', function () {
    return view('userpanel.login');//login user 
});
Route::get('/reg', function () {
    return view('userpanel.reg');//user reg route
});

Route::get('/reg',[CustomerRegController::class,'register']);
Route::post('insertdata',[CustomerRegController::class,'insertdata']);  //insert register


//admin login

Route::get('/login',[AdminLoginController::class,'login']);
Route::post('/admin_check',[AdminLoginController::class,'check']);


Route::middleware(['admin_login'])->group (function()
{
        Route::get('/adminindex',function()
        {
            return view('adminpanel.adminindex');
        });

});

Route::middleware(['customer_login'])->group (function()
{
        Route::get('/customerindex',function()
        {
            return view('customerpanel.customerindex');
        });

});

Route::get('/admin_logout',[AdminLoginController::class,'AdminLogout']);
Route::get('/customer_logout',[AdminLoginController::class,'CustomerLogout']);

Route::get('/product',[AdminPanelController::class,'product']);
Route::post('/insertproduct',[AdminPanelController::class,'insertproduct']); //product insert admin
Route::get('deleteproduct/{id}',[AdminPanelController::class,'destroy']); //delete product admin
Route::get('editproduct/{id}',[AdminPanelController::class,'edit']); //edit product admin
Route::put('updatedata/{id}',[AdminPanelController::class,'update']); //update product admin

Route::get('/viewcustomer',[AdminPanelController::class,'viewcustomer']); // view customer
Route::get('deletecustomer/{id}',[AdminPanelController::class,'destroycustomer']); // delete customer

Route::get('/productentry',[AdminPanelController::class,'productentrydropdown']); // dropdown
Route::post('insertproductentry',[AdminPanelController::class,'insertproductentry']); // product insert

Route::get('/productentryview',[AdminPanelController::class,'productentryview']);  //view product entry
Route::get('deleteproductentry/{id}',[AdminPanelController::class,'destroyproductentry']);  //delete product

Route::get('/profile',[CustomerRegController::class,'profile']);  //profile customer

Route::get('editprofile/{id}',[CustomerRegController::class,'editprofile']); //edit  customer
Route::put('updateprofile/{id}',[CustomerRegController::class,'updateprofile']); //update customer

Route::get('/customerindex',[CustomerPanelController::class,'productentrydropdown']);  //pdropdown customer master
Route::get('viewdetails/{id}',[CustomerPanelController::class,'viewdetails']); //view product details

Route::get('/viewproduct',[CustomerPanelController::class,'viewproduct']);

Route::post('/addtocart',[CustomerPanelController::class,'addtocart']);  //add to cart
Route::get('/addtocart',[CustomerPanelController::class,'viewcart']);  //view cart

Route::get('/viewdetail1/{id}',[CustomerPanelController::class,'viewdetail1']); //Product Detail in Customer Panel

Route::get('/cartedit/{id}',[CustomerPanelController::class,'editqty']);  //update qty
Route::put('updatedataqty/{id}',[CustomerPanelController::class,'updateqty']); //update Insert qty

Route::get('cartdelete/{id}',[CustomerPanelController::class,'destroycart']);  //delete cart entry

Route::get('/pincode',[AdminPanelController::class,'pincode']);
Route::post('pincodeinsert',[AdminPanelController::class,'pincodeinsert']); //Pincode Insert
Route::get('deletepincode/{id}',[AdminPanelController::class,'destroypincode']);  //delete Pincode
Route::get('/editpincode/{id}',[AdminPanelController::class,'editpincode']);  //update pincode
Route::put('updatepincode/{id}',[AdminPanelController::class,'updatepincode']); //update Insert pincode

Route::post('checkoutinsertdata',[CustomerPanelController::class,'checkoutinsertdata']); //checkout insert data

//Customer View
Route::get('/myorder',[CustomerPanelController::class,'vieworder']);  //view customer


Route::get('/viewmyorder/{id}',[CustomerPanelController::class,'vieworder1']);  //view PRODUCT

Route::get('/viewbill/{id}',[CustomerPanelController::class,'viewbill1']);  //view bill

Route::get('/invoice_pdf/{id}',[CustomerPanelController::class,'invoice_pdf']);

Route::get('/customerorder',[AdminPanelController::class,'customerorder']);  //view customer
Route::get('/viewcustomerorder/{id}',[AdminPanelController::class,'viewcustomerorder']);  //view custmoer in adminpanel
Route::get('/viewcustomerbill/{id}',[AdminPanelController::class,'customerbill']);  //view bill in admin side

Route::get('/feedback/{id}',[CustomerPanelController::class,'feedback']);  //update product feedback
Route::put('productinsert/{id}',[CustomerPanelController::class,'productinsert']); //update Insert pincode

Route::get('/viewfeedback/{id}',[CustomerPanelController::class,'viewfeedback']);  //view feedback

Route::post('contacinsert',[CustomerPanelController::class,'contacinsert']); //Inquiry  Insert
Route::get('/contactus',[CustomerPanelController::class,'pdropdown']); //dropdown in  Inquiry

Route::get('/contacview',[AdminPanelController::class,'contacview1']);   //contact view in admin side

Route::get('/feedbackview/{id}',[AdminPanelController::class,'feedbackview1']);   //feedback view in admin