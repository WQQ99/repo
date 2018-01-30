{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-md-8 col-md-offset-2">--}}
{{--<div class="panel panel-default">--}}
{{--<div class="panel-heading">Dashboard</div>--}}

{{--<div class="panel-body">--}}
{{--@if (session('status'))--}}
{{--<div class="alert alert-success">--}}
{{--{{ session('status') }}--}}
{{--</div>--}}
{{--@endif--}}

{{--You are logged in!--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endsection--}}


@extends('layouts.app')

@section('content')

	@if (Auth::user()->type == NULL)
		<h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-t-80 mg-b-10" style="text-align: center ; font-size: 22px;"><i>Are you a Supplier or Buyer?</i></h6>
		<p class="mg-b-30 tx-gray-600" style="text-align: center">Select an option below:</p>

		<div class="d-flex align-items-center justify-content-center bg-gray-300 ht-500 pd-x-20 pd-xs-x-0">

			<div id="buyer-container" class="card wd-350 shadow-base">
				<div class="card-body pd-x-20 pd-xs-40">
					<h5 class="tx-xs-24 tx-normal tx-gray-900 mg-b-15"style="text-align:center;"><u>I am a Buyer</u></h5>
					<p class="mg-b-30 tx-14" style="text-align:center;">Get quality products!
						<br/>Thousands of products available!</p>

					<button class="btn btn-indigo btn-block register-buyer-btn">Bring me there!</button>
				</div><!-- card-body -->
			</div><!-- card -->

			<div id="supplier-container" class="card wd-350 shadow-base">
				<div class="card-body pd-x-20 pd-xs-40">
					<h5 class="tx-xs-24 tx-normal tx-gray-900 mg-b-15" style="text-align:center;"><u>I am a Supplier</u></h5>
					<p class="mg-b-30 tx-14" style="text-align:center;">Fill your sales fast & easily!<br/><br/>    </p>

					<button class="btn btn-indigo btn-block register-supplier-btn">Start Free-Trial!</button>
				</div><!-- card-body -->
			</div><!-- card -->
		</div><!-- d-flex -->

		<script>
			$(".register-buyer-btn").on("click", function(){
                window.location.href = "/register-buyer";
			});

            $(".register-supplier-btn").on("click", function(){
                window.location.href = "/register-supplier";
            });
		</script>

	@elseif (Auth::user()->type == 1)
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="panel panel-default">
						<div class="panel-heading">I AM A SUPPLIER!</div>

						<div class="panel-body">
							@if (session('status'))
								<div class="alert alert-success">
									{{ session('status') }}
								</div>
							@endif

							You are logged in!
						</div>
					</div>
				</div>
			</div>
		</div>

	@elseif (Auth::user()->type == 0)
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="panel panel-default">
						<div class="panel-heading">I AM A CUSTOMER!</div>

						<div class="panel-body">
							@if (session('status'))
								<div class="alert alert-success">
									{{ session('status') }}
								</div>
							@endif

							You are logged in!
						</div>
					</div>
				</div>
			</div>
		</div>
	@endif
@endsection