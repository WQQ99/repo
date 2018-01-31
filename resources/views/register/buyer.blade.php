@extends('layouts.app')

@section('content')
	<div class="br-mainpanel" style="margin-left: 0;">

		<div class="br-pageheader">
			<nav class="breadcrumb pd-0 mg-0 tx-12">
				<a class="breadcrumb-item" href="index.html">AliFastEZ</a>
				<a class="breadcrumb-item" href="#">Registration</a>
				<span class="breadcrumb-item active">Buyer</span>
			</nav>
		</div><!-- br-pageheader -->
		<div class="br-pagetitle">
			<i class="icon ion-android-laptop tx-70 lh-0 tx-gray-800"></i>
			<div class="pd-sm-l-20 mg-t-10 mg-sm-t-0">
				<h4 class="tx-gray-800 mg-b-5"style="text-align: center;">Buyer Registration</h4>
				<p class="mg-b-0">Fill in your details now to register for a buyer account & start purchasing with
				                  us!</p>
			</div>
		</div><!-- d-flex -->

		<div class="br-pagebody">
			<div class="br-section-wrapper">
				<h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Details</h6>
				<p class="mg-b-30 tx-gray-600">A bordered form group wrapper but the label is in field of the form control.</p>

				<div class="form-layout form-layout-3">
					<form method="post" action="/register-buyer">
						<div class="row no-gutters">
                                                    <div class="col-md-4">
                                                            <div class="form-group">
                                                                    <input class="form-control" type="text" name="firstname"
                                                                           placeholder="First Name (Required)">
                                                            </div>
                                                    </div><!-- col-4 -->
                                                    <div class="col-md-4 mg-t--1 mg-md-t-0">
                                                            <div class="form-group mg-md-l--1">
                                                                    <input class="form-control" type="text" name="lastname"
                                                                           placeholder="Last Name (Required)">
                                                            </div>
                                                    </div><!-- col-4 -->
                                                    <div class="col-md-4 mg-t--1 mg-md-t-0">
                                                        <div class="form-group mg-md-l--1">
                                                            <input class="form-control" type="text" name="username"
                                                                   placeholder="Username (Required)">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-4">
                                                            <div class="form-group bd-t-0-force">
                                                                    <input class="form-control" type="text" name="password" placeholder="Password">
                                                            </div>
                                                    </div><!-- col-8 -->
                                                    <div class="col-md-4">
                                                            <div class="form-group bd-t-0-force">
                                                                    <input class="form-control" type="text" name="password-confirm" placeholder="Re-Enter Password">
                                                                  
                                                            </div>
                                                    </div><!-- col-8 -->
                                                    
                                                   
                                                    <div class="col-md-4 mg-t--1 mg-md-t-0">
                                                            <div class="form-group mg-md-l--1">
                                                                    <input class="form-control" type="text" name="email"
                                                                           placeholder="Email">
                                                            </div>
                                                    </div><!-- col-4 -->
                                                    
                                                </div><!-- row -->
						<div class="form-layout-footer bd pd-19 bd-t-0">
							<button class="btn btn-info">Next Page</button>
							<button class="btn btn-secondary">Cancel</button>
						</div><!-- form-group -->
					</form>
                                    
                                </div>
                        </div>
		</div>
	</div>
@endsection