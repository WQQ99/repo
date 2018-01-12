@extends('layouts.app')

@section('content')

<h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-t-80 mg-b-10">Are you a Supplier or Buyer?</h6>
<p class="mg-b-30 tx-gray-600">Select an option below:</p>

<div class="d-flex align-items-center justify-content-center bg-gray-300 ht-500 pd-x-20 pd-xs-x-0">

	<div id="buyer-container" class="card wd-350 shadow-base">
		<div class="card-body pd-x-20 pd-xs-40">
			<h5 class="tx-xs-24 tx-normal tx-gray-900 mg-b-15" style="text-align:center;"><u>I am a Customer</u></h5>
			<p class="mg-b-30 tx-14" style="text-align:center;">Get quality products!
			                         <br/>Thousands of products available!</p>

			<button class="btn btn-danger btn-block">Bring me there!</button>
		</div><!-- card-body -->
	</div><!-- card -->

	<div id="supplier-container" class="card wd-350 shadow-base">
		<div class="card-body pd-x-20 pd-xs-40">
			<h5 class="tx-xs-24 tx-normal tx-gray-900 mg-b-15" style="text-align:center;"><u>I am a Supplier</u></h5>
			<p class="mg-b-30 tx-14" style="text-align:center;">Fill your sales fast & easily!<br/><br/>    </p>

			<button class="btn btn-danger btn-block">Start Free-Trial!</button>
		</div><!-- card-body -->
	</div><!-- card -->
</div><!-- d-flex -->

@endsection