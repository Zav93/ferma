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
							<th>Տիպ</th>
							<th>չ/մ</th>
							<th>Արժեքը</th>
							<th>Վաճառվածի </th>
							<th>Position</th>
							<th>Actions</th>
							<th>Actions</th>
						</tr>
						</thead>
						<!--Table head-->
						<!--Table body-->
						<tbody>
						@foreach($animals as $key => $animal)
							<tr>
								<th scope="row">{{ $key + 1 }}</th>
								<td>{{ $animal->type->name }}</td>
								<td>{{ $animal->measurement }}</td>
								<td>{{ $animal->bought_unit_price }}</td>
								<td>{{ $animal->sold_price }}</td>
								<td>{{ $animal->sold_weight }}</td>
								<td>{{ $animal->birth_date }}</td>
								<td>
									<a class="detail-icon padding-3" href="animals/create"> <i class="glyphicon glyphicon-plus icon-plus"></i></a>
									<a class="edit padding-3" href="animals/edit" title="Edit"><i class="glyphicon glyphicon-edit"></i></a>
									<a class="remove padding-3" href="animals/delete" title="Remove"><i class="glyphicon glyphicon-remove"></i></a>
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