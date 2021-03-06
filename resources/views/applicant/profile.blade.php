@extends('userlayout.app')
@section('content')

<div class="container-fluid">
	<div class="row">
		<h5 class="display-3 text-center">Profile</h5>
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="card">
				@foreach($applicants as $applicant)

				<div class="card-header">

					<img src="{{ Storage::url($applicant->image) }}" class="" height="140" width="100">
				</div>
				<div class="card-header">

					<p class="lead">First Name:{{ $applicant->fname }}</p>
				</div>
				<div class="card-header">
					<p class="lead">Last Name:{{ $applicant->lname }}</p>
				</div>
				<div class="card-header">
					<p class="lead">Email:{{ $applicant->email }}</p>
				</div>
				<div class="card-header">
					<p class="lead">Skill:{{ $applicant->skill }}</p>
				</div>
				<div class="card-header">
					<p class="lead">Cv:{{ Storage::url($applicant->pdf) }}</p>
				</div>
				<div class="card-header">
					<button type="submit">Update</button>
				</div>
					
				
				@endforeach
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>
@endsection