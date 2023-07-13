@extends('customerpanel.customermaster')

@section('content')


<body style="background-color:;">
<center><h3 style="color:black;" ><b> Product Entry View</b></h3><br></center>
<div class="p-3 mb-2 bg-info text-white">
<center>
<table class="table table-hover table-striped">
<div class="">
<theads>
<tr>
      <th style="color:Black"><h5><b>Id</b></h5></th>
        <th style="color:Black"><h5><b>Category</h5></b></th>
        <th style="color:Black"><h5><b>Product</b></h5></th>
        <th style="color:Black"><h5><b>company</b></h5></th>
        <th style="color:Black"><h5><b>Flavours</b></h5></th>
        <th style="color:Black"><h5><b>Size</b></h5></th>
        <th style="color:Black"><h5><b>description</b></h5></th>
        <th style="color:Black"><h5><b>image</b></h5></th>
        <th style="color:Black"><h5><b>image1</b></h5></th>
        <th style="color:Black"><h5><b>image2</b></h5></th>
        <th style="color:Black"><h5><b>productstatus</b></h5></th>
        <th style="color:Black"><h5><b>price</b></h5></th>
        
        
      </tr>
    </thead>
    <tbody>

          @foreach($viewdetails1 as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->category}}</td>
        <td>{{$item->productname}}</td>
        <td>{{$item->company}}</td>
        <td>{{$item->color}}</td>
        <td>{{$item->flavour}}</td>
        <td>{{$item->description}}</td>
        <td><img src="{{asset('image_upload/'.$item->image)}}"></td>
        <td><img src="{{asset('image_upload/'.$item->image1)}}"></td>
        <td><img src="{{asset('image_upload/'.$item->image2)}}"></td>
        <td>
              @if($item->status=='0')

              <b class="btn btn-danger">Dactive</b>

              @elseif($item->productstatus=='1')

              <b class="btn btn-success">Active</b>

              @endif
        </td>
        <td>{{$item->price}}RS</td>
       
       
              
        
      </tr>      
     @endforeach
    </tbody>
    </div>
  </table>
</center>
</div>
</body>

@endsection