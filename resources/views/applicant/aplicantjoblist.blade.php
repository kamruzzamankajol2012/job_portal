@extends('userlayout.app')
@section('content')
<div class="continer-fluid">
	<div class="row">
		<div class="col-md-1">	
		</div>

		<div class="col-md-10">
		<div class="card">
			<div class="card-header">
				
             <h5>Job List</h5><h3 class="text-center text-success">{{ Session :: get('message') }}</h3>
			</div>

			<div class="card-body">
				@foreach($postjobs as $postjob)
				<div class="card-header">
					<p class="lead text-success">Tittle: {{ $postjob->title }}</p>
				</div>

				<div class="card-header">
					<p class="lead">Description: {{ $postjob->description }}</p>
				</div>
				<div class="card-header">
					<p class="lead">Salary: {{ $postjob->salary }}</p>
				</div>
				<div class="card-header">
					<p class="lead">Location: {{ $postjob->location }}</p>
				</div>
				<div class="card-header">
					<p class="lead">Country: {{ $postjob->country }}</p>
				</div>
				<div class="card-header">
					

						<button  type="submit" class="btn-outline-success">Apply</button>
					
					
					
				</div>
				@endforeach
			</div>

			<div class="card-footer">
				
				
			</div>
				
			</div>	
		</div>

		<div class="col-md-1">	
		</div>
	</div>
</div>
@endsection