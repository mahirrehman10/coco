@extends('customerpanel.customermaster')

@section('content')



<center><h3><b>Product Feedback</b></h3><br></center>
<div class="">

<table class="table table-hover table-striped" border="4">
<div class="content table-responsive table-full-width">
<thead>
<tr>
      <th style="color:Black"><h5><b>Id</b></h5></th>
        <th style="color:Black"><h5><b>Feedback Title</h5></b></th>
        <th style="color:Black"><h5><b>Feedback </b></h5></th>
        <th style="color:Black"><h5><b>Date </b></h5></th>
        <th style="color:Black"><h5><b>Feedback Image</b></h5></th>

      </tr>
    </thead>
    <tbody>
    @foreach($feedback1 as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->feedbacktitle}}</td>
        <td>{{$item->feedbackdesc}}</td>
        <td>{{$item->feedbackdate}}</td>
        <td><img src="{{asset('image_upload/'.$item->feedbackimage)}}" height="100px" width="100px"></td>
        @endforeach
    </tbody>
    </div>
  </table>
</div>
@endsection