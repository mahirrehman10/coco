@extends('adminpanel.adminmaster')

@section('content')


<div class="content-wrapper">
    
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Feedback Details</h3>
                        </div>
<div class="card">
@if(Session('status'))
             <h3 style="color:Green">{{Session('status')}}</h3>
         @endif
<table class="table table-hover table-striped">
<div class="content table-responsive table-full-width">
<theads>
<tr>
      <th style="color:Black"><h5><b>Id</b></h5></th>
        <th style="color:Black"><h5><b>FeedBack Title</h5></b></th>
        <th style="color:Black"><h5><b>FeedBack Desc</b></h5></th>
        <th style="color:Black"><h5><b>Date</b></h5></th>
        <th style="color:Black"><h5><b>Image</b></h5></th>
      
      </tr>
    </thead>
    <tbody>

          @foreach($feedbackv as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->feedbacktitle}}</td>
        <td>{{$item->feedbackdesc}}</td>
        <td>{{$item->feedbackdate}}</td>
        <td><img src="{{asset('image_upload/'.$item->feedbackimage)}}" height="100px" width="100px"></td>
        
        
      </tr>      
     @endforeach
    </tbody>
    </div>
  </table>
</div>

@endsection