@extends('adminpanel.adminmaster')
@section('content')
       
 




            


<!DOCTYPE html>
<html>

<head>
    
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

    

        
        <div class="content-wrapper">
            
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Product Entry</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" action="{{url('insertproductentry')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @if(Session('status'))
                                    <h3 style="color: green">{{Session('status')}}</h3>
                                    @endif
                                    <div class="card-body">
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Category Name:</label>
                                            <select name="category" class="form-control"  required>
                                                
                                                    <option value="">--Select Category--</option> 
                                                            <option value="Munch">Munch </option>
                                                            <option value="Dairy Milk">Dairy Milk </option>
                                                            <option value="KitKat">KitKat </option>
                                                            <option value="Ferrero Rocher">Ferrero Rocher </option>
                                                            <option value="Nutties">Nutties </option>
                                                            <option value="Milkybar">Milkybar </option>
                                                            <option value="Amul">Amul </option>
                                                            <option value="Mars">Mars </option>
                                                            <option value="Toblerone">Toblerone </option>
                                                            <option value="Schmitten ">Schmitten  </option>
                                            
                                                    </select>

                                                    <div class="form-group">
                                                     <label for="exampleInputEmail1">Product Name:</label>
                                                     <select name="pnameid" class="form-control" required>
                                                
                                                    <option value="">--Select Name--</option>
                                                    @foreach($data as $row)
                                                    <option value="{{$row->id}}">{{$row->productname}}</option>
                                                    @endforeach
                                                    </select>
                                                  
                                                  

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Company</label>
                                                        <input type="text" name="company" class="form-control" id="exampleInputEmail1" placeholder="Enter Company " required>
                                                        <h6 style="color: red">@error('Company'){{$message}}@enderror</h6>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Flavours</label>
                                                        <input type="text" name="flavours" class="form-control" id="exampleInputEmail1" placeholder="Enter Flavours" required>
                                                        <h6 style="color: red">@error('Flavours'){{$message}}@enderror</h6>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Size</label>
                                                        <input type="textarea" name="size" class="form-control" id="exampleInputEmail1" placeholder="Enter Size" required>
                                                        <h6 style="color: red">@error('Size'){{$message}}@enderror</h6>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Description</label>
                                                        <input type="textarea" name="description" class="form-control" id="exampleInputEmail1" placeholder="Enter Description" style="height:100px" required>
                                                        <h6 style="color: red">@error('description'){{$message}}@enderror</h6>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Image:</label>
                                                        <input type="file" name="image" class="bxadj form-control " required><br><br>
                                                        <h6 style="color: red">@error('image'){{$message}}@enderror</h6>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Image 1:</label>
                                                        <input type="file" name="image1" class="bxadj form-control " required><br><br>
                                                        <h6 style="color: red">@error('image1'){{$message}}@enderror</h6>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Image 2:</label>
                                                        <input type="file" name="image2" class="bxadj form-control " required><br><br>
                                                        <h6 style="color: red">@error('image2'){{$message}}@enderror</h6>
                                                    </div>

                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Price</label>
                                            <input type="number" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter Price" min="1" data-bind="value:replyNumber" required>
                                            <h6 style="color: red">@error('price'){{$message}}@enderror</h6>
                                        </div>
                                        
                                        

                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>
</html>

@endsection


