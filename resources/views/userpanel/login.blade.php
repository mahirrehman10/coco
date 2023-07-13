@extends('userpanel.master')

@section('content')



<center>
<form action="/admin_check" method="post">
	@csrf 
	@if(Session::get('success'))
	<div class="alert alert- success">
		{{Session::get('success')}}
	</div>

	@endif

	@if(Session::get('fail'))
	<div class="alert alert- danger">
		{{Session::get('fail')}}
	</div>

	@endif



					 <h1><b>Login</b></h1><br><br> 
					 <section class="contact_section layout_padding">
  <center>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5 col-lg-8 offset-md-1 offset-lg-2">
            <div class="form_container">
              <div class="heading_container">
			
					<select name="user" class="form-control">
						<option value="">---Select User---</option>
						<option value="admin">Admin</option>
						<option value="customer">Customer</option>
						</select><br><br>
		      		
		      			<input type="text" placeholder="Enter Username/Email" class="form-control" name="email"  required>
					
					  <input type="password" placeholder="Enter password" class="form-control" name="password"  required>
		      		<br><br>

	           	<button type="submit" class="btn btn-success">login</button><br>
				<a href="/reg" class="btn btn-info">New Registration</a>
</form>
</div>
            </div>
          </div>
        </div>
      </div>
    </section>
</center>

					@endsection
