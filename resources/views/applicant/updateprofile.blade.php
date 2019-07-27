@extends('userlayout.app')
@section('content')

<div class="container-fluid">
	<div class="row">

		<div class="col-md-1">
			
		</div>
		<div class="col-md-10">
					<div class="card">
        <div class="card-header">
          <h5 class="">Update Profile</h5
  > <h3 class="text-center text-success">{{ Session :: get('message') }}</h3>
        </div>
   <div class="card-body">
    <form method="POST" action="{{ route('upload') }}" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" name="fname"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Enter First Name" required>

    
    
  </div>
  

  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control " name="lname"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Last Name" required>

    
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control"   name="email"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" required>
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Skill</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="skill" placeholder="skill" required>
</div>

<div class="custom-file">

    <input type="file" class="custom-file-input" name="image" id="inputGroupFile01">
    <label class="custom-file-label" for="inputGroupFile01">Choose Image</label>
  </div><br><br>

  <div class="custom-file">

    <input type="file" class="custom-file-input" name="pdf" id="inputGroupFile01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>


  <br><br>
  <button type="submit" name="submit" class="btn btn-primary">Upload</button>
</form>
  </div>
  
</div>
		</div>
		<div class="col-md-1">
			
		</div>
	</div>
</div>

@endsection