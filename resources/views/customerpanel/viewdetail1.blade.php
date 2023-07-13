@extends('customerpanel.customermaster')

@section('content')



<div class="">

<table class="table table-hover table-striped">
<div class="content table-responsive table-full-width">
<theads>
<tr>
      <th style="color:Black"><h5><b>No.</b></h5></th>
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
        
        
      </tr>
    </thead>
    <tbody>

          @foreach($viewdetail1 as $item)
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
        <td>{{$item->productstatus}}</td>
        <td>{{$item->price}}</td>
        
      </tr>      
     @endforeach
    </tbody>
    </div>
  </table>
</div>

@endsection