@extends('layouts.app')

@section('content')
	<div class="br-mainpanel" style="margin-left: 0;">

		<div class="br-pageheader">
			<nav class="breadcrumb pd-0 mg-0 tx-12">
				<a class="breadcrumb-item" href="index.html">AliFastEZ</a>
				<a class="breadcrumb-item" href="#">Registration</a>
				<span class="breadcrumb-item active">Supplier</span>
			</nav>
		</div><!-- br-pageheader -->
		<div class="br-pagetitle">
			<i class="icon ion-android-laptop tx-70 lh-0 tx-gray-800"></i>
			<div class="pd-sm-l-20 mg-t-10 mg-sm-t-0">
				<h4 class="tx-gray-800 mg-b-5">Supplier Registration</h4>
				<p class="mg-b-0">Fill in your details now to register for a supplier account & start selling with
				                  us!</p>
			</div>
		</div><!-- d-flex -->

		<div class="br-pagebody">
			<div class="br-section-wrapper">
				<h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Details</h6>
				<p class="mg-b-30 tx-gray-600">A bordered form group wrapper but the label is in field of the form control.</p>

				<div class="form-layout form-layout-3">
					<form method="post" action="/register-supplier">
						<div class="row no-gutters">
							<div class="col-md-4">
								<div class="form-group">
									<input class="form-control" type="text" name="firstname"
									       placeholder="Enter firstname (required)">
								</div>
							</div><!-- col-4 -->
							<div class="col-md-4 mg-t--1 mg-md-t-0">
								<div class="form-group mg-md-l--1">
									<input class="form-control" type="text" name="lastname"
									       placeholder="Enter lastname (required)">
								</div>
							</div><!-- col-4 -->
							<div class="col-md-4 mg-t--1 mg-md-t-0">
								<div class="form-group mg-md-l--1">
									<input class="form-control" type="text" name="email"
									       placeholder="Enter email address">
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
                                                                                <option value="Singapore">Singapore</option>
                                                                                <option value="HK">Hong Kong</option>
									</select>
								</div>
							</div><!-- col-4 -->
						</div><!-- row -->
						<div class="form-layout-footer bd pd-20 bd-t-0">
							<button class="btn btn-NextPage" >Submit Form</button>
							<button class="btn btn-secondary">Cancel</button>
						</div><!-- form-group -->
                                                                                               
					</form>
				</div><!-- form-layout -->
			</div><!-- row -->
		</div>
	</div>
@endsection