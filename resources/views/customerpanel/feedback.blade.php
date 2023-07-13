@extends('customerpanel.customermaster')

@section('content')



<center>
<div class="row">
        <div class="col-md-12">
       
<div class="card">
<h3><b>Product Feedback</b></h3><br>

<form action="{{url('productinsert/'.$custprofile->id)}}" method="post" enctype="multipart/form-data"> 
@csrf
@method('PUT')
            @if(Session('status'))
             <h3 style="color:blue">{{Session('status')}}</h3>
         @endif

<label for="fname"><b>Feedback Title :  </b></label>
<input type="text" id="fname" name="feedbacktitle" value="{{$custprofile->feedbacktitle}}"><br><br>
<h6 style="color:red">@error('feedbacktitle'){{$message}}@enderror</h6><br>

<label for="fname"><b>Feedback Description :  </b></label>
<input type="text" id="fname" name="feedbackdesc" value="{{$custprofile->feedbackdesc}}"><br><br>
<h6 style="color:red">@error('feedbackdesc'){{$message}}@enderror</h6><br>


<label for="fname"><b>Date :  </b></label>
<input type="text" id="fname" name="feedbackdate" value="{{ now()->format('d-m-y') }}"><br><br>
<h6 style="color:red">@error('feedbackdate'){{$message}}@enderror</h6><br>


<label for="fname"><b>Upload Image :  </b></label><br>
<input type="file" id="fname" name="feedbackimage" value="{{$custprofile->feedbackimage}}"><br>
<h6 style="color:red">@error('feedbackimage'){{$message}}@enderror</h6><br>

<button type="submit" class="btn btn-info">Submit</button><br><br>



</form>
</div>

</div>

</div>
</center>




@endsection