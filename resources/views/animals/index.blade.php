@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header" align="center">
						<select class="custom-select">
							<option selected>Տիպ</option>
							<option value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option>
						</select>
						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1">
								Գնված
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option2">
								Vacharvac
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option2">
								Satkac
							</label>
						</div>
						<button type="button" class="btn btn-primary btn-sm">Որոնում</button>
						<button type="button" class="btn btn-primary btn-sm">Ավելացնել</button>
					</div>
					<table class="table table-striped">
						<!--Table head-->
						<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Surname</th>
							<th>Country</th>
							<th>City</th>
							<th>Position</th>
							<th>Actions</th>
						</tr>
						</thead>
						<!--Table head-->
						<!--Table body-->
						<tbody>
						@foreach($animals as $animal)
							<tr>
								<th scope="row">1</th>
								<td>Kate</td>
								<td>Moss</td>
								<td>USA</td>
								<td>New York City</td>
								<td>Web Designer</td>
								<td>
									<a class="detail-icon padding-3" href="animals/"> <i class="glyphicon glyphicon-plus icon-plus"></i> </a>
									<a class="edit padding-3" href="#" title="Edit"><i class="glyphicon glyphicon-edit"></i></a>
									<a class="remove padding-3" href="#" title="Remove"><i class="glyphicon glyphicon-remove"></i></a>
								</td>
							</tr>
						@endforeach
						</tbody>
						<!--Table body-->
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection