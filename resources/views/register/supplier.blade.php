@extends('layouts.app')

@section('content')

	<div class="br-section-wrapper">


		<h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-t-80 mg-b-10">Placeholder as Label</h6>
		<p class="mg-b-30 tx-gray-600">A bordered form group wrapper but the label is in field of the form control.</p>

		<div class="form-layout form-layout-3">
			<div class="row no-gutters">
				<div class="col-md-4">
					<div class="form-group">
						<input class="form-control" type="text" name="firstname"
						       placeholder="Enter firstname (required)">
					</div>
				</div><!-- col-4 -->
				<div class="col-md-4 mg-t--1 mg-md-t-0">
					<div class="form-group mg-md-l--1">
						<input class="form-control" type="text" name="lastname" placeholder="Enter lastname (required)">
					</div>
				</div><!-- col-4 -->
				<div class="col-md-4 mg-t--1 mg-md-t-0">
					<div class="form-group mg-md-l--1">
						<input class="form-control" type="text" name="email" placeholder="Enter email address">
					</div>
				</div><!-- col-4 -->
				<div class="col-md-8">
					<div class="form-group bd-t-0-force">
						<input class="form-control" type="text" name="address" placeholder="Enter address">
					</div>
				</div><!-- col-8 -->
				<div class="col-md-4">
					<div class="form-group mg-md-l--1 bd-t-0-force">
						<select id="select2-b" class="form-control" data-placeholder="Choose country">
							<option label="Choose country"></option>
							<option value="USA">United States of America</option>
							<option value="UK">United Kingdom</option>
							<option value="China">China</option>
							<option value="Japan">Japan</option>
						</select>
					</div>
				</div><!-- col-4 -->
			</div><!-- row -->
			<div class="form-layout-footer bd pd-20 bd-t-0">
				<button class="btn btn-info">Submit Form</button>
				<button class="btn btn-secondary">Cancel</button>
			</div><!-- form-group -->
		</div><!-- form-layout -->
	</div><!-- row -->

@endsection