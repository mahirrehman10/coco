@extends('adminpanel.adminmaster')

@section('content')
  
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="adminindex">Home</a></li>
             
            </ol>
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
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form action="{{url('updatedata/'.$pedit->id)}}"   method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Master</label>
                    <input type="text" name="productname" class="form-control" value="{{$pedit->productname}}"  id="exampleInputEmail1" placeholder="Enter Product">
                  </div>
                  <h6 style="color:red">@error('productname'){{$message}}@enderror</h6>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
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

    


  @endsection

