@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<form class="padding-10" method="post" action='/animals'>
						{{ method_field('POST') }}
						<div>
							@csrf
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
						</div>
						<div class="form-group">
							<label for="animalTypes">Տիպ</label><br/>
							<select id="animalTypes" class="custom-select" name="type_id">
								@foreach($animalTypes as $animalType)
									<option value="{{ $animalType->id }}">{{ $animalType->name }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="measurement">չ/մ</label><br/>
							<select id="measurement" class="custom-select" name="measurement_id">
								@foreach($measurements as $measurement)
									<option value="{{ $measurement->id }}">{{ $measurement->name }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="name">Քանակը</label>
							<input class="form-control" id="count" name="count" value=>
						</div>
						<div class="form-group">
							<label for="name">Գն. օրը</label>
							<input class="form-control" id="boughtDate" name="bought_date" value=>
						</div>
						<div class="form-group">
							<label for="name">Գն. արժեքը</label>
							<input class="form-control" id="boughtPrice" name="bought_price" value=>
						</div>
						<div class="form-group">
							<label for="name">Վաճ. օրը</label>
							<input class="form-control" id="soldDate" name="sold_date" value=>
						</div>
						<div class="form-group">
							<label for="name">Վաճ. արժեքը</label>
							<input class="form-control" id="soldPrice" name="sold_price" value=>
						</div>
						<div class="form-group">
							<label for="name">Վաճ. քաշը</label>
							<input class="form-control" id="soldWeight" name="sold_weight" value=>
						</div>
						<div class="form-group">
							<label for="name">Սատկ. օրը</label>
							<input class="form-control" id="deathDate" name="death_date" value=>
						</div>
						<div class="form-group">
							<label for="name">Ծն. օրը</label>
							<input class="form-control" id="birthDate" name="birth_date" value=>
						</div>
						<button type="submit" class="btn btn-primary">Ավելացնել</button>
					</form>
				</div>

			</div>
		</div>
	</div>
@stop
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