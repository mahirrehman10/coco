@extends('adminpanel.adminmaster')

@section('content')
  
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <center>
    @if(session('status'))

    <h3 style="color:red">{{session('status')}}</h3>
    
    @endif
    </center>
    <!-- Main content -->
    <center>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pincode</h3>
              </div>
              <!-- form start -->
              
              <form action="{{url('pincodeinsert')}}"   method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pincode </label>
                    <input type="number" name="pincode" class="form-control" value="{{old('pincode')}}"  id="exampleInputEmail1" placeholder="Enter Pincode">
                  </div>
                  <h6 style="color:red">@error('pincode'){{$message}}@enderror</h6>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</center>
    
      
  
      
    
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->

      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
               
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               
              <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    
                  <th>Id</th>
                    <th>Product Pincode</th>
                    <th>Edit</th>
                    <th>Delete </th>
                 
                  </tr>
                  </thead>
                 <tbody>
                  @foreach($pincode as $item)
                    <th>{{$item->id}}</th>
                    <th>{{$item->pincode}}</th>
                    <th><a href="{{url('editpincode/'.$item->id)}}" class="btn btn-success" >Edit</a></th>
                    <th><a href="{{url('deletepincode/'.$item->id)}}" class="btn btn-danger" onclick="return confirm('Are You Sure You Want To Delete')" >Delete</a></th>
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

