@extends('adminlayout.app')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			
		</div>

<div class="col-md-6">
			<div class="card">
        <div class="card-header">
          <h5 class="">Post Job</h5
  > <h3 class="text-center text-success">{{ Session :: get('message') }}</h3>
        </div>
   <div class="card-body">
    <form method="POST" action="{{ route('jobview') }}">
      @csrf
      <div class="form-group">
    <label for="exampleInputEmail1">Tittle</label>
    <input type="text" class="form-control" name="title"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Enter Tittle" required>

    
    
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" required></textarea>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Salary</label>
    <input type="text" class="form-control " name="salary"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Salary" required>

    
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Location</label>
    <input type="text" class="form-control"   name="location"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter location" required>
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Country</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="country" placeholder="Password" required>

    

  </div>

  
  <button type="submit" name="submit" class="btn btn-primary">Post</button>
</form>
  </div>
  
</div>
		</div>
		<div class="col-md-3">
			
		</div>

	</div>
</div>
@endsection