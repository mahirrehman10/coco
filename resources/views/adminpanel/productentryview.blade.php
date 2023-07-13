@extends('adminpanel.adminmaster')

@section('content')


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
                                    <h1 class="card-title">Product Entry View</h1>
                                </div>
</body>

<div class="card">

<table class="table table-hover table-striped">
<div class="content table-responsive table-full-width">
<theads>
<tr>
      <th style="color:Black"><h5><b>Id</b></h5></th>
        <th style="color:Black"><h5><b>Category</h5></b></th>
        <th style="color:Black"><h5><b>Product Name</b></h5></th>
        <th style="color:Black"><h5><b>Company</b></h5></th>
        <th style="color:Black"><h5><b>Flavours</b></h5></th>
        <th style="color:Black"><h5><b>Size</b></h5></th>
        <th style="color:Black"><h5><b>Description</b></h5></th>
        <th style="color:Black"><h5><b>Image</b></h5></th>
        <th style="color:Black"><h5><b>Image1</b></h5></th>
        <th style="color:Black"><h5><b>Image2</b></h5></th>
        <th style="color:Black"><h5><b>Product Status</b></h5></th>
        <th style="color:Black"><h5><b>Price</b></h5></th>
        <th style="color:Black"><h5><b>Delete</b></h5></th>
        
      </tr>
    </thead>
    <tbody>

          @foreach($product_entry as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->category}}</td>
        <td>{{$item->product_entry->productname}}</td>
        <td>{{$item->company}}</td>
        <td>{{$item->flavours}}</td>
        <td>{{$item->size}}</td>
        <td>{{$item->description}}</td>
        <td><img src="{{asset('image_upload/'.$item->image)}}" height="80px" width="80px"></td>
        <td><img src="{{asset('image_upload/'.$item->image1)}}" height="80px" width="80px"></td>
        <td><img src="{{asset('image_upload/'.$item->image2)}}" height="80px" width="80px"></td>
        <td>
                        @if($item->status=='0')

                        <b class="btn btn-danger">Dactive</b>

                        @elseif($item->productstatus=='1')

                        <b class="btn btn-success">Active</b>
                        @endif
        </td>              
        <td>{{$item->price}}RS</td>
        <td><a href="{{url('deleteproductentry/'.$item->id)}}" class="btn btn-danger" onclick="return confirm('Are You Sure You Wants To Delete?')">Delete</a></td>

       
              
        
      </tr>      
     @endforeach
    </tbody>
    </div>
  </table>
</div>


@endsection