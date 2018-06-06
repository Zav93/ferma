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
					</div>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">First</th>
								<th scope="col">Last</th>
								<th scope="col">Handle</th>
							</tr>
						</thead>
						<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection