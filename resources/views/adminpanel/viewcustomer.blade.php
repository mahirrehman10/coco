@extends('adminpanel.adminmaster')

@section('content')
  
<div class="wrapper">

    

        
        <div class="content-wrapper">
            
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">View Customer</h3>
                                </div>
    <center>
    @if(session('status'))

    <h3 style="color:red">{{session('status')}}</h3>
    
    @endif
    </center>
    <!-- Main content -->
   
    
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->

      <section class="content">
      
              <!-- /.card-header -->
              <div class="card-body">
               
              <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    
                    <th>Id</th>
                    <th>Fullname</th>
                    <th>Username</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Dob</th>
                    <th>Mobile Number</th>
                    <th>Email</th>
                    <th>password</th>
                    <th>Status</th>
                    <th>Delete</th>
                 
                  </tr>
                  </thead>
                 <tbody>
                  @foreach($viewcustomer as $item)
                    <th>{{$item->id}}</th>
                    <th>{{$item->fullname}}</th>
                    <th>{{$item->username}}</th>
                    <th>{{$item->gender}}</th>
                    <th>{{$item->address}}</th>
                    <th>{{$item->dob}}</th>
                    <th>{{$item->mobilenumber}}</th>
                    <th>{{$item->email}}</th>
                    <th>{{$item->password}}</th>

                    <th>
                        @if($item->status=='0')

                        <b class="btn btn-danger">Dactive</b>

                        @elseif($item->status=='1')

                        <b class="btn btn-success">Active</b>
                        @endif
                        

                    <th><a href="{{url('deletecustomer/'.$item->id)}}" class="btn btn-danger" onclick="return confirm('Are You Sure You Want To Delete')" >Delete</a></th>
                  </tr>


                  @endforeach
                  </tbody>
                  </tfoot>

                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</center>

  @endsection

