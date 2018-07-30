@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header" align="center">
						<form action="search" method="post">
							<label for="animalTypesDropBox">Տիպ</label>
							<select id="animalTypesDropBox" class="custom-select" name="type_id">
								@foreach($animalTypes as $animalType)
									<option value={{ $animalType->id }}>{{ $animalType->name }}</option>
								@endforeach
							</select>
							<div class="form-check">
								<label class="form-check-label">
									<input type="checkbox"  name="" class="form-check-input" value="option1">
									Գնված
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input type="checkbox" class="form-check-input" value="option2">
									Վաճառված
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input type="checkbox" class="form-check-input" value="option2">
									Սատկած
								</label>
							</div>
							<button type="button" class="btn btn-primary btn-sm">Որոնում</button>
						</form>
					</div>
					<table class="table table-striped">
						<!--Table head-->
						<thead>
						<tr>
							<th>#</th>
							<th>Տիպ</th>
							<th>չ/մ</th>
							<th>Քանակը</th>
							<th>Գն. օրը</th>
							<th>Գն. քաշը</th>
							<th>Գն. հատի արժեքը</th>
							<th>Վաճ. օրը</th>
							<th>Վաճ. արժեքը</th>
							<th>Վաճ. քաշը</th>
							<th>Սատկ. օրը</th>
							<th>Ծն. օրը</th>
							<th>Ընդ. գին</th>
							<th>Գործ.</th>
						</tr>
						</thead>
						<!--Table head-->
						<!--Table body-->
						<tbody>
						@foreach($animals as $key => $animal)
							<tr>
								<th scope="row">{{ $key + 1 }}</th>
								<td>{{ $animal->type->name }}</td>
								<td>{{ $animal->measurement->name }}</td>
								<td>{{ $animal->count }}</td>
								<td>{{ $animal->bought_date }}</td>
								<td>{{ $animal->bought_weight }}</td>
								<td>{{ $animal->bought_price }}</td>
								<td>{{ $animal->sold_date }}</td>
								<td>{{ $animal->sold_price }}</td>
								<td>{{ $animal->sold_weight }}</td>
								<td>{{ $animal->death_date }}</td>
								<td>{{ $animal->birth_date }}</td>
								<td>{{ $animal->unit_price }}</td>
								<td>
									<a class="edit padding-3" href={{ url('/animals/' . $animal->id. '/edit') }} title="Edit"><i class="glyphicon glyphicon-edit"></i></a>
									{{--<a class="remove padding-3" href="animals/delete" title="Remove"><i class="glyphicon glyphicon-remove"></i></a>--}}
									<form class="custom-form" method="post" action="/animals/{{ $animal->id }}">
										{{ method_field('DELETE') }}
										<div>
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
										</div>
										<button class="custom-edit-btn clickable" type="submit"><i class="glyphicon glyphicon-remove"></i></button>
									</form>
								</td>
							</tr>
						@endforeach
						</tbody>
						<!--Table body-->
					</table>
				</div>
				<br>
				<a href="animals/create">
					<button type="button" class="btn btn-primary">
						Ավելացնել
					</button>
				</a>
			</div>
		</div>
	</div>
@endsection
@section('scripts')
	<script>
		setTimeout(function () {
			$(document).ready(function() {
				$( "#boughtDate" ).datepicker({
					changeMonth: true,
					changeYear: true,
					dateFormat: 'yy-mm-dd'
				});
				$( "#soldDate" ).datepicker({
					changeMonth: true,
					changeYear: true,
					dateFormat: 'yy-mm-dd'
				});
				$( "#deathDate" ).datepicker({
					changeMonth: true,
					changeYear: true,
					dateFormat: 'yy-mm-dd'
				});
				$( "#birthDate" ).datepicker({
					changeMonth: true,
					changeYear: true,
					dateFormat: 'yy-mm-dd'
				});
			});
		}, 1000);
	</script>
@stop
@yield('scripts')