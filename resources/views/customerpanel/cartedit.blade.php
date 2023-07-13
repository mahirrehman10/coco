@extends('customerpanel.customermaster')

@section('content')



<center>
<div class="row">
        <div class="col-md-12">
       
<div class="">
<h3><b>Qty Edit</b></h3><br>

<form action="{{url('updatedataqty/'.$cedit->id)}}" method="post"> 
@csrf
@method('PUT')
            @if(Session('status'))
             <h3 style="color:Green">{{Session('status')}}</h3>
         @endif

<label for="fname"><b>Quantity :  </b></label>
<input type="number" id="fname" min="1" max="99" name="qty" value="{{$cedit->qty}}"><br><br>
<h6 style="color:red">@error('qty'){{$message}}@enderror</h6><br>

<button type="submit" class="btn btn-info">Update</button><br><br>



</form>
</div>

</div>

</div>
</center>

@endsection
