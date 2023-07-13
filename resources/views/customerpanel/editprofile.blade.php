@extends('customerpanel.customermaster')

@section('content')

<div class="col-lg-12">  


					<div class="">
						<div class="card-body">
                                                <form action="{{url('updateprofile/'.$pvedit->id)}}" method="post">
@csrf
@method('PUT')
            
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Full Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" id="fname"  name="fullname" class="form-control" value="{{$pvedit->fullname}}">
                                                                        <h6 style="color:red">@error('fullname'){{$message}}@enderror</h6><br>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Username</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" id="fname" name="username" class="form-control" value="{{$pvedit->username}}">
                                                                        <h6 style="color:red">@error('username'){{$message}}@enderror</h6><br>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Address</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" id="fname" name="address" class="form-control" value="{{$pvedit->address}}">
                                                                        <h6 style="color:red">@error('address'){{$message}}@enderror</h6><br>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Mobile Number</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" id="fname" name="mobilenumber" class="form-control" value="{{$pvedit->mobilenumber}}">
                                                                        <h6 style="color:red">@error('mobilenumber'){{$message}}@enderror</h6><br>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
                                                                <button type="submit" class="btn btn-danger">Update</button><br><br>
								</div>
							</div>
						</div>
					</div>




                                        <!-- <center>
<div class="row">
        <div class="col-md-12">
       
<div class="card">
<h3><b>Profile Edit</b></h3><br>

<form action="{{url('updateprofile/'.$pvedit->id)}}" method="post">
@csrf
@method('PUT')
            @if(Session('status'))
             <h3 style="color:Green">{{Session('status')}}</h3>
         @endif


         <label for="fname"><b>Full Name:  </b></label>
<input type="text" id="fname" name="fullname" value="{{$pvedit->fullname}}"><br><br>
<h6 style="color:red">@error('fullname'){{$message}}@enderror</h6><br>

<label for="fname"><b>Username :  </b></label>
<input type="text" id="fname" name="username" value="{{$pvedit->username}}"><br><br>
<h6 style="color:red">@error('username'){{$message}}@enderror</h6><br>

<label for="fname"><b>Address :  </b></label>
<input type="text" id="fname" name="address" value="{{$pvedit->address}}"><br><br>
<h6 style="color:red">@error('address'){{$message}}@enderror</h6><br>

<label for="fname"><b>Mobile Number :  </b></label>
<input type="number" id="fname" name="mobilenumber" value="{{$pvedit->mobilenumber}}"><br><br>
<h6 style="color:red">@error('address'){{$message}}@enderror</h6><br>


<button type="submit" class="btn btn-danger">Update</button><br><br>



</form>
</div>

</div>

</-div>
</center> -->




@endsection


