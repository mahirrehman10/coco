@extends('adminpanel.adminmaster')

@section('content')


<center>
<div class="row">
        <div class="col-md-12">
       
<div class="card">
<h3><b>Pincode</b></h3><br>

<form action="{{url('updatepincode/'.$piedit->id)}}" method="post"> 
@csrf
@method('PUT')
            @if(Session('status'))
             <h3 style="color:Green">{{Session('status')}}</h3>
         @endif

<label for="fname"><b>Update Pincode :  </b></label>
<input type="text" id="fname" name="pincode" value="{{$piedit->pincode}}"><br><br>
<h6 style="color:red">@error('pincode'){{$message}}@enderror</h6><br>
<button type="submit" class="btn btn-danger">Update</button><br><br>



</form>
</div>

</div>

</div>
</center>
@endsection